<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='shortcut icon' type="image/jpg" href='<?php echo WEBROOT ?>assets/img/favicon.jpg'>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='<?php echo WEBROOT?>assets/css/animate.css'>
    <link rel='stylesheet' href='<?php echo WEBROOT?>assets/fontawesome/css/all.css'>
    <link rel='stylesheet' href='<?php echo WEBROOT ?>assets/css/dash.css'>
    <script src="<?php echo WEBROOT?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/Chart.min.js"></script>

    <script src="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/customChart.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/account.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/account.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/notif"></script>
    <script src="<?php echo WEBROOT?>assets/js/vente.js"></script>
    <script src="<?php echo WEBROOT?>assets/js/client.js"></script>
    
    <script src="<?php echo WEBROOT?>assets/js/search.js"></script>
    <title>DASHBOARD</title>
</head>
<body>

<script>
    
</script>
    <!--navbar-->
    <div class="navbar navbar-expand-md navbar-ligth">
            <button class="navbar-toggler ml-auto mb-2 bg-light " type='button' data-toggle='collapse' data-target='#myNavbar'>
                <span class="navbar-toggler-icon"></span>Menu
            </button>
            <div class="collapse navbar-collapse" id='myNavbar'>
                
                 <div class="container-fluid">
                    <div class="row">
                         <!--sidebar-->
                            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top ">
                                <a href="" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">i-jery </a>
                                <div class="border-bottom pb-3">
                                    <img src="../assets/img/naval.jpg" width="50" class='rounded-circle mr-3' alt="">
                                    <a href="#" class="text-white"><?php echo $_SESSION['username']; ?></a>
                                </div>
                                <ul class="navbar-nav flex-column mt-4">
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Admins/dash" id="a" class="nav-link collapsed text-white p-3 mb-2 "><i class="fas fa-home fa-2x  px-3"></i>Dashboard</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Films/liste" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-tv fa-2x  px-3 "></i>Films</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Gestions/maj" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-balance-scale fa-2x  px-3  "></i>Gestion</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Ventes/reg" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart fa-2x  px-3"></i>Ventes</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Gestions/actionView" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart fa-2x  px-3 "></i>Actions</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Comptabilites/compta" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table fa-2x  px-3 "></i>Recette</a></li>
                                    <li class="nav-item"><a href="<?php echo WEBROOT ?>Factures/liste" id="a" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench fa-2x  px-3"></i>Factures</a></li>

                                </ul>
                            </div>
                         <!--fin sidebar-->
                         <!--top nav-->
                            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <h4 class='text-light text-uppercase mb-0 '>Dashboard</h4>
                                    </div>
                                    <div class="col-md-5">
                                        <form action="">
                                            <div class="input-group">
               
                                                    <input type="text" name="" id="search"   class="form-control search-input hover  " placeholder='search'>    
                                            
                                                    <button id="pop"   class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                                                    
                                                    
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="navbar-nav">
                                            <li class="nav-item ">
                                                <a href="../Admins/notification" id='notifLink' class="nav-link"><i class="fas fa-bell text-muted fa-lg"></i>
                                                <span id="notifItems" ></span></a>
                                            </li>
                                            
                                            <li class="nav-item ml-md-auto">
                                                 <a href="#" data-toogle='modal' id='btnout'  data-target='#out'  class="nav-link"><i class="fas fa-sign-out-alt text-muted fa-lg"></i></a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         <!--fin topnav-->
                    </div>
                 </div>
                
            </div>
        </div>
    <!--fin navbar-->

    <!--modal sign out-->
        <div class="modal fade" id='out'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class='modal-title'>Deconnexion</h4>
                        <button class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div class="modal-body">
                        Choisissez logout pour partir
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal"class="btn btn-succes">Annuler</button>
                        <a href="../Admins/logout"  class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
   
    <script>$('#btnout').click( ()=>{
       $('#out').modal("show");
    })
        
    </script>
     <!--modal sign out-->

     

 <!--card-->
        <section>
            <div class=" animated bounce container-fluid">
                <div class="row">
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                        <div class="row pt-5 mt-3 mb-5">
                            <div class="col-xl-3 col-sm-6 p-2">
                                <a href="#" class="card card-common">
                                     <div class="card-body">
                                        <div class='d-flex justify-content-between'>
                                            <i class="fas fa-shopping-cart fa-3x text-warning "></i>
                                        </div>
                                        <div class="text-right text-secondary">
                                            <h5>Ventes Journalières</h5>
                                            <h3 id="depenseJ"></h3>
                                        </div>
                                     </div>
                                     <div class="card-footer text-secondary">
                                         <i class="fas fa-sync mr-3"></i>
                                         <span>Update now</span>
                                     </div>
                                            
                                </a>
                            </div>
                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                       <div class='d-flex justify-content-between'>
                                           <i class="fas fa-money-bill-alt fa-3x text-success "></i>
                                       </div>
                                       <div class="text-right text-secondary">
                                           <h5>Depenses</h5>
                                           <h3 id="depense">$135,000</h3>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Update now</span>
                                    </div>
                                           
                               </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                       <div class='d-flex justify-content-between'>
                                           <i class="fas fa-users fa-3x text-info "></i>
                                       </div>
                                       <div class="text-right text-secondary">
                                           <h5>Clients</h5>
                                           <h3 id="clients">125</h3>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Update now</span>
                                    </div>
                                           
                               </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body ">
                                       <div class='d-flex justify-content-between'>
                                           <i class="fas fa-chart-line fa-3x text-warning "></i>
                                       </div>
                                       <div class="text-right text-danger">
                                           <h5>Revenu Total</h5>
                                           <h3 id="revenu"></h3>
                                       </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Update now</span>
                                    </div>
                                           
                               </div>
                             </div>    
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <!--fin card-->

     <section>
        <?php echo $content_for_layout; ?>
    </section>
     
     <button class="btnTop"><i class="fas fa-arrow-up" ></i></button>
     <script>
         // a mettre dans un js propre
         $(window).scroll(()=>{
             if( (this).scrollTop() > 40){
                 $('.btnTop').fadeIn();
             }else $('.btnTop').fadeOut();
         })
         $('.btnTop').click(()=>{
            $('html, body').animate({
                scrollTop : 0
            },800);
         });


     </script>
    

    
   
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>
        <li> <a href="http://">Vente en ligne</a> </li>
        <li> <a href="<?php echo WEBROOT ?>Ventes/reg">Enregistrement Vente</a> </li>     
        <li> <a href="<?php echo WEBROOT ?>Films/liste">Listes films</a> </li>
        <li> <a href="http://">Liste des  clients</a> </li>
        <li><a href="<?php echo WEBROOT ?>Ventes/liste">Listes des ventes</a></li>
        <li><a href="<?php echo WEBROOT ?>Gestions/maj">Mettre a jour la gestion</a></li>
        <li><a href="<?php echo WEBROOT ?>Comptabilites/compta">GERER les compta</a></li>
        <li><a href="<?php echo WEBROOT ?>Gestions/actionView">Les actions</a></li>
        <li><a href="notification">Notifications & alertes</a></li>
        <li><a href="<?php echo WEBROOT?>Admins/logout">Se deconnecter</a></li>
        
    </ul>
</body>
</html>  