<!DOCTYPE html>
<html> 
  <head> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <title>Ajouter un produit</title> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head> 
 <body>
    <div class="container"> 
          
    
        <form method="POST" action="/store_produit"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group"> 
              <div class="row"> <label class="col-md-4" align="right">Nom</label> 
              <div class="col-md-8"> <input type="text" name="nom" class="form-control" /> </div> 
             </div> 
            </div> 
            
            <div class="form-group"> 
              <div class="row"> <label class="col-md-4" align="right">Description</label> 
              <div class="col-md-8"> <input type="text" name="description" class="form-control"/> </div> 
             </div> 
            </div> 

            <div class="form-group"> 
              <div class="row"> <label class="col-md-4" align="right">Prix</label> 
              <div class="col-md-8"> <input type="text" name="prix_unitaire" class="form-control"/> </div> 
             </div> 
            </div> 

            <div class="form-group"> 
              <div class="row"> <label class="col-md-4" align="right">Categorie</label> 
              <div class="col-md-8"> <input type="text" name="categorie" class="form-control"/> </div> 
             </div> 
            </div> 
            
            <div class="form-group">
                <div class="row"> <label class="col-md-4" align="right">Photo</label> 
                   <div class="col-md-8"> <input type="file" name="photo"> </div>
             </div>
         </div>
         
          <div class="form-group" align="center"> <br/> <br/>
               <input type="submit" name="store_produit" class="btn btn-primary" value="Save"/> 
        </div>     
  </form> 
</div> 

</div> 

   
</div> 
</body>
 </html>
