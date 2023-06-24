<?php
 require "servidor/server.php";
if(isset($_POST['registerboton'])){
    

$nombre=$_POST['registernombre'];
$email=$_POST['registeremail'];
$password=$_POST['registerpassword'];
$confirmpassword=$_POST['registerconfirm'] ;

if($password==$confirmpassword){
    $agregar="INSERT INTO `login`(`nombre`,`email`,`clave`,`confirmarclave`) VALUES('$nombre','$email','$password','$confirmpassword')";
    $queryInsectar=mysqli_query($conexion,$agregar);
    
}else{
    echo "your passsword have a error";
}




}


if(isset($_POST['btn'])){
    
    $loginemail=$_POST['loginemail'];
$loginpassword=$_POST['loginpassword'];

$condicionar="SELECT * FROM  `login` WHERE email='$loginemail'  AND clave='$loginpassword'";
$querycondicionar=mysqli_query($conexion,$condicionar);
$rodear=mysqli_num_rows($querycondicionar);
if($rodear){
    header("location:mensaje.php");
}
mysqli_free_result($querycondicionar);
mysqli_close($conexion);


}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" 
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <script src="js/jquery.js" ></script>
</head>
<body   class="" >

<style>
    body{
       
        font-family: Arial, Helvetica, sans-serif;
    }
     .cajaicon{
        display: flex;
        justify-content: center;
        position: relative;
        top: -70px;

     }
     .loginicon{
        width: 100px;
     }

</style>
    <div class="d-flex justify-content-center  align-items-center   vh-100 " >
         <div class="w-100 bg-light p-5 rounded-5 " >
            <div class="cajaicon" ><img  class="loginicon"  src="image/gmail4.png"  alt=""></div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12" >
                    <h1 class="text-center   fw-bold  "  id="formulario" >Login</h1>
                    <form action="" method="post" >
                        <div class="input-group my-1 ">
                            <div class="input-group-text" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                  </svg>
                            </div>
                            <div class="form-floating " > 
                            <input  class="form-control" type="email"   placeholder="Email" name="loginemail" >
                            <label for="email">Email</label>
                        </div>

                        </div>
                                <div class="input-group my-1" >
                            <div class="input-group-text" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                  </svg>
                            </div>
                        <div  class="form-floating" >
                        <input  class="form-control" type="password"   placeholder="Contraseña" name="loginpassword"    >
                   <label for="password">Contraseña</label>
                        </div>

                        </div>
                        <div class=" d-flex justify-content-center my-3" >
                            <input  class="btn btn-danger w-75" type="submit"   name="btn"  value="Entrar" >

                        </div>
                    </form>

                </div>
                <!-- Register -->

            <div class="col-lg-6 col-xs-12 col-sm-12  login-columna" >
                <h1 class="text-center fw-bold" > Registrar </h1>
            
        <form action=""   method="post" >
            <div  class="input-group my-1">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      </svg>
                </div>
                <div class="form-floating" >
                <input  class="form-control" type="text"  id="nombre"  placeholder="Nombre" name="registernombre">
                    <label for="nombre">Nombre</label>
                </div>

            </div>
            <div class="input-group">
                <div class="input-group">
                        <div class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                          </svg></div>
                          <div class='form-floating' >
                          <input class="form-control"  type="email" id="email" placeholder="Email"  name="registeremail">
              <label for="email" >Email</label>
                          </div>

                </div>


                </div>
                <div class="input-group  my-1">
                    <div class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                          </svg>
                    </div>
                    <div class="form-floating" >
                    <input  class="form-control" type="password" id="password" placeholder="Contraseña"  name="registerpassword" maxlength="8" >

                        <label for="password" >Contraseña</label>
                    </div>

                </div>
                <div class="input-group">
                        <div class="input-group-text" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                          </svg></div>
                          <div class="form-floating" >
                    <input class="form-control" type="password"  id="passwordconfirm" placeholder="Confirma tu contraseña"  name="registerconfirm"  maxlength="8">

                    <label for="passwordconfirm" >Confirma tu contraseña</label>
                          </div>


                </div>
               
                
                
                      <div class="d-flex justify-content-center  my-3 " >
                        <input  type="submit"  value="Crear"    id="botonregister" class="btn btn-danger w-75"  name="registerboton" > 

                      </div>

        </form>



        </div>


        <script>
            $(document).ready(function(){
               $("#botonregister").click(function(){
                let nombre=$('#nombre').val();
                let email=$('#email').val();
                let password=$('#password').val();
                let  confirmpassword=$('#confirmpassword').val();
                if(nombre == ""){
                    return false;

                }
                else{
                    if(email==""){
                        return false;

                    }
                    else{
                        if(password==""){
                            return false;

                        }else{
                            if(confirmpassword==""){
                                return false;


                            }else{
                                if(password==confirmpassword){
                                    swal.fire({
                                        title:'La password no es igual',
                                        confimrButtonText:'Arreglar la password'
                    

                                    })
                                

                                }else{
                                    return true;
                                }


                            }
                        }
                    }
                }
               })
            })
        </script>

   <!-- validacion con jquery -->
<!-- <script>

      
      $(document).ready(function(){ 

$('#btn').click(function(e){
    e.preventDefault()

    var email=$('#email').val();
    
    var password=$('#password').val();

    if(email==''){
    
        

    }else{
        if(password==''){
           

        }
        else{
            swal.fire({
                title:"Fue enviado correctamente ",
                confirmButtonText:'fue enviado correctamente'
            })
        }

    }

})


      })

</script> -->


    </div>
    <script src="js/alert.js"></script>
    <script src="js/bootstrap.js" ></script>
</body>
</html>

