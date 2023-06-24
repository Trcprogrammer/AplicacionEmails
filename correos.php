<?php
include "servidor/server.php";


$datos='SELECT * FROM  mensaje ';
$conectar=mysqli_query($conexion,$datos);
$array=mysqli_fetch_array($conectar);

?>


<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Correos</title>
    </head>
    <body>
  <nav class="navbar navbar-expand-lg  p-3" >
  <a class="" href="Mensaje.php" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>  
  
  <button class="navbar-toggler" ><span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav" >
        <li class="nav-item" ><a class="nav-item" ></a> </li>
      </ul>
        
    </div>
  </nav>

 <main>
  <div class="container ">
    <h1   class="fw-bold  text-center" >Emails</h1>
 
    <table class="table  table-striped ">

    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Para</th>
        <th>Descripcion</th>

      </tr>
    </thead>
    <tbody>
    <?php 
        foreach($conectar as $contenido ){

        ?>
      <tr scope="row"> 
       
        <td scope="col "><?php echo $contenido['nombre'] ; ?></td>
        <td scope="col" ><?php echo $contenido['email'] ;?></td>
        <td scope="col" ><?php echo $contenido['emailz'] ; ?></td>
        <td scope="col" ><?php echo $contenido['description']  ?></td>
      


      </tr>
      <?php 
        }

      ?>
    </tbody>
  </table>

    </div>


      
 </main>

  

<script src="js/bootstrap.js" ></script>
    </body>
    </html>
