
    

    <div class="container-fluid ">
    <?php 
        foreach ($dispo as $key => $value) { ?>

    <div class="col-lg-8  " style='background :red; margin-left :250px;margin-bottom : 20px;border-radius : 5px'>
        <div class="card card-common">
            <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-user fa-3x text-success" id="updateDone" aria-hidden="true"></i>
                    </div>
                    <div class="row">
                        <div class="text-left">
                        <h4 class="text-danger"> <?php echo $value['IdFilm']; ?> </h4>
                        <h5> Titre :  <?php echo $value['Titre']; ?> </h5>
                        <h6 class="text-primary"> Qualité :  <?php echo $value['NomQualite'] ?> </h6>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-3">
                            <img src="<?php echo $value['Image'] ?>" height = "100" width="150" alt="">
                        </div>
                    </div>
                    
             </div>
             <div class="card-footer text-black">
                 <a class="updateLink" id="<?php echo $value['IdFilm'].'/'.$value['NomQualite'] ?>" href="#">
                 <i  class="fas fa-sync mr-3 "></i>
                 <span >Update now</span> <span style="float: right"class="text-warning ">Pensez à la mise à jour de stockage de ce film tant demandé!!!</span>
                 </a>
             </div>
        </div>
    </div>
        
        <!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">MAJ FILM</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">  
                        <div class="text-warning">
                            Veuillez définir le nombres de  films à ajouter !
                        </div>
                            <div class="container-fluid">
                            <p class="font-weight-bold t">Titre :  <span class="text-muted" id="titre" ></span></p>
                                    <p class="font-weight-bold" >Qualite : <span class="text-muted" id="qualite"></span> </p>
                                <div style="border : 1px solid #eee; border-radius : 5px;" class="panel d-flex justify-content-between">
                                    
                                    <button class="btn btn-success " id="moinsBtn"><i class="fa fa-minus fa-3x text-default" aria-hidden="true"></i></button>
                                    <span style="font-size : 50px" id="value">0</span>
                                    <button class="btn btn-success  " id="plusBtn"><i class="fa fa-plus fa-3x text-default" aria-hidden="true"></i></button>

                                    
                                        <input type="text" hidden id="idFilmValue">
                                        <input type="text" hidden id="nomQualiteValue">
                                        <input type="int" hidden id="nbValue">
                                    
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="#"  id="updateBtn" class="btn btn-primary">Valider</a>
                        </div>
                    </div>
                </div>
 </div>

    <?php } ?>
