var sideBar = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    sideBar.classList.toggle("toggled");
};
