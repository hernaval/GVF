<!--table view-->
    <?php 
    function refGen($len, $set = "")
    {
        $gen = "";
        for($i = 0; $i < $len; $i++)
            {
                $set = str_shuffle($set);
                $gen.= $set[0]; 
            }
        return 'FI'.$gen;
    }
    ?>
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
                                        <h3 class='text-center text-muted font-weight-bold'>Films & Stocks</h3>
                                        <button type="button" class="btn  btn-primary btn-lg ml-auto" data-toggle="modal" data-target="#modelId">
                                            <i class="fa fa-circle fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <table class="table table-responsive-md bg-light text-center">
                                    <thead>
                                        <tr class="text-muted">
                                            <th>Image</th>
                                            <th>IdFilm</th>
                                            <th>Titre</th>
                                
                                            <th>Qualite</th>
                                            <th>Prix</th>
                                            <th>Nbrs</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($film as $key => $value) { 
                                            $id = $value['IdFilm'];
                                            $nom = $value['NomQualite'];?>
                                            
                                        <tr>
                                            <td><img src="<?php echo $value['Image']; ?>" width='70' class='rounded-circle' alt=""></td>
                                            <th><?php echo $value['IdFilm'] ?></th>
                                            <td><?php echo $value['Titre']?></td>
                                            <td><?php echo $value['NomQualite']?></td>
                                            <td><?php echo $value['PrixFilm']?></td>
                                            <td><?php echo $value['NbExemplaire']?></td>
                                            <td style="text-align:center">
                                                <a href="#" data-toggle="modal" data-target="#modalEdit<?php echo $value['IdFilm'] ?>"><i class="fas fa-edit fa-lg text-success"></i></a>
                                                <?php require "modalEdit.php" ?>
                                                <a href="#" data-toggle="modal" data-target="#modalsuppr<?php echo $id."".$nom; ?>"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                                <?php require "modalsuppr.php" ?>
                                                <!--<a href="#" ><i class="fas fa-eye fa-lg text-default"></i></a>-->
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

    
     <!-- Modal ajout -->
     <div class="modal"  id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
             <div class="modal-content " >
                 <div class="modal-header">
                     <h5 class="modal-title">Ajouter un Film</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>
                 <div class="modal-body" >
                    <form action="ajouter" method="post" enctype='multipart/form-data'>
                   
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="idFilm" value="<?php echo refGen(11,"ABCDE0123456987") ?>" class="form-control">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Titre</label>
                                    <input type="text" name="titre" class="form-control" id="exampleInputEmail1"  placeholder="Titre">
                                </div>
                                <div class="form-group">
                                  <label for="">Qualite</label>
                                  <select name="qualite" class="form-control" name="" id="">
                                    <option value="HD">HD</option>
                                    <option value="FHD">FHD</option>
                                    <option value="3GP">3GP</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre Exemplaire</label>
                                    <input type="number" name="nbExemplaire" class="form-control" id="exampleInputEmail1"  placeholder="Quantite">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Prix</label>
                                    <input type="float" name='prixFilm' id="prix" class="form-control"   placeholder="Prix en Ariary">
                                </div>

                               
                                <div class="form-group">
                                  <label for="">Jacket</label>
                                  <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
            
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Genre</label>
                                    <input  name="genre" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Genre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Realisateur</label>
                                    <input  name="realisateur" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Realisateur">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Maison de Production</label>
                                    <input name="maisonDeProd" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Maison">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Annee de Sortie</label>
                                    <input type="text" name="anneeDeSortie" class="form-control" id="exampleInputEmail1"  placeholder="Annee de sortie">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Duree</label>
                                    <input name="duree" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Duree">
                                </div>
                                <div class="form-group">
                                  <label for="">Synopsis</label>
                                  <textarea name="synopsis" class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                                
                            </div>
                        </div>
                    


                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Ajouter</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>

     <!--fin modal ajout-->

     

     