
<!-- Modal -->

<div class="modal fade" id="modalEdit<?php echo $value['IdFilm']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $value['Titre'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <div class="text-warning">
                           Modifier le prix
             </div>


    <form action="../Disponibilites/modifFilm" method="post">
        <div class="form-group">
              <label for="">IDFILM</label>
              <input type="float" value="<?php echo $value['IdFilm'] ?>" name="idfilm" id="" class="form-control text-center" placeholder="" aria-describedby="helpId">
              
        </div>  

        <div class="form-group">
              <label for="">Prix</label>
              <input type="float" value="<?php echo $value['PrixFilm'] ?>" name="prixChange"  id="" class="form-control text-center" placeholder="" aria-describedby="helpId">
         
        </div>  

        <div class="form-group">
              <label for="">Quantite</label>
              <input type="number" min="0"  name="qtAjout" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
        </div>  


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
        </div>
    </div>
</div>