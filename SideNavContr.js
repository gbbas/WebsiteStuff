function ChangeNav() {
  console.log(document.getElementById("mySidenav").style.width);
  if (document.getElementById("mySidenav").style.width == "250px") {
  closeNav();
  } else if (document.getElementById("mySidenav").style.width = "0px"){
  openNav();
  }
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
} 
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
