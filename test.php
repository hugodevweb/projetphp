<?php              
                
             echo'   
             
         
                
                     <div id="container">
                     
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
                                 <tbody>';
         
                                 $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                 $sql = "SELECT * FROM composants_cpu";
                                 $req2 = $bdd->prepare($sql);
                                 $req2->execute();

                                 while ($donne = $req2->fetch()) {
                                     echo "<tr>";
                                     echo "<td>" . $donne['name'] . "</td> ";
                                     echo "<td>" . $donne['price'] . "</td> ";
                                     echo "<td>" . $donne['brand'] . "</td> ";
                                     echo "<td>" . $donne['puissance'] . "</td> ";
                                     echo "<td>   <form method='post' action='CréationPc_action.php?id_cpu=" . $donne['name'] . "'>
                     <div id='btn_inscription' class='field'>
                         <button style='all: unset;'type='submit'><a class='fancy'>
                         <span class='top-key'></span>
                         <span class='text'> Modifié</span>
                         <span class='bottom-key-1'></span>
                         <span class='bottom-key-2'></span>
                       </a>   </button>
                            </div>
                         </form> </td>
                         </tbody>";
                        } 
            ?>