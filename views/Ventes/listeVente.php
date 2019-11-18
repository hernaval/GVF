
    

     <div class="container">
     <div class="row mb-5">
         <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
             <div class="row">
                 <div class="col-12">
                    
                    <!--ajout film -->
                    
                    <!--ajout film -->
                    <div class="card shadow">
                        <div class="card-header shadow">
                        <div class="d-flex justify-content-start">
                            <h3 class='text-center text-muted font-weight-bold'>Les Ventes enregistrés</h3>
                            <button type="button" class="btn  btn-primary btn-lg ml-auto" data-toggle="modal" data-target="#modelId">
                                <i class="fa fa-circle fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                        <table class="table table-responsive-md bg-light text-center">
                        <thead>
                            <tr class="text-muted">
                                <th>Référence</th>
                                <th>id</th>
                                <th>Client</th>
                    
                                
                                <th>Prix</th>
                                <th>Nbrs</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vente as $key => $value) { 
                                $id = $value['IdFilm'];
                                ?>
                                
                            <tr>
                                <th><?php echo $value['Ref'] ?></th>
                                <td><?php echo $value['IdFilm']?></td>
                                <td><?php echo $value['TelephoneClient']?></td>
                                <td><?php echo $value['PrixAchat']?></td>
                                <td><?php echo $value['Quantite']?></td>
                                <td style="text-align:center">
                                    <a href=""><i class="fas fa-edit fa-lg text-success"></i></a>
                                    <a href="#" data-toggle ="modal" data-target="#reviewSuppr<?php echo $value['Ref'] ?>" ><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    <?php require "reviewSuppr.php" ?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                        </div>
                    </div>
                    
                    <!--pagination-->
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3"><span>&laquo;</span></a>
                                </li>
                                <li class="page-item active">
                                    <a href="" class="page-link py-2 px-3">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3"><span>&raquo;</span></a>
                                </li>
                            </ul>
                        </nav>
                    <!--fin pagination-->
                 </div>
                 <div class="col-12">
                    
                   
                <!--fin-->
             </div>
         </div>
     </div>
 </div>    
<!--fin table view-->
