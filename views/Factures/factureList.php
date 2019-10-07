<div class="container">
                 <div class="row mb-5">
                     <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                         <div class="row">
                             <div class="col-12">
                                
                                <div class="card shadow">
                                    <div class="card-header shadowl">
                                       <h3 class="text-muted text-center">FACTURE</h3> 
                                    </div>
                                    <div class="card-body">
                                    <table class="table bg-light text-center table-md">
                                    <thead>
                                        <tr class="text-muted">
                                            <th>Référence</th>
                                            <th>Date facture</th>
                                            <th>Responsable</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($facture as $key => $value) { 
                                            
                                            
                                           ?>
                                            
                                        <tr>
                                            <td><?php echo $value['Ref'] ?></td>
                                            <td><?php echo $value['DateFacture'] ?></td>
                                            <td><?php echo $value['IdAdmin'] ?></td>
                                           
                                            <td style="text-align:center">
                                                <a href="#" id="<?php  echo $value['Ref']?>"data-toggle="modal" data-target="#modalEditFacture<?php echo $value['Ref'] ?>" ><i class="fas fa-edit fa-lg text-success"></i></a>
                                                <?php require "modalEditFacture.php" ?>
                                                <a href="factureViewer/<?php echo $value['Ref'] ?> "><i class="fas fa-eye fa-lg text-default"></i></a>
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