<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i-Jery Store</title>
    <link rel="stylesheet" href="<?php echo WEBROOT ?>assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBROOT ?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo WEBROOT ?>assets/css/user.css">
    <link rel="stylesheet" href="<?php echo WEBROOT ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEBROOT ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/agency.min.css">
    
   
    

</head>
<body>
    <!--header--> <!--caroussel-->
    <div class="owl-carousel">
        <header class="masthead item">
                <div class="container">
                    <div class="intro-text">
                        <div class="intro-lead-in"> Welcome to our Store! </div>
                        <div class="intro-heading text-uppercase">Glad to receive you</div>
                        <a href="#services" class="btn btn-primary btn-xl js-scroll-trigger">En savoir d'avantage</a>
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
    <!--header--> <!--caroussel-->
    


<section class="page-section m-5 p-3" style="background : #eee;">
    <div class="h3 text-primary px-2">
        <h2>CATEGORIES</h2>
    </div>
    <div class="row m-2">
        <div class="col-xs" style="padding:3px;">
            <a href="<?php echo WEBROOT ?>Films/categorie/action" id="action" class=" btn btn-light text-muted bg-light">Action</a>
        </div>
        <div class="col-xs" style="padding:3px;">
            <a href="<?php echo WEBROOT ?>Films/categorie/aventure" class=" btn btn-light text-muted bg-light">Aventure</a>
        </div>
        <div class="col-xs" style="padding:3px;">
                <a href="#" class="btn btn-light text-muted bg-light">Romantique</a>
        </div>
        <div class="col-xs" style="padding:3px;">
                <a href="#" class="btn btn-light text-muted bg-light">Science-fiction</a>
        </div>
        <div class="col-xs" style="padding:3px;">
                <a href="#" class="btn btn-light text-muted bg-light">Science-fiction</a>
        </div>
        <div class="col-xs" style="padding:3px;">
                <a href="#" class="btn btn-light text-muted bg-light">Science-fiction</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">       
                <div class="card">
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white">Top Films</h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="row ml-2">
                            <div class="col-xs-6 " style="padding:8px">
                                <img src="<?php echo WEBROOT ?>assets/img/1.jpg" alt="" width ="152px;" height="202px;">
                                <p class="text-center"><a  href="#">Acheter !</a></p>
                            </div>
                            
                            <div class="col-xs-6" style="padding:8px">
                                <img src="<?php echo WEBROOT ?>assets/img/2.jpg" alt="" width ="152px;" height="202px;">
                                <p class="text-center"><a  href="#">Acheter !</a></p>
                            </div>
                            <div class="col-xs-6" style="padding:8px">
                                <img src="<?php echo WEBROOT ?>assets/img/3.jpg" alt="" width ="152px;" height="202px;">
                                <p class="text-center"><a  href="#">Acheter !</a></p>
                            </div>
                            <div class="col-xs-6" style="padding:8px">
                                <img src="<?php echo WEBROOT ?>assets/img/2.jpg" alt="" width ="152px;" height="202px;">
                                <p class="text-center"><a  href="#">Acheter !</a></p>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <div class="col-sm-8  ">
                <div class="row">
                    <h3 class="section-heading "><i class="fa fa-film px-3" aria-hidden="true"></i>FILMS</h3>
                    
                </div>
               
                <?php echo $content_for_layout ?>
        </div>
        
    </div>
</section>

<script src="<?php echo  WEBROOT ?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?php echo  WEBROOT ?>assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo  WEBROOT ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo  WEBROOT ?>assets/js/owl.carousel.min.js"></script>
    <
    <script src="<?php echo  WEBROOT ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo  WEBROOT ?>assets/js/jquery.counter-up.min.js"></script>
    
    <script src="assets/js/agency.min.js"></script>
    
            <script>
                $(document).ready(function () {
                    $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay : true,
    smartSpeed : 500,
   
    items : 1
});
$('.count').counterUp({
    delay : 10,
    time : 1000
});


 });
               
            </script>
   

</body>
</html>