<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FriendRequestNotification;
use Illuminate\Http\Request;

class FriendshipController extends Controller
{
    function friends(Request $request) {
        return view('profile.friends' ,['user'=> $request->user()]);
    }

    public function addFriend(Request $request, $userId)
    {
        $user = auth()->user();
        $friendId = $request->friend_id;
        $friend = User::findOrFail($friendId);

        $user->friends()->attach($friendId);

        $friend->notify(new FriendRequestNotification($user));

        return redirect()->back()->with('status', 'Friend added successfully.');
    }

    public function acceptFriend(Request $request, $friendId)
    {
        $user = auth()->user();

        $friendRequest = $user->friendRequests()->where('user_id', $friendId)->first();

        if ($friendRequest) {
            $user->friendRequests()->updateExistingPivot($friendId, ['accepted' => true]);

            return redirect()->back()->with('status', 'Friend request accepted.');
        }

        return redirect()->back()->with('error', 'Friend request not found.');
    }
}
