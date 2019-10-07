
    
    

    <!--a remettre dans un fichier propre js-->
   
        
        
  
       
        <div  class="container-fluid">
            <div  class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">IMPREVU</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
               </div>
               <div class="modal-body">
                    <form action="updateGestion" method="post">
                     <div>Date
                         <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" disabled > 
        
                     </div>
                    <h3>Ajouter des items  <input class="form-control" id='items' name='items' type='number' value='0' min='1' max='10' ></h3>
                    <div class="row">
                         <div  class="col-6" id="container"></div>
                    </div>
                    
                    
                    
                    <script src="<?php echo WEBROOT?>assets/js/imprevu.js"></script>
                    <div>
                    
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                   <button type="submit" class="btn btn-primary">MAJ</button>
               </div>
               </form>
           </div>
       </div>
                </div>
            </div>
        </div>
       
  
   

</html>