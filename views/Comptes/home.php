<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home user</title>
</head>
<body>
    <?php  
        if(isset($_COOKIE['clientUser'])) echo "connecté en tant que ".$_COOKIE['clientUser'];
        else echo "connecté en tant que ".$_SESSION['telephoneClient'];
    ?>
    <div>
    <a href="<?php echo WEBROOT ?>Clients/sign">Deconnecter</a>
    </div>
<ul>
    <li><a href="<?php echo WEBROOT ?>Disponibilites/liste">Trouver un film</a></li>
    <li><a href="">Mon panier</a></li>
    <li><a href="">Parametre de Compte</a></li>
    

</ul>
   
</body>
</html>