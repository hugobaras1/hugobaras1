<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/css/style.css">
</head>

<body>
    <header class="header">
        <div class="first_container">
            <div class="burger" id="burgerIcon">
                <img src="../vendor/burger.svg" alt="burger">

            </div>

            <div class="title">
                <h1>Linking</h1>
            </div>
            <div class="hyperlinks">
                <div class="dropdown" id="etudiant">
                    <a href="#" class="header_link">
                        <p>Cherchez votre étudiant
                            <img src="../vendor/down_arrow.svg" alt="" class="down_arrow" id="down_arrow_etudiant">
                        </p>
                    </a>
                </div>

                <div class="dropdown" id="demande">
                    <a href="#" class="header_link">
                        <p>Déposez votre demande
                            <img src="../vendor/down_arrow.svg" alt="" class="down_arrow" id="down_arrow_demande">
                        </p>
                    </a>
                </div>
                <div class="dropdown" id="pourquoi">
                    <a href="#" class="header_link">
                        <p>Pourquoi Linking
                            <img src="../vendor/down_arrow.svg" alt="" class="down_arrow" id="down_arrow_pourquoi">
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="second_container">

            <div class="search_container" id="searchContainer">
                <div class="search_icon" id="search_icon">
                    <img src="../vendor/search.svg" alt="search">
                </div>
            </div>
            <div class="search_container_responsive" id="searchContainerResponsive">
                <div class="search_icon">
                    <img src="../vendor/search.svg" alt="search">
                </div>
            </div>
            <?php if (isset($_SESSION['login'])) { ?>
                <div class="signButton">
                    <a href="disconnect.php">
                        <div class="logOut">
                            <p>Se déconnecter</p>
                        </div>
                    </a>
                    <a href="account.php">
                        <div class="userButton">
                            <img src="../vendor/user_icon.svg" alt="" class="user_icon">
                        </div>
                    </a>
                </div>
            <?php } else { ?>
                <div class="signButton">
                    <div class="signInButton">
                        <p>Se connecter</p>
                    </div>
                    <div class="signUpButton">
                        <p>S'inscrire</p>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div id="searchAnimatedDiv" class="hidden">
            <div class="back_arrow" id="backArrow">
                <img src="../vendor/back_arrow.svg" alt="back_arrow">
            </div>
            <div class="search_barre">
                <div class="search_icon">
                    <img src="../vendor/search.svg" alt="search">
                </div>
                <input type="text" name="search_input" placeholder="Rechercher..." class="search_input">
            </div>
        </div>
        <div id="burgerAnimatedDiv" class="hidden">
            <div class="cross" id="cross">
                <img src="../vendor/cross.svg" alt="cross">
            </div>
            <div class="dropdown_responsive">
                <p>Trouver Etudiant <img src="../vendor/down_arrow.svg" alt="" class="down_arrow"></p>
            </div>
            <div id="deroll_menu_etudiant_responsive hidden">Trouver Etudiant</div>
            <div class="dropdown_responsive">
                <p>Deposer demande <img src="../vendor/down_arrow.svg" alt="" class="down_arrow"></p>
            </div>
            <div id="deroll_menu_demande_responsive hidden">Deposer demande</div>

            <div class="dropdown_responsive">
                <p>Pourquoi Linking <img src="../vendor/down_arrow.svg" alt="" class="down_arrow"></p>
            </div>
            <div id="deroll_menu_pourquoi_responsive hidden">Pourquoi Linking</div>

        </div>

    </header>
    <div id="deroll_menu_etudiant" class="deroll_menu hidden">Trouver Etudiant</div>
    <div id="deroll_menu_demande" class="deroll_menu hidden">Deposer demande</div>
    <div id="deroll_menu_pourquoi" class="deroll_menu hidden">Pourquoi Linking</div>

    <script src="../vendor/js/search.js"></script>
    <script src="../vendor/js/mouseover.js"></script>
    <script src="../vendor/js/burger.js"></script>