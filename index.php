<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Expomec </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
   </head>
   
<body>

<?php
    
    include "conexion.php";
?>
 
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Club France</div>
          <div class="text-one">Av. Francia 75, Col. Florida</div>
          <div class="text-two">Álvaro Obregón, CDMX.</div>
        </div>
        <div class="phone details">
          <i class="fa-brands fa-whatsapp"></i>
          <div class="topic">WhatsApp</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fa-solid fa-users"></i>
          <div class="topic">Usuarios del Club France</div>
          <div class="text-one">Sí eres Usuario del Club France</div>
          <div class="text-two">realiza tu pago en el Restaurant</div>
          <div class="text-two"> Sept Cinq para hacer valido tu descuento.</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Registro Visitantes Expomec</div>
        <p>Realiza tu registro para Expomec 2022 y haz tu pago en línea por $350.00 ó el día del evento $400.00</p>

       

      <form action="" method="POST">
      <?php 
            include "registro.php";
         ?>
        <div class="input-box">
        
          <input id="nombre_completo" name="nombre" type="text" placeholder="Nombre completo" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,10}[ ]{1}[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,10}" required>
        </div>
        <div class="input-box">
          <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
        </div>
        <div class="input-box">
          <input type="number" id="celular" name="celular" pattern="^[2|3|4|5|6|7|8|9]\d{9}$" placeholder="Ingresa tu celular" required>
        </div>
        <div class="input-field">
        <select type="text" id="edad" name="edad" required>
          
              <option disabled selected>Rango de edad</option>
              <option>18 a 25 años</option>
              <option>26 a 40 años</option>
              <option>41 años o más</option>
          </select>
      </div>
      <br/>
         <div class="col-md-12">
      <div class="form-group">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="aviso" name="aviso" value="Sí" required >
              <label class="custom-control-label" for="aviso">He Leido y Acepto el <a href="https://clubfrance.org.mx/aviso_privacidad/Aviso_de_Privacidad.pdf" target="_blank" class="text-danger">Aviso de Privacidad</a></label>
              <div class="valid-feedback" >Campo Ok!</div>
              <div class="invalid-feedback" >Debes aceptar los terminos</div>
          </div>
          
      </div>
  </div>
  <div class="col-md-12">
    <span style="font-size: 10px;">
    Los datos personales recopilados serán protegidos, almacenados y procesados con fines estadísticos, promocionales y de mejora. La información obtenida es confidencial y es propiedad de Club France, invitamos a consultar nuestro <a href="https://clubfrance.org.mx/aviso_privacidad/Aviso_de_Privacidad.pdf" target="_blank">Aviso de privacidad</a>.                                            </span>
</div>
<br>
        <center><button type="submit">Registrar</button></center>  
       
    </div>
    </div>
  </div>


</body>
</html>
