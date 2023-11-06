<?php
      
  
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <div class="main-contet">
                    <form class="form-search" method="get" action="busquedaPro.php">
                        <input type="search" name= "search" placeholder="buscar..">
                        <button type="submit">Enviar</button>
                        <i class="fa fa-search"></i>

                    </form>
            </div>
    <style>
        table{ width:50%;
        border: 1px dotted #0000FF;
        margin: auto;}
    </style>
        
           
            <?php
            require("conexionBD.php");
            $resultado = mysqli_query($conexion, "SELECT * FROM productos ");
            echo "<table> ";
                echo "<tr><th>ID_producto</th>";
                echo "<th>seccion</th>";
                echo "<th>producto</th>";
                echo "<th>origen</th>";
                echo "<th>importado</th>";
                echo "<th>precio</th></tr>";
            while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                
                
                echo "<tr>";
                echo "<td>".$fila['id_producto']."</td>";
                echo "<td>".$fila['seccion']."</td>";
                echo "<td>".$fila['producto']."</td>";
                echo "<td>".$fila['origen']."</td>";
                echo "<td>".$fila['importado']."</td>";
                echo "<td>".$fila['precio']."</td>";
                echo "</tr>";
                
                
            }
            echo "</table>";
?>
        
       
    
</body>
</html>