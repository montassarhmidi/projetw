<?php  
include "core/publiciteC.php";
  $sql="SELECT * from catalogue where id='".$_GET['id']."'";
    $db = config::getConnexion();
        $liste=$db->query($sql);

$PublicC=new publiciteC();
$listepublicite=$PublicC->afficherpublicites();
$PublicC=new publiciteC();
$listepublicite=$PublicC->recupererpublicite($_GET['id']);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

    <title>Jelizi Technologies Services</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
  <body>
    <!-- HEADER -->
    <header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> +216-79459000</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> jelizi.technologie.services@gnet.tn</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> Avenue Farhat Hached Rades</a></li>
          </ul>
                    <ul class="header-links pull-right">
                        <li><a href="#"><i class="fa fa-dollar"></i> TND</a></li>
                        <li><a href="login/login.html"><i class="fa fa-user-o"></i> Espace Client</a></li>
                        <li><a id="sign-up"href="#" type="button" data-toggle="modal"
data-target="#myModal"><span class="glyphicon glyphicon-user"></span>
espace admin</a></li>
                        <li><a href="fidelite.html"><i class="fa fa-user-o"></i> Fidelité</a></li>
                    </ul>
        </div>
      </div>
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./img/logo.png" alt="">
                </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <div class="header-search">
                <form>
                  <select class="input-select">
                    <option value="0">Categories</option>
                    <option value="1">Produits</option>
                    <option value="1">Services</option>
                  </select>
                  <input class="input" placeholder="Rechercher">
                  <button class="search-btn">Rechercher</button>
                </form>
              </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Favoris</span>
                    <div class="qty">2</div>
                  </a>
                </div>
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Panier</span>
                    <div class="qty">3</div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product01.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>

                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product02.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                    <div class="cart-summary">
                      <small>3 Item(s) selected</small>
                      <h5>SUBTOTAL: $2940.00</h5>
                    </div>
                    <div class="cart-btns">
                      <a href="#">Voir Panier</a>
                      <a href="checkout.html">Commander  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->
          <ul class="main-nav nav navbar-nav">
            <li><a href="publicité.php">Acceuil</a></li>

            
            <li><a href="services.html">Services</a></li>
            <li><a href="reclamation.html">Reclamation</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

  









<!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">

          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">publicite</h3>
            
            </div>
          </div>
          <!-- /section title -->

<?PHP
   $liste=$PublicC->afficherpublicites();

  

?>



          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">



                <!-- tab -->
                <div id="tab2" class="tab-pane fade in active">
                  <div class="products-slick" data-nav="#slick-nav-2">

<?php foreach($listepublicite as $row){
  $pourcentage=round(((($row['prix_sans_remise']-$row['prix_avec_remise'])*100)/($row['prix_sans_remise'])));

    $row['vues']+=1;
  $listepublicite=$PublicC->vuesnumber($row['vues'],$row['id']);
   ?>
                    
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="image/<?PHP echo $row['fichier']; ?>" alt="">
                        <div class="product-label">
                          
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category"><?PHP echo $row['type']; ?></p>
                        <h3 class="product-name"><u><?PHP echo $row['nom']; ?></u></h3>
                        <center><table><tr>
                          
                          <td><h4 class="product-price"  ><strike style="color: red; "><?PHP echo $row['prix_sans_remise'].' TND'; ?></strike></h4></td>
                          <td><pre style="background: none;border: none;">       </pre></td>
                          <td><h4 class="product-price" style="color: red; "><?PHP echo $row['prix_avec_remise'].' TND'; ?></h4></td>
                        </tr></table></center>
                          <h4 class="product-price" style="color: red; font-size: 50px; "><?PHP echo '-'.$pourcentage.'%'; ?></h4>
                      </div>
                         
                      </div>
                    
                      <li>
                       
                                        <p class="fa fa-eye  " > <?PHP echo $row['vues']; ?> vues
                                            <i class="lnr lnr-eye"></i>
                                        </p>
                                    </li>  
                      
                    </div>
                    <!-- /product -->
<?php } ?>

                    
                  </div>
                  <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">



          <h3 > PLEASE LOGIN TO ENTER </h3>
          <hr>
          <p style="display:inline-block; "> new user?</p>
          <a  style="display:inline-block" type="button"
data-toggle="modal" data-target="#myModal2"> sign-up</a>
          <hr>
          <button type="button" class="btn btn-md btn-fb" style=
"background-color:#3F729B ;color:white"><i class="fab fa-facebook-f
pr-1"></i> Facebook</button>
         <i><strong>or</strong></i>
          <button type="button" class="btn btn-gplus" style=
"background-color:#dd4b39 ;color:white"><i class="fab
fa-google-plus-g"> Gmail</i></button>

          <hr>
          <h5> or login with <strong> Jelizi.Technologie.Services </strong>account </h5>
          <div>
            <div class="md-form input-group mb-3">
              <div class="input-group-prepend">
              </div>
              <input type="text" id="username" class="form-control"
placeholder="Username" aria-label="Username"
aria-describedby="material-addon1">
              <input type="password" id="mdp"class="form-control"
placeholder="mot de passe " aria-describedby="material-addon1">

            </div>

  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"
data-dismiss="modal">Close</button>
                  <input type="button" value="login" onclick="admin()">
                  <button type="=button" onclick="admin()">open</button>

        </div>

      </div>
    </div>
  </div>
  </div>
</form>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>









    <!-- SECTION -->
    <!-- SECTION -->
  

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Veuillez entrer votre <strong>Email</strong></p>
              <form>
                <input class="input" type="email" placeholder="Entrez votre mail">
                <button class="newsletter-btn"><i class="fa fa-envelope"></i> S'abonner </button>
              </form>
              <ul class="newsletter-follow">
                <li>
                  <a href="https://www.facebook.com/Jelizi.technologie.services/"><i class="fa fa-facebook"></i></a>
                </li>
                
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">A propos de nous</h3>
                <p>Installation et maintenance réseaux informatique, téléphonie,video surveillance, système d'alarme Vente et réparation matériaux informatiques et bureautiques.</p>
                <ul class="footer-links">
                  <li><a href="#"><i class="fa fa-map-marker"></i>Avenue Farhat Hached Rades</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i> +216-79459000</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i>jelizi.technologie.services@gnet.tn</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                  <li><a href="#">Accessoires Informatiques</a></li>
                  <li><a href="#">Accessoires de sécurité</a></li>
                  <li><a href="#">Services</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Informations</h3>
                <ul class="footer-links">
                  <li><a href="#">A propos de nous</a></li>
                  <li><a href="#">Contact</a></li>
                  
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Client</h3>
                <ul class="footer-links">
                  <li><a href="#">Mon compte</a></li>
                  <li><a href="#">Mon panier</a></li>
                  <li><a href="#">Favoris</a></li>
                  <li><a href="#">Suivre ma commande</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

      <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-payments">
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
              </ul>
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by<a href="https://colorlib.com"> Untouchable</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
            <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>


      <script > function admin(){
    var nom = document.getElementById("username").value;

    var prenom = document.getElementById("mdp").value;
    if( nom == "admin" && prenom == "admin" ){
    alert("admin")
    location.href="back/pub.php";
    }
 
  }</script>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>