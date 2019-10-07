<?php
    function refGen($len, $set = "")
    {
        $gen = "";
        for($i = 0; $i < $len; $i++)
            {
                $set = str_shuffle($set);
                $gen.= $set[0]; 
            }
        return 'FAC/'.$gen;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo WEBROOT?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?php echo WEBROOT ?>assets/js/pannier.js"></script>
    <title>FILM ET PRIX</title>
</head>
<body>
    <h1>
        Acheter un film
    </h1>

    

    <?php
    foreach ($filmEtPrix as $key => $value) {
      ?>
      <p><?php echo $value['Titre']." ".$value['NomQualite']." ".$value['PrixFilm']; ?>
      <a href="achat/<?php echo $value['IdFilm']; ?>/<?php echo $value['NomQualite'];?>">Acheter</a>
      <a href='#' id='<?php echo $value['IdFilm']?>-<?php echo $value['PrixFilm'] ?>' class='btnPannier'>Pannier</a></p>
    <?php }
    ?>

    <h4>Mon panier</h4>
    <div id='pannier'>
        
    </div>
</body>
</html>