
<div class="row">
    <?php foreach ($genre as $key => $value) {
    
    ?>

    <div class="col-sm-12 col-md-4 pb-2">
    <div class="card">
        <img src="../<?php echo $value['Image'] ?>" height="202px;" he alt="" class="card-img-top">
        
    <div class="card-body">
        <a href="details/<?php echo $value['IdFilm'] ?>" class="card-title"><?php echo $value['Titre']?>
         <span class="badge badge-warning"><?php echo $value['NomQualite'] ?></span>
         <span class="badge badge-success">Dispo</span>
         <span class="badge badge-danger"><del>Solde out</del> </span>
         </a>
        <div class="row">
           <h3 class="text-danger"><?php echo $value['PrixFilm'].",00 Ar" ?></h3>
           <a href="../../disponibilites/achat/<?php echo $value['IdFilm']; ?>/<?php echo $value['NomQualite'];?>" class="btn btn-outline-success font-weigth-bold ml-auto">Acheter</a>
        </div>
        
    </div>
</div>
   

    </div>
    <?php } ?> 
</div>
