 
  <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-6">
                    <div class="mymodal2" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content bg-dark" style='box-shadow:10px 20px 40px 0 rgba(0,0,0,0.7);'>
                                <div class="modal-header">
                                    <h5 class="modal-title text-white"><i class="far fa-file-edit"></i> BILLETAGE</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                    </button>
                                 </div>
                                <div class="modal-body">
        <!--debut form-->
        <form action='account' method='post'>
        <div class="row">
            
        </div>
            <div class="form-group">
                <label class="text-white" for="mail">20000</label>
                <input type="number" class="form-control text-center text-black font-weigth-bold 28px d  " min="0" value="0" name='vingt' id="20000">
            </div>

            <div class="form-group">
                <label class="text-white" for="mail">10000</label>
                <input type="number" class="form-control text-center text-black font-weigth-bold d " min="0" value="0" name='dix' id="10000" >
            </div>

            <div class="form-group">
                <label class="text-white" for="mail">5000</label>
                <input type="number" class="form-control text-center text-black font-weigth-bold d " value="0" min="0" name='cinq' id="5000" >
            </div>

            
            <div  id='recetteAlert'><p class=" text-center text-white">Recette</p>
                        <div class="text-center font-weigth-bold " style="color:white; font-size : 20px; border:1px solid transparent;width:100%; height:42px;border-radius:3.8px"  id='recette'></div>
            </div>

            <div id='depenseAlert'><p class="text-center text-white">Sortie</p>
                <input id='imprevuResult' style="background : yellow" class='form-control  text-center text-black font-weigth-bold '  type="float">
            <div>

            <div id='depenseAlert'><p class="text-center text-white">Sortie</p>
                <input id='depenseJo' class='form-control text-center text-black font-weigth-bold '  type="float">
            <div>
            
            </div>
        
        
                                 </div>
                                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="validerBtn"  type="submit" class="btn btn-primary">Valider</button>
                                </div>
        </form>
        <!--fin form-->
    </div>
  </div>
</div>
                </div>
            </div>
         </div>   
   
