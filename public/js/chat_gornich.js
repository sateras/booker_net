// localStorage.clear()
// sessionStorage.setItem('5','ckenvrjn2i4uvh')

function addTaskMessage() {

  let text = document.getElementById('text').value;

  localStorage.setItem(localStorage.length+1, text);
  document.location.reload(true)

}