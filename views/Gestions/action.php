<!--table view-->
            
<div class="container-fluid">
                 <div class="row mb-5">
                     <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                         <div class="row">
                             <div class="col-12">
                                <h3 class="text-muted text-center">ACTIONS</h3> 
                                
                                <table class="table bg-dark text-center text-white">
                                    <thead>
                                        <tr class="text-muted">
                                            <th>Date</th>
                                            <th>Revenue</th>
                                            <th>Motif</th>
                                            <th>Valeur</th>
                                            <th>Responsable</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($action as $key => $value) { ?>
                                            
                                        <tr>
                                            <th><?php echo $value['DateCompta'] ?></th>
                                            <td><?php echo $value['Type']?></td>
                                            <td><?php echo $value['Motif']?></td>
                                            <td><?php echo $value['Valeur']?></td>
                                            <td><?php echo $value['IdAdmin']?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>

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
                                 
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
     <!--fin table view-->