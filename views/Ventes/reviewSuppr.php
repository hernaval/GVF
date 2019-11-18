          
                                                 <!-- Modal -->
         <div class="modal fade" id="reviewSuppr<?php echo $value['Ref'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
             <div class="modal-dialog modal-md" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">Suppression</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                     </div>
                     <div class="modal-body">
                         Confirmez-vous la suppression de cette vente?
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                         <a href="annulation/<?php echo $value['Ref'];?>/<?php echo $value['IdFilm'] ?>/<?php echo $value['PrixAchat'] ?>/<?php echo $value['NomQualite'] ?>/<?php echo $value['Quantite'] ?>" type="button" class="btn btn-danger">Supprimer</a>
                     </div>
                 </div>
             </div>
         </div>                                   
      <!--modal suppr-->