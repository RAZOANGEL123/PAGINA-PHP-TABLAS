<!DOCTYPE html>
<html>
 <head>
     <title>
         Formulario
     </title>
 </head>
<body>
<center>
 <h1>DATOS</h1>
 <form action="TABLA.php" method="post" id="form1">

  <p>
        <label for="NOMBRE">NOMBRE:</label>
        <input type="text" name="NOMBRE" id="NOMBRES">
  </p>   
  <p>
      <label for="EMAIL">EMAIL:</label>
      <input type="text" name="EMAIL" id="EMAIL">
  </p>
  <p>
      <label for="PASWORD">PASWORD:</label>
      <input type="text" name="PASWORD" id="PASWORD">
  </p>
  <p>
      <input type="submit" name="submit" id="enviar" value="Enviar">
      
  </p>        
 </form>
 <br><br>
 
 <h1>REGISTRATE AQUI</h1>
 <?php
  $C=mysqli_connect('localhost','root','');
  $BASE=mysqli_select_db($C,'prueba');
 ?>
 <table border=1>
     <tr>
         <td>NOMBRE</td>
         <td>EMAIL</td>
         <td>PASWORD</td>
         
     </tr>     
     <?php 
      $sql='SELECT * FROM tabla';
      $SENTENCIAS=mysqli_query($C,$sql);
      while($mostrar=mysqli_fetch_array($SENTENCIAS)){;
     ?>     
     <tr>
     <td><?php echo $mostrar['NOMBRE']; ?></td>
     <td><?php echo $mostrar['EMAIL']; ?></td>
     <td><?php echo $mostrar['PASWORD']; ?></td>
     </tr>
     </center>
    <?php  } ?>
 </table>
</body>
</html>