function handleMouseEvents(element, derollMenu, downArrow) {
    element.addEventListener("mouseover", function () {
        derollMenu.classList.remove("hidden");
        downArrow.classList.add("rotate_arrow");

    });

    element.addEventListener("mouseout", function () {
        derollMenu.classList.add("hidden");
        downArrow.classList.remove("rotate_arrow");

    });
}

var etudiant = document.getElementById("etudiant");
var demande = document.getElementById("demande");
var pourquoi = document.getElementById("pourquoi");
var derollMenuEtudiant = document.getElementById("deroll_menu_etudiant");
var derollMenuDemande = document.getElementById("deroll_menu_demande");
var derollMenuPourquoi = document.getElementById("deroll_menu_pourquoi");
var downArrowEtudiant = document.getElementById("down_arrow_etudiant");
var downArrowDemande = document.getElementById("down_arrow_demande");
var downArrowPourquoi = document.getElementById("down_arrow_pourquoi");

handleMouseEvents(etudiant, derollMenuEtudiant, downArrowEtudiant);
handleMouseEvents(demande, derollMenuDemande, downArrowDemande);
handleMouseEvents(pourquoi, derollMenuPourquoi, downArrowPourquoi);
handleMouseEvents(derollMenuEtudiant, derollMenuEtudiant, downArrowEtudiant);
handleMouseEvents(derollMenuDemande, derollMenuDemande, downArrowDemande);
handleMouseEvents(derollMenuPourquoi, derollMenuPourquoi, downArrowPourquoi);
