let icon = document.getElementById("icon");
let changeIcon = function(icon) {
  icon.classList.toggle('fa-times')
}
let secondIcon = function(not) {
  not.classList.toggle('fa sun')
}

icon.onclick = function(){
  document.body.classList.toggle("dark-theme");
 
}