<?php
    function refGen($len, $set = "")
    {
        $gen = "";
        for($i = 0; $i < $len; $i++)
            {
                $set = str_shuffle($set);
                $gen.= $set[0]; 
            }
        return 'ID'.$gen;
    }
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
<div class="erro">


</div>
   <form action="checkLog" method="post">
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <div class="form-group">
        <label for="">Mot de Passe</label>
        <input type="password" class="form-control" name="password" id="" placeholder="">
      </div>

      <label class="custom-control custom-checkbox">Se souvernir de moi
        <input type="checkbox" name="" id="" value="checkedValue" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description"></span>
      </label>

      <div>
      <a href="http://" target="_blank" rel="noopener noreferrer">Mot de passe oublié</a>
      </div>
     

      <input type="submit" name='connecter' value="Connecter">
   </form>
    
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/register.js"></script>


    <style>
    
@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
	height:100vh;
	min-height:550px;
	background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../assets/img/jakob-owens-CiUR8zISX60-unsplash.jpg);
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
	position:relative;
    overflow-y: hidden;
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
	text-align:center;
    width:70%;
	right:0;left:0;
    margin:auto;
    height:400px;
    background-color: rgba(30,30,30, 0.9);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:500px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:0 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:3px;
    cursor:pointer;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

.register-show input[type="text"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#eaeaea;
}
    
    
    
    </style>
</head>
<body>
  	<div class="login-reg-panel">
		<div class="login-info-box">
			<h4>Etes-vous notre client?</h4>
			<p>Connectez et commencez</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Admin</h2>
			<p>Reserver au personnel d'administration </p>
			<label id="label-login" for="log-login-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>CLIENTS</h2>
				<!--<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="button" value="Login">
        <a href="">Forgot password?</a>-->
        
        <form action='../clients/login' method='post'>
            <div class="form-group">
                <input type="text" class="form-control" name='email' id="mail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                 <input type="password" class="form-control" name='motdepasse' id="motdepasse" placeholder="Password">
            </div>

            <div>
              
            <a href='#' class="text-primary" id='register'>Dont'have an account?Register</a>
            
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name='cookie' class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            
        </form>

			</div>
			<div class="register-show">
				<h2>ADMIN</h2>
				<!--<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
        <input type="button" value="Register">-->
        
        <form action="checkLog" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" id="" placeholder="Password">
      </div>

      <label class="custom-control custom-checkbox">Se souvernir de moi
        <input class="text-warning" type="checkbox" name="" id="" value="checkedValue" >
      </label>

      
      <input type="submit"class="btn btn-success" name='connecter' value="Connecter">
   </form>

			</div>
		</div>
	</div>
  <script>
    $(document).ready(function(){
      $('#register').click(function(){
    $('#mymodal').modal('show');
});
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');

    $('#log-login-show').click(()=>{
        console.log("sdf");
    });
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});



    
    
</script>

<!--modal register-->
<div id='mymodal' class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">REGISTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--debut du form-->
        <form method ='post' action ='createAccount'> 
            <div>
                <input type="text" hidden value="<?php echo refGen(8, "123456789") ?>" name='idCompte' id="">
            </div>

            <div class="form-group">
                <label for="tel">Telephone</label>
                <input type="text" class="form-control" id="tel"  placeholder="Entrer telephone">
                <small id="alert" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div id="info">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom"  placeholder="Entrez votre nom...">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom"  placeholder="Entrez votre prenom...">
                </div>
                <div class='row'>
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                    <a class='btn btn-info insertion' href="#">ajouter</a>
                </div>
                    
                </div>
            </div>

            <div class="form-group">
                <label for="mail">Email </label>
                <input type="email" class="form-control" id="mail" name='email' aria-describedby="emailHelp" placeholder="Enter email">
                <small id="alert2" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div id="compte">
                <div class="form-group">
                   <label for="pass1">Mot de Passe</label>
                   <input type="password" class="form-control" id="pass1" name='motdepasse' placeholder="Password">
                </div>

                <div class="form-group">
                   <label for="pass2">Confirmer Mot de Passe</label>
                  <input type="password" class="form-control" id="pass2"  placeholder="Password">
               </div>
               <small id="pass" class="form-text text-muted">We'll never share your email with anyone else.</small>


              <div class="form-group form-check">
                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
             </div>

            </div>
            
            <button type="submit" name='register' class="btn btn-primary">Submit</button>
            <div>
            <a href="sign">Have an account?Sign</a>
            </div>
            
        </form>
</body>
</html>
