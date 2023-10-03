function toggleDropDown(element, derollMenu, downArrow) {
    element.addEventListener("click", function () {
        derollMenu.classList.remove("hidden");
        downArrow.classList.add("rotate_arrow");

    });

    element.addEventListener("click", function () {
        derollMenu.classList.add("hidden");
        downArrow.classList.remove("rotate_arrow");

    });

}