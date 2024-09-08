<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Friends') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if(session('status'))
                <div class="p-4 mb-6 bg-green-100 text-green-800 border border-green-200 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            @foreach(auth()->user()->notifications as $notification)
                <div class="p-4 mb-6 bg-green-100 text-green-800 border border-green-200 rounded-lg">
                    {{ $notification->data['message'] }}
                    <span>{{ $notification->created_at->diffForHumans() }}</span>
                </div>
            @endforeach

            <!-- Блок с информацией о вашем ID -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="font-semibold text-lg text-gray-800">{{ __('Your User ID') }}</h3>
                    <p class="mt-2 text-gray-600">{{ __('Use this ID to share with others so they can add you as a friend.') }}</p>
                    <div class="mt-4 p-4 bg-gray-100 rounded-md">
                        <span class="font-mono text-sm">{{ auth()->user()->id }}</span>
                    </div>
                </div>
            </div>

            <!-- Блок для добавления друзей -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="font-semibold text-lg text-gray-800">{{ __('Add a Friend') }}</h3>
                    <form method="post" action="{{ route('friend.add', auth()->user()->id) }}" class="mt-4 space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="friend_id" :value="__('Friend User ID')" />
                            <x-text-input id="friend_id" name="friend_id" type="text" class="mt-1 block w-full" placeholder="Enter User ID" required />
                            <x-input-error class="mt-2" :messages="$errors->get('friend_id')" />
                        </div>
                        <x-primary-button>{{ __('Add Friend') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Блок со списком друзей и запросов -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="font-semibold text-lg text-gray-800">{{ __('Your Friends') }}</h3>
                    <ul class="mt-4 space-y-2">
                        @forelse (auth()->user()->friends as $friend)
                            <li class="text-gray-700">
                                {{ $friend->name }} (ID: {{ $friend->id }})
                            </li>
                        @empty
                            <li class="text-gray-600">{{ __('You have no friends yet.') }}</li>
                        @endforelse
                    </ul>

                    <h3 class="font-semibold text-lg text-gray-800 mt-6">{{ __('Friend Requests') }}</h3>
                    <ul class="mt-4 space-y-2">
                        @forelse (auth()->user()->friendRequests as $request)
                            <li class="text-gray-700 flex justify-between items-center">
                                {{ $request->name }} (ID: {{ $request->id }})
                                <form method="post" action="{{ route('friend.accept', $request->id) }}">
                                    @csrf
                                    <x-primary-button>{{ __('Accept') }}</x-primary-button>
                                </form>
                            </li>
                        @empty
                            <li class="text-gray-600">{{ __('No pending friend requests.') }}</li>
                        @endforelse
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>