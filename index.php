<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'conexion.php';
    $sql = "select * from productos";
    $resultado = mysql_query($sql);
    ?>
    <div class="tabla" id="tabla">
        <table class="productos">
            <thead class="text-center">
            <tr>
              <th>Producto</th>
              <th>Codigo</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Ubicación</th>
              <th>Descripción</th>
              <th>Catidad</th>
              <th>precio</th>
              <th>Vender</th>
              <th>Comprar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($filas=mysql_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['codigo'] ?></td>
                <td><?php echo $filas['producto'] ?></td>
                <td><?php echo $filas['marca'] ?></td>
                <td><?php echo $filas['modelo'] ?></td>
                <td><?php echo $filas['ubicacion'] ?></td>
                <td><?php echo $filas['descripcion'] ?></td>
                <td><?php echo $filas['cantidad'] ?></td>
                <td><?php echo $filas['precio'] ?></td>
                <td>
                    <div class="text-center">
                        <div>
                            <a href="imaYenl/enlaces/venderProducto.html"><img class="vende" src="imaYenl/img/sold.png"></a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="text-center">
                        <div>
                            <a href="imaYenl/enlaces/productoComprs.html"><img class="compra" src="imaYenl/img/buy.png"></a>                     </div>
                    </div>
                </td>
            <td>
                <div class="text-center">
                    <div>
                        10
                    </div>
                </div>
            </td>
        </tr>
            <?php } ?>
        </tbody>
            
              
          </table>
    
    </div>
</body>
</html>