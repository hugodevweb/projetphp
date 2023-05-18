<div class="columns">
        <div class="column">
            <button id="btn_compo2" class="button is-link" data-target="#modalId2" data-toggle="modal">Ajouter une ram</button>

            <div class="modal" id="modalId2">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>modules</td>
                                        <td>capacite</td>
                                        <td>speed</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_ram ";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {

                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['modules'] . "</td> ";
                                        echo "<td>" . $donne['capacite'] . "</td> ";
                                        echo "<td>" . $donne['speed'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>
    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo3" class="button is-link" data-target="#modalId3" data-toggle="modal ">Ajouter une carte graphique</button>

            </div>


            <div class="modal" id="modalId3">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>ram</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_gpu";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {

                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['ram'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>

    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo4" class="button is-link" data-target="#modalId4" data-toggle="modal">Ajouter une alimentation</button>

            </div>


            <div class="modal" id="modalId4">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>ram</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_alim";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {

                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['wattage'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>

    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo5" class="button is-link" data-target="#modalId5" data-toggle="modal">Ajouter un stockage</button>

            </div>


            <div class="modal" id="modalId5">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>capacite</td>
                                        <td>Type de stockage</td>
                                        <td>Vitesse</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_stockage";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {

                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['capacite'] . "</td> ";
                                        echo "<td>" . $donne['type_comp'] . "</td> ";
                                        echo "<td>" . $donne['speed'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>


    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo6" class="button is-link" data-target="#modalId6" data-toggle="modal">Ajouter un carte mère</button>

            </div>


            <div class="modal" id="modalId6">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>Ram</td>
                                        <td>socket</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_board ";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {
                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['ram'] . "</td> ";
                                        echo "<td>" . $donne['socket'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>

    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo7" class="button is-link" data-target="#modalId7" data-toggle="modal">Ajouter un boitier</button>

            </div>


            <div class="modal" id="modalId7">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>Type</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_boitier";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {
                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['type'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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
    </div>


    <div class="columns">
        <div class="column">
            <div class="gpu">

                <button id="btn_compo8" class="button is-link" data-target="#modalId8" data-toggle="modal">Ajouter un ventilateur</button>

            </div>

            <div class="modal" id="modalId8">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>taille</td>
                                        <td>son</td>
                                        <td>speed</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                    $sql = "SELECT * FROM composants_cooler";
                                    $req = $bdd->prepare($sql);
                                    $req->execute();

                                    while ($donne = $req->fetch()) {
                                        echo "<tr>";
                                        echo "<td>" . $donne['name'] . "</td> ";
                                        echo "<td>" . $donne['price'] . "</td> ";
                                        echo "<td>" . $donne['brand'] . "</td> ";
                                        echo "<td>" . $donne['taille'] . "</td> ";
                                        echo "<td>" . $donne['son'] . "</td> ";
                                        echo "<td>" . $donne['speed'] . "</td> ";
                                        echo "<td>   <form method='post' action='CréationPc_action.php?id=" . $donne['id_comp'] . "'>
                        <div id='btn_inscription' class='field'>
                            <button style='all: unset;'type='submit'><a class='fancy' >
                            <span class='top-key'></span>
                            <span class='text'> Ajouter</span>
                            <span class='bottom-key-1'></span>
                            <span class='bottom-key-2'></span>
                          </a>   </button>
                               </div>
                            </form> </td>";
                                        $_POST['name'] = $donne['name'];
                                        $_POST['price'] = $donne['price'];
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