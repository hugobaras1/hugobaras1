var searchContainer = document.getElementById("searchContainer");
var searchIcon = document.getElementById("search_icon");

searchContainer.addEventListener("click", function createInputElement() {
    var inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.placeholder = "Rechercher...";

    searchContainer.appendChild(inputElement);

    searchContainer.style.width = "15em";
    searchContainer.style.cursor = "text";
    searchContainer.style.justifyContent = "flex-start";

    inputElement.style.border = "none";

    searchContainer.removeEventListener("click", createInputElement);
    searchIcon.style.margin = "0.5em";

}, { once: true });


const searchContainerResponsive = document.getElementById("searchContainerResponsive");
const animatedDiv = document.getElementById("searchAnimatedDiv");

searchContainerResponsive.addEventListener("click", function () {
    animatedDiv.classList.toggle("hidden");
});

const backArrow = document.getElementById("backArrow");
backArrow.addEventListener("click", function () {
    animatedDiv.classList.toggle("hidden");
});