
<?php

function refGen($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return 'FAC-'.$gen;
		}

?>


<div class="container">
    <div class="row">
        <div class="col-sm-7 ">
           
            <!-- Modal -->
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div style="background : #ffee44;" class="modal-header">
                            <h5 class="modal-title"><i class="fas fa-shopping-basket    "></i> Enregistrements</h5>
                               
                        </div>
                        <div class="modal-body">
                           
                        <form action="checkVente" method="post">
    <div><h4 align="center"> Date & Facture</h4>
    <div class="row">
        
    </div>
        <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" disabled > 
        <input class="form-control" type="text" name='ref' value='<?php echo refGen(6,"ABCDE023456789")?>' ><!--strln = 10 via js-->
    </div>
<h4 align="center">Clients</h4>
<hr>
    <div>Telephone
        <input class="form-control" id="tel" type="text" name='telephoneClient'>
    </div>
    
    <h4 align="center" >Ajouter des items  <input class="form-control" id='items' name='items' type='number' value='0' min='1' max='10' ></h4>
    
    <div id='container'>
        
    </div>
   <div id="response">
   </div>
    <!--a remettre dans un fichier propre js-->
    <script src="<?php echo WEBROOT?>assets/js/vente.js">
       
    </script>

    


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button class='btn btn-outline-success' id="submitBtn"  type="submit" >Enregistrer <i class="fa fa-shopping-bag" aria-hidden="true"></i></button>

     </form>
                     </div>
                    </div>
                </div>
        </div>
        
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-user-plus" aria-hidden="true"></i> Ajout Clients</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div id="info">
                <p class="text-warning">Veuillez remplir les informations correspondantes
                à ce numero de téléphone, il sera ensuite ajouter à la base clientelle! Cette
                tache est primordiale avant l'enregistrement de la vente.
                Cependant, les informations(noms,prenoms) sont facultatives</p>
                <div class="form-group">
                    <label for="nom">Telephone</label>
                    <input type="text" class="form-control"  id="telModal">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom"  placeholder="Saisir  le nom...">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom"  placeholder="Saisir le prenom...">
                </div>
                <div class='row'>
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                </div>
                    
                </div>
            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <a type="button" href="#" class="btn btn-outline-primary insertion">Ajouter</a>
            </div>
        </div>
    </div>
</div>

