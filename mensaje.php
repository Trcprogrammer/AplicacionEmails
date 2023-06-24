

<?php

require "servidor/server.php";

if(isset($_POST['boton'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $emails=$_POST['emails'];
    $description=$_POST['description'];
    
    $insertar="INSERT INTO  `mensaje` (`nombre`,`email`,`emailz`,`description`) VALUES('$name','$email','$emails','$description')"; 

    $sql=mysqli_query($conexion,$insertar);

}



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/image/brand.png" />
  <title>TRC MSG</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/stylos.css" />
  <link   rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  
  <script src="js/jquery.js"></script>


</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg p-3">
    <a class="navbar-brand" href=""><img style="width: 100px" src="image/gmail4.png" alt="" /></a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#contenido_navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="contenido_navbar">
      <ul class="nav navbar-nav">
        <li class="nav-item fs-4">
          <a href="" class="nav-link fw-bold">Casa</a>
        </li>
        <li class="nav-item fs-4">
          <a href="" class="nav-link fw-bold ">Contacto</a>
        </li>
        <li class="nav-item fs-4">
          <a href="correos.php" class="nav-link fw-bold">Emails</a>
        </li>
        <li class="nav-item  fs-4  "><a  class="nav-link fw-bold " href="index.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <main class="my-3 ">
      <article>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-6">
            <h1  class="display-3 fw-bold text-center  animate__animated animate__bounce   ">
              Agend<span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chat-text-fill text-danger" viewBox="0 0 16 16">
                  <path
                    d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                </svg></span>
            </h1>

            <div class="caja">
              <form  id="formulario" action="" method="post">
                <div class="input-group my-2">
                  <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-person text-danger " viewBox="0 0 16 16">
                      <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                  </div>
                  <div class="form-floating" >
                  <input class="form-control" type="text" placeholder="Nombre" name="name" id="name" />
          <label for="name" >Nombre</label>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-envelope-at text-danger " viewBox="0 0 16 16">
                      <path
                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                      <path
                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                  </div>
                  <div class="form-floating" >
                  <input class="form-control" type="email" placeholder="Su Email" name="email" id="email" />
                    <label for="email" >Su Email</label>

                  </div>
                </div>

                <div class="input-group my-2">
                  <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-envelope-at text-danger " viewBox="0 0 16 16">
                      <path
                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                      <path
                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                  </div>
                  <div class="form-floating">
                  <input class="form-control" type="email" placeholder=" Para quien sera el Email" name="emails" id="emails" />

                    <label for="emails" >Para quien sera el Email</label>
                </div>
                </div>

                <div>
                  <textarea class="w-100 form-control "  name="description" placeholder="Descripcion" id="description" cols="30"
                    rows="6" name="description"></textarea>
                </div>

                <div class="boton d-flex justify-content-center">
                  <input class="btn btn-danger w-75 my-3" type="submit" value="Enviar" id="boton" name="boton" />
                </div>
              </form>
            </div>
          </div>


          <script>




            $(document).ready(function () {




              

              $('#boton').click(function () {
                var name = $('#name').val();
                var correo = $('#email').val();
                var segundoCorreo = $('#emails').val();
                var description = $('#description').val();

                if (name == '') {

                  Swal.fire({
                    title: 'Error',
                    text: 'Fill the form',
                    confirmButtonText: 'rehacer',
                    color:'dark'

                  })

                  return false;

                }

                else {

                  if (correo == '') {
                    swal.fire({
                      icon: 'Error',
                      title: 'Error',
                      text: 'Fill the form',
                      confirmButtonText: 'rehacer'

                    })

                    return false;
                  }
                  else {

                    if (segundoCorreo == '') {
                      swal.fire({
                        title: 'incorrecto',
                        text: 'Llena tu correo',
                        confirmButtonText: 'rehacer'

                      })


                    }
                    else {
                      if (description == '') {
                        swal.fire({
                          title: 'incorrecto',
                          text: 'Llena tu description',
                          confirmButtonText: 'rehacer'

                        })

                      }
                      else {
                        return true;
                      }


                    }
                  }






                }


              })

            })
          </script>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-center">
              <img class="rounded-5 w-75 h-25"
                src="https://img.freepik.com/vector-gratis/estampado-gente-joven-sonriendo-diseno-plano_52683-13320.jpg?w=740&t=st=1682909867~exp=1682910467~hmac=bb7a112fa42c0d78bd0cd851e2d00d72940edbcd26cfae30af413bfe58ec17d9"
                alt="" />
            </div>
          </div>
        </div>
      </article>

      <section class="my-5" >
      <div class=" w-100 ">
<div class="accordion " id="accordionExample" >
  <div class="accordion-item">
    <h1 class="accordion-header" >
      <button class="accordion-button" type="button" data-bs-toggle="collapse"  data-bs-target="#accordionuno"  aria-expanded="true" aria-controls="accordionuno"  >
      Quien es el creador de este proyecto?
      </button>
      <div  id="accordionuno" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
    <div class="accordion-body" >

<p class=" fs-5" >El creador de este proyecto es un joven de 16 años un estudiante del politecnico nuestra señora de la altagracia </p>
      </div>
    </h1>
  </div>
  <div class="accordion-item" >
    <h1 class="navbar-header" >
      <button class="accordion-button " data-bs-toggle="collapse" data-bs-target="#accordiondo" aria-expanded="false" aria-controls="accordiondo"  >
        Utilidad de este software
      </button>
      <div  id="accordiondo"  class="accordion-collapse collapse"  data-bs-parent="#accordionExample" >
        <div class="accordion-body" >
          <p class=" fs-5  " >La utilidad de este software es para hacer registros electronico y guardarlos adecuadamente cuidando la privacidad de los usuario a la hora de ingresar sus datos.</p>
        </div>
      </div>
    </h1>
  </div>
  <div class="accordion-item">
    <h1 class="accordion-header" >
      <button class="accordion-button" data-bs-toggle="collapse"  data-bs-target="#accordiontres"  aria-expanded="false"  aria-controls="accordiontres" >
        Como usar esta aplicacion
      </button>
    </h1>
    <div  id="accordiontres" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p class="" >Debes llenar el  formulario  con tus datos y los datos de la personas que deseas mandar los dato y deja el mensaje de deseas guardar para esa persona </p>

      </div>

    </div>
  </div>
</div>

      </div>
      </section>



      <section>
        <div class="d-flex justify-content-center" >
        <div class="row ">
          <h1 class=" fw-bold" >Futuros proyectos</h1>
          <div class="col-lg-4  col-sm-13 col-xs-12 my-2" >
            <div class="card" style="width:18rem;"  >
              <img  class="card-img-top" src="https://img.freepik.com/vector-gratis/gente-hablando-ilustracion-concepto_114360-6852.jpg" alt="">
              <div class="card-body" >
                <h5 class="card-title" >Futuros proyecto</h5>
                <p class="card-text" >Tendremos futuros proyectos como sistema de turnos y muchos crud dependiendo la necesidad del cliente.
                </p>
                <a hreft="#" class="btn btn-primary">Ver mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4  col-sm-13 col-xs-12  " >
            <div class="card" style="width:18rem;"  >
              <img  class="card-img-top" src="https://www.efficy.com/wp-content/uploads/2021/06/tecnicas-de-ventas-que-funcionan.jpg" alt="">
              <div class="card-body" >
                <h5 class="card-title" >Metodo de venta</h5>
                <p class="card-text" >Nuesto metodo de venta es sencillo y seguro, debes enviar numero de cedula,correo electronico al numero de la empresa 
                </p>
                <a hreft="#" class="btn btn-primary">Ver mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4  col-sm-13 col-xs-12 my-2" >
            <div class="card" style="width:18rem; "  >
              <img     class="card-img-top" src="https://img.freepik.com/vector-premium/personas-juntas-union-hombres-mujeres-diferentes-personajes-dibujos-animados-masculinos-femeninos_24640-66815.jpg" alt="">
              <div class="card-body" >
                <h5 class="card-title" >Como unirte a Racvy Code?</h5>
                <p class="card-text" >Para unirte a la empresa Racvy Code debes llamar al numero que esta en la parte inferior de la pagina y decirnos que nos puedes ofrecer como programor
                </p>
                <a hreft="#" class="btn btn-primary">Ver mas</a>
              </div>
            </div>
          </div>
          
        </div>

          </div>
      </section>
      
  </main>



  

 

  </div>
  <footer>
    <div class="p-3 w-100 bg-dark" >
      <ul>
      <li  class="text-light" style="list-style:none;" >Correo: <a class="" style="text-decoration: none;" href="">tiritord@gmail.com </a></li>
        <li class="text-light" style="list-style:none;" >Numero: <a class="" style="text-decoration: none;" href="">8094206951 </a></li>
      </ul>
    </div>
  </footer>

  <script src="js/bootstrap.js"></script>
  <script src="js/alert.js"></script>
</body>

</html>