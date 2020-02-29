document.getElementById("btn-menu").addEventListener("click", displayMenu);
function displayMenu() {
    document.querySelector(".resize").classList.toggle("btn-menu-open");
    var x = document.querySelector(".menuTel");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}