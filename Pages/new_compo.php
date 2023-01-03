<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/main.css" rel="stylesheet">
    <link href="../style/fondsvg.css" rel="stylesheet">
    <link rel = "icon" href = "../images/logo_diggit.png" 
        type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>DIGGIT.ME- Ajout composant</title>
</head>

<body>
    <!-- -----------Premiere ligne du navbar------ -->
    <header>
        <div class="header-main">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img id="logo" src="../images/diggit.png" width="200px" height="auto" alt="Bulma logo">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <div class="navbar-item has-text-centered">
                            <div class="field has-addons">
                                <div class="control">
                                    <input id="rech" class="input" type="text" placeholder="Chercher un composant ">
                                </div>
                                <div class="control">
                                    <button class="button" type="submit"><img type="sub" class="loupe"
                                            src="../images/loupe.png" alt="loupe"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item has-text-centered">
                          
                                <div class="dropdown">
                                    <div class="dropdown-trigger">
                                        <button id="btn" class="button is-dark">
                                            <span class="icon">
                                                <i class="fa fa-user"></i>

                                            </span>
                                            <span>Mon compte</span>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu is-dark" id="dropdown-menu3" role="menu">
                                        <div class="dropdown-content">
                                            
                                            <a href="#" class="dropdown-item">
                                                Mon compte
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                Mes configurations
                                            </a>
                                            
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                Se Deconnecter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button style="margin-left:2%" id="btnpanier" class="button is-white">
                                    <span class="icon has-text-dark">
                                        <img src="../images/cart.gif" alt="cart">

                                    </span>
                                    <span href="">Panier</span>
                                </button>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- -----------Deuxieme ligne du navbar------ -->

        <div class="header-secondary">
            <nav class="secondary-navbar">
                <div class="container">


                    <div id="secondaryNavbar" class="navbar-menu">
                        <div class="navbar-start" style="margin-left: 8vw;">
                            <a class="navbar-item" href="#" style="border-left: 1px solid white;">
                                Acceuil
                            </a>

                            <a class="navbar-item" href="#">
                                Creer une configuration
                            </a>

                            <a class="navbar-item" href="#">
                                Communauté
                            </a>

                            <a class="navbar-item" href="#">
                                A propos
                            </a>
                        </div>
                    </div>

                </div>
        </div>
        </nav>
    </header>
    <!----header---->
    <section class="hero">
        <div class="background--custom">
            <div class="hero-body">
                <div class="container">

                    <h1 class="title has-text-white">
                        Bonjour //////ADMIN/////
                    </h1>
                    <h2 class="subtitle has-text-white">
                        Ici vous pouvez ajouter des composants
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!---------------------ajout composant--------------------------------->
    <div class="hero is-fullheight" style="background: url('../images/fondnewcomp.svg') center/cover no-repeat;">


        <div id="pres" class="box has-text-centered has-background-white ">
            <h1 style="font-family: 'Montserrat', sans-serif;" class="title is-2">Completer le formulaire ci-dessous:
            </h1>
            <form action="./new_compo_action.php" id="form_composants" method="post">


                <div class="field">

                    <div class="control ">
                        <label for="type" class="choixtype"><b>Type de composant:</b></label>
                        <div class="select">
                            <select  name="type" id="type" onchange="showDiv()">
                                <option value="erreur_choix_composant" selected>Choisir</option>
                                <option value="cooler">Refroidissement de CPU</option>
                                <option value="stockage">Stockage</option>
                                <option value="board">Carte mère</option>
                                <option value="alim">Alimentation</option>
                                <option value="gpu">Carte Graphique</option>
                                <option value="boiter">Un boitier</option>
                                <option value="cpu">Un processeur</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label for="name"><b class="is-pulled-left">Nom du composant:</b></label>
                    <input class="input" placeholder="Inserer le nom du composant" name="name">
                </div>
                <div class="field">
                    <label for="price"><b class="is-pulled-left">Prix:</b></label>
                    <input class="input" placeholder="Entrez le prix du composant" name="price">
                </div>
                <div class="field">
                    <label for="brand"><b class="is-pulled-left">Marque:</b></label>
                    <input class="input" placeholder="Repetez la marque" name="brand">
                </div>
                <div class="field">
                    <label for="rating"><b class="is-pulled-left">La note:</b></label>
                    <input class="input" placeholder="Entrez la note /5" name="rating">
                </div>
                <div class="field">
                    <label for="URL"><b class="is-pulled-left">L'URL :</b></label>
                    <input class="input" placeholder="L'url" name="URL">
                    <p class="has-text-grey">Utilisez le lien suivant <b>https://drive.google.com/uc?export=view&id="imageid"</b> en remplaçant  l'imageid par l'id de l'image (Vous pouvez le trouver ici : https://drive.google.com/file/d/<b>13jueBPF680fgvWnK2JImyf13PhgjsFBS</b>/view?usp=share_link ) </p>
                </div>


                <div class="field">
                    <label class="label ">
                        <h3 class="title is-4">Est-il disponible ? :</h3>
                    </label>
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="is_available" value="1">
                            Oui
                        </label>
                        <label class="radio">
                            <input type="radio" name="is_available" value="0">
                            Non
                        </label>
                    </div>
                </div>
                <hr>



                <div id="stockage" style="display: none;">
                    <div class="field">
                        <label class="label ">
                            <h3 class="title is-4">Quel est le type de stockage:</h3>
                        </label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="stockage_type" value="SSD">
                                Un SSD
                            </label>
                            <label class="radio">
                                <input type="radio" name="stockage_type" value="HDD">
                                Un Disque dur
                            </label>
                        </div>
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">L'espace de stockage:</b></label>
                        <input class="input" placeholder="Entrez le stockage en GB" name="stockage_taille">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">La vitesse</b></label>
                        <input class="input" placeholder="Entrez la vitesse" name="stockage_vitesse">
                    </div>

                </div>


                <!-- Div qui apparaît si l'option "board" est choisie -->


                <div id="board" style="display: none;">
                    <h3 class="title is-2">paramètres de la carte mere :</h3>

                    <div class="field">
                        <label><b class="is-pulled-left">Type de socket:</b></label>
                        <input class="input" placeholder="Entrez le type de socket" name="board_socket">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">Le nombre de slot de RAM:</b></label>
                        <input class="input" placeholder="Entrez le nombre de slot" name="board_ram">
                    </div>
                </div>
                <!-- Div qui apparaît si l'option "cooler " est choisie -->

                <div id="cooler" style="display: none;">
                    <div class="field">
                        <label class="label ">
                            <h3 class="title is-4">Quel est le type de Refroidissement ?</h3>
                        </label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="cooler_type" value="VentiRad">
                                Un VentiRad
                            </label>
                            <label class="radio">
                                <input type="radio" name="cooler_type" value="waterC">
                                Un Water Cooling
                            </label>
                        </div>
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">le niveau sonore</b></label>
                        <input class="input" placeholder="Entrez le niveau sonore" name="cooler_son">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">La taille </b></label>
                        <input class="input" placeholder="Entrez la taille en MM" name="cooler_taille">

                        <div class="field">
                            <label><b class="is-pulled-left">La vitesse de rotation </b></label>
                            <input class="input" placeholder="Entrez la vitesse" name="cooler_speed">
                        </div>
                    </div>
                </div>
               
                <!-- Div qui apparaît si l'option "alim" est choisie -->
                <div id="alim" style="display: none;">
                    <h3 class="title is-2">paramètres de l'alimentation' :</h3>

                    <div class="field">
                        <label><b class="is-pulled-left">Consomation:</b></label>
                        <input class="input" placeholder="Entrez la consomation en Watts" name="alim_wattage">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">Est-elle modulable ?</b></label>

                        <div class="control ">
                            <div id="module" class="select is-pulled-left">
                                <select name="is_modulable" id="is_modulable">
                                    <option value="0" selected>Non</option>
                                    <option value="2">Full</option>
                                    <option value="1">Semi-modulable</option>

                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Div qui apparaît si l'option "gpu" est choisie -->
                <div id="gpu" style="display: none;">
                    <h3 class="title is-2">paramètres de la carte graphique :</h3>

                    <div class="field">
                        <label><b class="is-pulled-left">Fréquence</b></label>
                        <input class="input" placeholder="Entrez la  Fréquence en MHz" name="gpu_puiss">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">la RAM:</b></label>
                        <input class="input" placeholder="Entrez la ram du gpu" name="gpu_ram">
                    </div>

                </div>
                <!-- Div qui apparaît si l'option "boiter" est choisie -->
                <div id="boiter" style="display: none;">
                    <h3 class="title is-2">paramètres du boiter :</h3>

                    <div class="field">
                        <label><b class="is-pulled-left">Type de boitier</b></label>
                        <input class="input" placeholder="Entrez la norme du boitier" name="boiter_type_case">
                    </div>

                </div>
                <!-- Div qui apparaît si l'option "cpu" est choisie -->
                <div id="cpu" style="display: none;">
                    <h3 class="title is-2">paramètres du CPU :</h3>

                    <div class="field">
                        <label><b class="is-pulled-left">Puissance:</b></label>
                        <input class="input" placeholder="Entrez la  puissance" name="cpu_puiss">
                    </div>

                    <div class="field">
                        <label><b class="is-pulled-left">Le nombre de Cores:</b></label>
                        <input class="input" placeholder="Entrez le nombre de cores" name="cpu_nbr_core">
                    </div>
                    <div class="field">
                        <label><b class="is-pulled-left">La consomation:</b></label>
                        <input class="input" placeholder="Entrez la consommation en W" name="cpu_conso">
                    </div>
                </div>
                <button type="submit" class="button is-info is-medium is-fullwidth">Ajouter +</button>



            </form>
            <!-------------Message succès-------------->
            <div class="notification is-success" id="msg_success">
                Le composant a été ajouté avec succes !
            </div>
            <div class="notification is-danger" id="msg_error">
                Le composant n'a pas été ajouté !
                <div style="text"id="errors"></div>

            </div>
        </div>
    </div>

    <!-------------Footer-------------->
    <div class="footer">
        <div class="container">
            <div class="rang">
                <div class="footer_col1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger notre application maintenant sur Android et IOS</p>
                    <div class="app_logo">
                        <a href="https://play.google.com/store/search?q=footprint"><img class="playstr"
                                src="../images/playstore.png"></a>
                        <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr"
                                src="../images/appstore.png"></a>
                    </div>
                </div>
                <div class="footer_col2">
                    <img src="../images/diggit.png">
                    <p>Notre objectif est de rendre agréable et accessible l'achat et le montage d'ordinateurs
                    </p>
                </div>
                <div class="footer_col3">
                    <h3>Suivez-nous</h3>
                    <ul>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://www.twitter.com/">Twitter</a></li>
                        <li><a href="https://www.Facebook.com/">Facebook</a></li>
                        <li><a href="https://www.youtube.com/">youtube</a></li>




                    </ul>

                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - DIGIT.ME</p>
        </div>
    </div>
    <script src="../scripts/newcompo.js"></script>
    <script src="../scripts/main.js"></script>
    
    
</body>

</html>