<!-- Button trigger modal -->
<?php 
    foreach ($facture as $key => $value) {
        $GLOBALS['ref'] = $value['Ref'];
    }
?>
<script>
    $(document).ready(function () {
        $('#modal419').modal("show");
    });
</script>
<!-- Modal -->
<div class="modal fade" id="modal419"  tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
                <div class="modal-header">
                        <h5 class="modal-title">Modifier la facture n° <?php echo $GLOBALS['ref'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="text-warning">
                        En cas de changement d'avis d'un client(ou autres), l'admininistrateur pourra 
                        modifier les achats ou effectivement l'annulation totale!!!
                    </div>
                    
                    <table class="table table-responsive-md">
                        <thead>
                            <tr class="text-muted">
                                <th>Id</th>
                                <th>Prix</th>
                                <th>Quantite</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($facture as $key => $value) { ?>
                                
                                <tr>
                                    <td><?php echo $value['IdFilm'] ?></td>
                                    <td><?php echo $value['PrixAchat'] ?></td>
                                    <td><?php echo $value['Quantite'] ?></td>
                                    <td><a  href="../../Ventes/annulation/<?php echo $value['Ref'];?>/<?php echo $value['IdFilm'] ?>/<?php echo $value['PrixAchat'] ?>/<?php echo $value['NomQualite'] ?>/<?php echo $value['Quantite'] ?>" class="badge badge-danger">annuler</a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <a href="../liste" type="button" class="btn btn-secondary" >ok</a>
                <a ><i class="fas fa-trash-alt fa-4x text-danger " aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>

