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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel='stylesheet' href="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='<?php echo WEBROOT?>assets/fontawesome/css/all.css'>
    <link rel='stylesheet' href='<?php echo WEBROOT?>assets/css/style2.css'>
    <script src="<?php echo WEBROOT?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="<?php echo WEBROOT?>assets/js/register.js"></script>

    
    <title>REGISTER</title>
</head>
<body>
    <a href='#' id='register'>Register/</a> <a id='login' href="#"> Sign</a>
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
        <!--fin du form-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--modal register-->

<!--modal login-->
<div class="mymodal2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SIGN IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--debut form-->
        <form action='login' method='post'>
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name='email' id="mail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="motdepasse">Password</label>
                 <input type="password" class="form-control" name='motdepasse' id="motdepasse" placeholder="Password">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name='cookie' class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <div>
            
            </div>
        </form>
         <!--fin form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--modal login-->
<script>

$('#register').click(function(){
    $('#mymodal').modal('show');
});


</script>

   
</body>
</html>