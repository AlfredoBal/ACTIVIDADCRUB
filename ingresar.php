<style> 
body {
  background-image:url('https://i.redd.it/o8dlfk93azs31.jpg');
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: antialiased;
  font: normal 40px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', Arial, Helvetica, sans-serif!important;
}

.container {
    padding: 110px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ef43ef!important;
    opacity: 1; /* Firefox */
    font-size:18px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 20px;
    padding-bottom: 30px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 15px;
    border-color:#ef43ef;
    border-width: 5px;
    color:rgb(25, 234, 238);
    box-shadow:0 1px 0 #ef43ef;
}
.form-control{
    background:transparent!important;
    color:rgb(150, 39, 39)!important;
    font-size: 18px!important;
}
h1{
    color:rgb(100, 100, 50)!important;
}
h4 { 
 border:0 solid #ef43ef; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}
.form-control {
    border-radius: 10px;
}
.text-white{
    color: rgb(0,0,0,0.55)!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 20px;
}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords"
      content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
<meta name="author" content="leamug">
<title>ACTIVIDAD-7</title>
<link href="css/style.css" rel="stylesheet" id="style">
<!-- Bootstrap core Library -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<!-- Font Awesome-->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/c0ad48aecf.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <div class="container-fluid row">
    <form  class="col4 p-3" method="POST">
               <?php
        include "basedatos.php";
        include "personalreg.php";
       
        ?> 
<div class="col-8 p-4">
<table class="table">
    <thead class="bg-info">
     <tr>
     <h1 class="text-center p-3"> REGISTRO DE DATOS</h1>
     
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CEDULA</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">CORRERO</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "basedatos.php";
    $sql=$conexion->query(" select * from personas ");
    while($datos=$sql->fetch_object()){ ?>
     <tr>      
      <td><?=$datos->id?></td>
      <td><?=$datos->nombres ?></td>
      <td><?=$datos->apellidos ?></td>
      <td><?=$datos->cedula ?></td>
      <td><?=$datos->fec_naci ?></td>
      <td><?=$datos->correo ?></td>
      <td>
        <a href="" class=btn btn-small btn-warning><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class=btn btn-small btn-danger><i class="fa-solid fa-trash-arrow-up"></i></a>
        
      </td>
    </tr>
    <?php } 
    ?>
       
   
     </tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>