<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="imaYenl/img/favicon.ico" sizes="16x16">
    <title>ACME</title>
    <link rel="stylesheet" href="inicio.css">
    
</head>
<body>
    <div id="header">
        <ul class="nav">
            <a class="navbar-logo">
                <img id="logo" src="imaYenl/img/login.png">
            </a>
            <a href="inicio.html" class="texto-logo">ACME</a>
            <li><a  class="user">
                <img id="usuario" src="imaYenl/img/user.png">
                </a>
                <ul>
                    <li><a href="micro.html">Salir</a></li>
                </ul>
            </li>
           
            <li><a href="">Registros Clientes</a>
                        <ul><a href="imaYenl/enlaces/regVentas.html">Ventas</a></ul>
                        <ul><a href="imaYenl/enlaces/RegCotVentas.html">Cotizacion Ventas</a></ul>
                        <ul><a href="imaYenl/enlaces/infoVentas.html">informacion Clientes</a></ul>
            </li>
            <li><a href="">Registros Proveedores</a>       
                        <ul><a href="imaYenl/enlaces/regCompras.html">Compras</a></ul>
                        <ul><a href="imaYenl/enlaces/RegCotProveedores.html">Cotizacion Compras</a></ul>
                        <ul><a href="imaYenl/enlaces/infoProv.html">informacion Proveedores</a></ul>
            </li>
        </ul>
    </div> 
    
    <div class="tabla">
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
            <tr>
                <td></td>
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
                        <a href="imaYenl/enlaces/eliminar.html"><img class="eliminar" src="imaYenl/img/eliminar.png"></a>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
            
              
          </table>
          <br>
          <a class="boton-NP" href="">Nuevo producto</a>
    
    </div>
    <div class="footer">
        <div class="taco">
            <h2>Mas informacion de la compañia</h2>
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
            </p>
        </div>
        <div class="taco">
            <br>
            <img id="icTaco" src="imaYenl/img/footer.png"/>
        </div>
  
        <div class="taco">
            <br>
            <h2>Ayuda</h2>
            <br>
            <ul>
                <li><a href="micro.html">Enlace 1</a></li>
                <li><a href="imaYenl/enlaces/productoComprs.html">Enlace 2</a></li>
                <li><a href="">Enlace 3</a></li>
            </ul>
        </div>
    </div>

      

</body>
</html>