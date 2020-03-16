<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><i>CREAR USUARIOS</i></title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    
<h4>
    <i>USUARIOS</i>
 </h4>
 <h2>
     <br>
  <a href="index.php"><i>LIS-USUARIOS</i></a>
  </h2>
   
</br>
    <div>
    <form action="guardar.php" method="post">
        <table class="table">
     <thead>
 <tr>
 <th><i>NOMBRE</i></th>
       <th><i>APELLIDOS</i></th>
          <th><i>EMAIL</i></th>
                  <th><i>PASSWORD</i></th>
   </tr>
  </thead>
  <tbody class="center">
 <tr>
   <td>
  <input type="text" name="nombre" size="19">
  </td>
  <td>
    <input type="text" name="apellido" size="19">
  </td>
   <td>
  <input type="text" name="email" size="24">
     </td>
     <td>
   <input type="text" name="password" size="24">
  </td>
 </tr>
     <tr>
                <td colspan="100"><br>
                <button type="submit">Guardar</button> 
                </td>
            </tr>
            </tbody>
      
    </form>
    </div>
</div>

</body>
</html>