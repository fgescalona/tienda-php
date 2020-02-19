<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Tienda PHP</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Logo</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito (0)</a>
            </li>
         </ul>
      </div>
   </nav>

   <div class="container">
      <br>
      <div class="alert alert-success">
         Pantalla de inicio...
         <a href="#" class="btn btn-success">Ver carrito</a>
      </div>

      <div class="row">

         <div class="col-3">
            <div class="card">
               <img class="card-img-top" src="https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/4842/9781484217290.jpg" alt="libro-php-7">
               <div class="card-body">
                  <span>Título del producto</span>
                  <h5 class="card-title">$60.000</h5>
                  <p class="card-text">Descripción</p>
                  <button class="btn btn-primary" name="comprar" value="Comprar"  type="submit">Comprar</button>
               </div>
            </div>
         </div>

      </div>
   </div>
</body>
</html>