<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-Jery Store</title>
    <link rel="stylesheet" href="assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    
    


    <!--<link rel="stylesheet" href="assets/css/agency.css">-->
    <link rel="stylesheet" href="assets/css/agency.min.css">
    <style>
        .card-img-top{
            height: 200px;
            object-fit: cover;
        }
        .card{
            width: 90%;
            height: 300px;
        }
        .card{
            box-shadow: 3px 5px 15px 5px rgba(0, 0, 0, 0.4)
        }
        
        .our-team-main
{
	width:100%;
	height:auto;
	border-bottom:5px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.our-team-main img
{
	border-radius:50%;
	margin-bottom:20px;
	width: 90px;
}

.our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

.our-team-main p
{
	margin-bottom:0;
}

.team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	
}

.team-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
}

.fa-jedi{
   animation: spin 4s linear infinite;
}
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

    </style>

</head>
<body id="page-top">


    <!--navigation-->
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
            <div class="container">
                    <i class="fas fa-jedi fa-2x text-danger    "></i>
                   <a class="navbar-brand js-scroll-trigger" href="#page-top">i-jery Store</a>
                   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                   </button>
    
                   <div class="collapse navbar-collapse" id="navbarResponsive">
                       <ul class="navbar-nav ml-auto text-uppercase">
                       <li class="nav-item">
                              <a href="#page-top" class="nav-link js-scroll-trigger">Home</a>
                          </li>
                          <li class="nav-item">
                              <a href="#services" class="nav-link js-scroll-trigger">Services</a>
                          </li>
                          <li class="nav-item">
                              <a href="#store" class="nav-link js-scroll-trigger">STORE</a>
                          </li>
    
    
                          <li class="nav-item">
                                <a href="#team" class="nav-link js-scroll-trigger">TEAM & ABOUT</a>
                          </li>
                         
                          <li class="nav-item">
                                <a href="#divers" class="nav-link js-scroll-trigger">DIVERS</a>
                          </li>
                          
                          <li class="nav-item">
                                <a href="Admins/loginPage" class=" nav-link btn btn-sm btn-warning">LOGIN</a>
                          </li>
                          
                       </ul>
                   </div>
            </div>
            
    </nav>
    
        <!--fin navigation-->
    
    
    <!--header--> <!--caroussel-->
    <div class="owl-carousel">
            <header class="masthead item animated ">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in animated slideInUp"> Welcome to our Store! </div>
                            <div class="intro-heading text-uppercase animated slideInDown">Glad to receive you</div>
                            
                        </div>
                    </div>
            </header>

            <header class="masthead m2 item">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in"> Welcome to our Store! </div>
                            <div class="intro-heading text-uppercase">Glad to receive you</div>
                            <a href="#services" class="btn btn-primary btn-xl js-scroll-trigger">En savoir d'avantage</a>
                        </div>
                    </div>
            </header>

            <header class="masthead m3 item">
                    <div class="container">
                        <div class="intro-text">
                            <div class="intro-lead-in"> Welcome to our Store! </div>
                            <div class="intro-heading text-uppercase">Glad to receive you</div>
                            <a href="#services" class="btn btn-primary btn-xl js-scroll-trigger">En savoir d'avantage</a>
                        </div>
                    </div>
            </header>
    </div>
           
    <!--fin header-->

    <!--counter -->

    
         
        <div class="container  counter_content">
            <div class="row text-center">
                <div class="col-lg-12 text-center">
                   <h2 class="section-heading py-2">i-jery Store en quelques chiffres</h2>
                </div>
            </div>
           <div class="row text-center">
               <div class="col-sm-3 pt-3 ">
                   <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                   <div><span  class=" countClient count value"></span><i class="fa fa-plus" aria-hidden="true"></i></div> 
                   <p>Clients</p>
               </div>
               <div class="col-sm-3 pt-3">
                   <i class="fas fa-tv fa-3x"></i>
                   <div><span  class=" countFilm count value"></span><i class="fa fa-plus" aria-hidden="true"></i></div> 
                    <p>Films à la disposition </p>
                </div>
                <div class="col-sm-3 pt-3">
                        <i class="fa fa-universal-access fa-3x" aria-hidden="true"></i>
                        <div><span class="count value">5</span><i class="fa fa-plus" aria-hidden="true"></i></div> 
                        <p>Années de service</p>
                </div>
                <div class="col-sm-3 pt-3">
                        <i class="fa fa-balance-scale fa-3x" aria-hidden="true"></i>
                        <div><span class=" count value">25</span><i class="fa fa-plus" aria-hidden="true"></i></div> 
                        <p>Ventes réalisées</p>
                        
                </div>
           </div>
        </div>

    <!-- fin counter -->

    <!--services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Services</h2>
                        <h3 class="section-subheading text-muted">Profitez de la meilleure prestation du marché</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-award fa-stack-1x fa-inverse"></i>     
                        </span>
                        <h4 class="service-heading">ORIGINAL & AUTHENTIQUE</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectur adipisicing elit.</p>
                    </div>
                    <div class="col-md-4 mt-5">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="far fa-handshake fa-stack-1x fa-inverse"></i>     
                        </span>
                        <h4 class="service-heading">SERVIABLE</h4>
                        <p class="text-muted">Personnel acceuillant et à la service de la clientèle</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-motorcycle fa-stack-1x fa-inverse"></i>     
                        </span>
                        <h4 class="service-heading">RAPIDE</h4>
                        <p class="text-muted">Livraison dans les 2h qui suivent et gratuits</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>     
                        </span>
                         <h4 class="service-heading">GARANTIE</h4>
                        <p class="text-muted">La clientèlle dispose de 3 jours pour signaler et remettre un film </p>
                     </div>
                     <div class="col-sm-4"></div>
                     <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                             <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-recycle fa-stack-1x fa-inverse"></i>     
                        </span>
                        <h4 class="service-heading">RECYCLABLE</h4>
                        <p class="text-muted">Produit recyclable</p>
                    </div>

                </div>
            </div>
        </section>
    <!--services-->

    <!--store-->
        <section class="page-section" id="store">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Store</h2>
                        <h3 class="section-subheading text-muted">Aperçu des nouveaux films ajoutés</h3>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-8">
                        <h2 class='font-weight-bold '>Les films recemments ajoutés</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="card  text-left">
                          <img class="card-img-top" src="assets/img/01-thumbnail.jpg" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Titre</h4>
                            <div class="d-flex justify-content-between">
                               <h4 class="text-danger">$120</h4>
                               <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                               <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 portfolio-item">
                        
                            <div class="card  text-left">
                              <img class='card-img-top'  src="assets/img/spider.jpg" alt="">
                              <div class="card-body">
                                <h4 class="card-title">Titre</h4>
                                <div class="d-flex justify-content-between">
                                   <h4 class="text-danger">$300</h4>
                                   <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                                   <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                                </div>
                              </div>
                            </div>
                    </div>

                    <div class="col-md-4 col-sm-6 portfolio-item">
                            <div class="card   text-left">
                              <img class="card-img-top"  src="assets/img/cine.jpg" alt="">
                              <div class="card-body">
                                <h4 class="card-title">Titre</h4>
                                <div class="d-flex justify-content-between">
                                   <h4 class="text-danger">$120</h4>
                                   <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                                   <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>


                <div class="row my-3">
                        <div class="col-lg-8">
                            <h2 class='font-weight-bold '>Les films les plus demandés </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <div class="card  text-left">
                              <img class="card-img-top" src="assets/img/01-thumbnail.jpg" alt="">
                              <div class="card-body">
                                <h4 class="card-title">Titre</h4>
                                <div class="d-flex justify-content-between">
                                   <h4 class="text-danger">$120</h4>
                                   <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                                   <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                                </div>
                              </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            
                                <div class="card  text-left">
                                  <img class='card-img-top'  src="assets/img/spider.jpg" alt="">
                                  <div class="card-body">
                                    <h4 class="card-title">Titre</h4>
                                    <div class="d-flex justify-content-between">
                                       <h4 class="text-danger">$300</h4>
                                       <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                                       <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                                    </div>
                                  </div>
                                </div>
                        </div>
    
                        <div class="col-md-4 col-sm-6 portfolio-item">
                                <div class="card   text-left">
                                  <img class="card-img-top"  src="assets/img/cine.jpg" alt="">
                                  <div class="card-body">
                                    <h4 class="card-title">Titre</h4>
                                    <div class="d-flex justify-content-between">
                                       <h4 class="text-danger">$120</h4>
                                       <a href="#" class="btn btn-outline-warning"><i class="fas fa-pound-sign"></i>acheter</a>
                                       <a href="#" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Panier</a>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>

                
            </div>
        </section>
     <!--fin store-->

     
     <!--team-->
            <section class="bg-light page-section" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">TEAM</h2>
                            <h3 class="section-subheading text-muted">Découvrez la team i-jery Store et sa formidable équipe</h3>

                        </div>
                    </div>
                        <div class="row">
                            <div class="col-sm-4 animated lightSpeedIn">
                
                                <div class="team-member ">
                                    <img src="assets/img/1.jpg" alt="" class="mx-auto rounded-circle">
                                    
                                    <h4>Jennya Lauren</h4>
                                    <p class="text-muted">Acceuil</p>
                                    <span class="font-italic text-wrap">"Toujours prète à servir la clientelle
                                        avec son sourire accablante. Jennya est une véritable addicte à la ciné.
                                        Elle vous aidera surment beaucoup avec des suggestions".
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4 animated lightSpeedIn">
                                <div class="team-member">
                                    <img src="assets/img/2.jpg" alt="" class="mx-auto rounded-circle">
                                    <h4>Yvon Jackot</h4>
                                    <p class="text-muted">Caissier</p>
                                    <span class="font-italic text-wrap">"Toujours prète à servir la clientelle
                                            avec son sourire accablante. Jennya est une véritable addicte à la ciné.
                                            Elle vous aidera surment beaucoup avec des suggestions".
                                    </span>
                                </div>
                            </div>
                                <div class="col-sm-4">
                                    <div class="team-member animated lightSpeedIn">
                                        <img src="assets/img/3.jpg" alt="" class="mx-auto rounded-circle">
                                        <h4>Marta Cassy</h4>
                                        <p class="text-muted">Vendeuse</p>
                                        <span class="font-italic text-wrap">"Toujours prète à servir la clientelle
                                                avec son sourire accablante. Jennya est une véritable addicte à la ciné.
                                                Elle vous aidera surment beaucoup avec des suggestions".
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
     <!--fin team-->

     <!--divers-->
        <section class="page-section" id="divers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">DIVERS</h2>
                        <h3 class="section-subheading text-muted">Mettez vous à l'aise</h3>
                    </div>
                </div>

              
                <!--offre-->
     <div class="container">
            <div class="row">
            
           
                <div class="col-lg-4">
                    <div class="our-team-main">
            
                        <div class="team-front">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x bg-info"></i>
                                <i class="fas fa-wifi fa-stack-1x fa-inverse"></i>     
                            </span>
                            <h3>WIFI ZONE</h3>
                            <p>Gratuit</p>
                        </div>
            
                        <div class="team-back">
                            <span>
                                
                           </span>
                        </div>
            
                    </div>
                </div> 


                <div class="col-lg-4">
                    <div class="our-team-main">
            
                        <div class="team-front">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x bg-info"></i>
                                <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>     
                            </span>
                            <h3>SNACKS</h3>
                            <p>sur place</p>
                        </div>
            
                        <div class="team-back">
                            <span>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque penatibus et magnis dis parturient montes,
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque.
                           </span>
                        </div>
            
                    </div>
                </div> 

                <div class="col-lg-4">
                    <div class="our-team-main">
            
                        <div class="team-front">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x bg-info"></i>
                                <i class="fas fa-tv fa-stack-1x fa-inverse"></i>     
                            </span>
                            <h3>HOME CINE</h3>
                            <p>Gratuit</p>
                        </div>
            
                        <div class="team-back">
                            <span>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque penatibus et magnis dis parturient montes,
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
            natoque.
                           </span>
                        </div>
            
                    </div>
                </div> 

                

             </div>

            </div>

        </div>
 </section>
     <!--fin divers-->
    
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/count.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counter-up.min.js"></script>

    

    
    <script src="assets/js/agency.min.js"></script>
    
            <script>
                $(document).ready(function () {
                    $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay : true,
    smartSpeed : 500,
    
   
    items : 1
});

 

 });
               
            </script>
   
</body>
</html>