<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/main.css" rel="stylesheet">
    <link href="../style/ConfigPc.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <div class="buttons">
                                <button class="button is-dark">
                                    <span class="icon">
                                        <i class="fa fa-user"></i>

                                    </span>
                                    <span>Mon compte</span>
                                </button>
                                <button class="button is-white">
                                    <span class="icon has-text-dark">
                                        <img src="../images/cart.gif" alt="cart">

                                    </span>
                                    <span href="">Panier</span>
                                </button>
                            </div>
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
                            <a class="navbar-item" href="../iindex.php" style="border-left: 1px solid white;">
                                Acceuil
                            </a>

                            <a class="navbar-item" href="Cr??ationPc.php">
                                Creer une configuration
                            </a>

                            <a class="navbar-item" href="#">
                                Communaut??
                            </a>

                            <a class="navbar-item" href="#">
                                A propos
                            </a>
                        </div>
                    </div>

                </div>

            </nav>
        </div>
    </header>
    <!----contenu---->


    <!---------------------Cr??ation pc--------------------------------->
    <div>
    <button id="btn" class="button is-link">Board</button>

    <div class="modal" id="modal-id">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div id="container">
                <form>
                    <table>
                      <thead>
                        <tr>
                            <td>nom</td>
                            <td>Prix</td>
                            <td>brand</td>
                            <td>ram</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
      
       $compteur = 1;
       $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    
       $sql = "SELECT * FROM composants_board where id_comp = $compteur";
       $req = $bdd->prepare($sql); 
       $req ->execute();
       while($donne = $req -> fetch())
                    {
                        echo "<tr>";
                        echo "<td>".$donne['name']."</option> ";
                        echo "<td>".$donne['price']."</option> ";
                        echo "<td>".$donne['brand']."</option> ";
                        echo "<td>".$donne['ram']."</option> ";
                        echo "<td>   <form method='post' action='Cr??ationPc.php'>
                        <input type='submit' name='button1' 
                            value='Button1'/></form> </td>";
                            $_SESSION['name']=$donne['name'];
                            $_SESSION['price']=$donne['price'];
                        $compteur = $compteur + 1;
                        $sql = "SELECT * FROM composants_board where id_comp = $compteur";
                        $req = $bdd->prepare($sql); 
                        $req ->execute();
                    }
?>
                    </tbody>
                    </table>
                </form>
            </div>
            <button class="modal-close is-large" aria-label="close"> </button>
        </div>
    </div>
    </div>
    
    <!-------------Footer-------------->
    <div class="footer">
        <div class="container">
            <div class="rang">
                <div class="footer_col1">
                    <h3>T??l??charger notre application</h3>
                    <p>T??l??charger notre application maintenant sur Android et IOS</p>
                    <div class="app_logo">
                        <a href="https://play.google.com/store/search?q=footprint"><img class="playstr"
                                src="../images/playstore.png"></a>
                        <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr"
                                src="../images/appstore.png"></a>
                    </div>
                </div>
                <div class="footer_col2">
                    <img src="../images/diggit.png">
                    <p>Notre objectif est de rendre agr??able et accessible l'achat et le montage d'ordinateurs
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
    <script src="../scripts/Compo.js"></script>
</body>

</html>