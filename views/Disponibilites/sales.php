<?php
    function refGen($len, $set = "")
    {
        $gen = "";
        for($i = 0; $i < $len; $i++)
            {
                $set = str_shuffle($set);
                $gen.= $set[0]; 
            }
        return "FAC-".$gen;
    }
?>

    <h3>Confirmation d'achat</h3>

    <?php echo "confimez-vous l'achat de";
    foreach ($film as $key => $value) { ?>
       <p><?php echo $value['Titre']." ".$value['NomQualite']." pour ".$value['PrixFilm']; ?>
       <a href="<?php echo WEBROOT ?>Disponibilites/confirm/<?php echo $value['IdFilm'] ?>/<?php echo $value['PrixFilm'];?>/<?php echo refGen(6,"ABCDE023456789");?>">Ok</a></p>
   <?php }
    ?>
  
