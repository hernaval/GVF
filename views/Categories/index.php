<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='<?php echo WEBROOT?>views/css/style.css'>
    <script src='<?php  echo WEBROOT?>views/js/jquery-3.4.1.js'></script>
    <title>Document</title>
</head>
<body>
<?php

foreach ($etudiant as $etu) {
    ?>
    <h1><a href="<?php echo WEBROOT; ?>categories/view/<?php echo $etu['NomCategorie']; ?>"><?php echo $etu['NomCategorie'];?></a></h1>
<?php }
?>

<a href='<?php echo WEBROOT;?>etudiants/view2/' id='btn'>button test</a>
<button id='btnAjax'>Ajax</button>
 <div class="result">

 </div>
 <input id='search' type='text'>
 <div class="table">
     
 </div>
<script src='<?php  echo WEBROOT?>views/js/script.js'></script>
</body>
</html>


