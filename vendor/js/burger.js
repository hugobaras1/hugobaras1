var burger = document.getElementById("burgerIcon");
var burgerAnimatedDiv = document.getElementById("burgerAnimatedDiv");

burger.addEventListener("click", function () {
    burgerAnimatedDiv.classList.toggle("hidden");
});

const cross = document.getElementById("cross");
cross.addEventListener("click", function () {
    burgerAnimatedDiv.classList.toggle("hidden");
});