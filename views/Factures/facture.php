<?php
	
     foreach ($facture as $key => $value) {
         
        $GLOBALS['ref'] =$value['Ref'];
        $GLOBALS['clients'] = $value['NomClient']." ".$value['PrenomClient'];
        $GLOBALS['date'] = $value['DateAchat'];
       } 
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="<?php echo WEBROOT?>assets/fontawesome/css/all.css">
    <link rel='stylesheet' href="<?php echo WEBROOT?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php  echo WEBROOT?>assets/css/facture.css">
    <script src="<?php echo WEBROOT?>assets/js/jquery-3.4.1.js" ></script>
    <script src="<?php echo WEBROOT?>assets/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>FACTURE</title>
	
</head>
<body>
    <div style="position : fixed; top :25px; right :200px; " >
    <form action="exportFacture" id="makePdf" method="post">
        <input type="hidden" value ="<?php echo $GLOBALS['ref'] ;?>"name="refFacture">
        <input type="hidden" id="html_content" name="facture_content">
        <i id="createPdf" class="animated bounce fa fa-download fa-2x" aria-hidden="true"></i>
    </form>
    </div>
    <script>
        $("#createPdf").click(()=>{
            $('#html_content').val($('#factureView').html());
            $('#makePdf').submit();
        });
    </script>
    
    <div class="modal-dialog modal-lg" id="factureView" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
				<h1><i class="fas fa-file-alt">FACTURE </i></h1>
                    <div class="row ">
                        <div class="col-md-7">
                            <img class="img  h-50 img-rounded-circle" src="<?php echo WEBROOT ?>assets/img/logo.png">
                            <p class="text-muted mx-5">I-jery Store</p>
                            <div class="text-wrapper font-weight-bold mx-5 ">
                                <div class="text-inner">
                                    <div class="lead-description">
                                        <p>Ref : <?php echo $GLOBALS['ref']; ?> </p>
                                        <p>Nom et Prénoms : <?php echo $GLOBALS['clients'];?> </p>
										<p>Date : <?php echo $GLOBALS['date']; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 my-3">
                            <div class="text-wrapper">
                                <div class="text-inner">
                                    <div class="lead-description">
                                        <p>  Téléphone : 032 88 789 65 <i class="fa fa-phone"></i></p>
                                        <p>Email : hernavalasco@gmail.com <i class="fa fa-envelope"></i></p>
                                        <p>Adresse : Andrainjato Fianarantsoa <i class="fas fa-map-marker-alt"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 


					<h4 class="text-muted ml-5">Designation</h4>
					<div class=" table table-responsive">
						<table class="table">
						  <thead>
							<tr>
								<th >Idfilm</th>
								<th>Prix unitaire en Ariary</th>
								<th>Quantites </th>
								<th>Montants en Ariary</th>
							</tr>
							</thead>
							<tbody>
                                <?php 
                                $total =0;
                                $montant = 0;
                                    foreach ($facture as $key => $value) {
                                        $total+=$value['PrixAchat']*$value['Quantite'];
	                                	$montant = $value['PrixAchat']*$value['Quantite'];
                                        ?>
                                        
                                 
								<tr>
									<td  scope="row"><?php echo  $value['IdFilm']; ?></td>
									<td ><?php echo $value['PrixAchat'].",00"; ?></td>
									<td ><?php echo $value['Quantite']; ?></td>
									<td ><?php echo $montant.",00"; ?></td>
								</tr>

                               <?php  } ?>
							</tbody>
						  </thead>

						</table>

						
					</div>
					



                </div>

                
            </div>
            <div class="modal-footer">
				<div class="container-fluid">
               
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-sm-4 mr-3"></div>
						<div class="col-sm-3">
						<div class="text-wrapper font-weight-bold">
						<p>Total = <?php echo $total.",00 Ar"; ?> </p>
						
						</div>
						
						
						</div>
					</div>
                    <div class="text-default">
                  Arrêtée la présente facture  à la somme en lettre de :..................................................
                   </div>

                   <div class="row ">
                       <div class="col-md-6">CLIENT</div>
                       <div class="col-md-6">RESPONSABLE</div>
                   </div>
                   
				</div>
               
            </div>
        </div>
    </div>
</div>

<!--- idina-->


	</body>



</html>