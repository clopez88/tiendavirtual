<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa Deportiva</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        /* Estilos globales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Estilos del encabezado */
        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        /* Estilos de las secciones */
        section {
            padding: 40px;
            background-color: #fff;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007BFF;
            font-size: 1.5em;
        }

        #formulario {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 60%;
            margin: 0 auto;
            margin-bottom: 30px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Estilos de imágenes */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Estilos del pie de página */
        footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        #nuestra-tienda {
            text-align: center;
        }

        .section-productos {
            display: flex;
            justify-content: center;;
        }

        .servicio_titulo {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tienda de Ropa Deportiva</h1>
        <nav>
            <ul>
                <li><a href="#nuestra-tienda">Nuestra Tienda Online</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contáctenos</a></li>
                <li><a href="#solicitud">Solicitud de Servicio</a></li>
            </ul>
        </nav>
    </header>

    <section id="nuestra-tienda">
        <h2>Nuestra Tienda Online</h2>
        <p>Bienvenido a nuestra tienda de ropa deportiva. Aquí encontrarás una amplia selección de productos de alta
            calidad para tus necesidades deportivas.</p>
        <img src="https://jnretail.com/wp-content/uploads/slider/cache/93dd0119b38f5c1bcb645a5b38020212/gondola-con-maniqui-para-tienda-de-deportes.webp"
            alt="Imagen de la tienda">
    </section>

    <section id="servicios">
        <h2>Servicios</h2>
        <h3>Venta de Productos</h3>
        <p>Tenemos una amplia gama de productos deportivos disponibles para su compra, desde ropa, equipos deportivos y
            accesorios.<b></b></p>

        <div class="section-productos">
            <div class="servicio">
                <h4 class="servicio_titulo">Camiseta Deportiva</h4>
                <img src="https://i1.wp.com/latiendabarrista.com/wp-content/uploads/2023/03/PhotoRoom-20230310_180442.png?fit=600%2C600&ssl=1"
                    alt="Camiseta atletico nacional">
                <p><strong>Precio: </strong> $99.999</p>
                <button onclick="agregarAlCarrito('Camiseta Deportiva')">Agregar al Carrito</button>
            </div>
    
            <div class="servicio">
                <h4 class="servicio_titulo">Pantalón Deportivo</h4>
                <img src="https://i2.wp.com/latiendabarrista.com/wp-content/uploads/2023/04/PhotoRoom-20230424_130609_1.png?fit=600%2C600&ssl=1"
                    alt="Jogger para hombre">
                    <p><strong>Precio: </strong> $129.999</p>
                <button onclick="agregarAlCarrito('Pantalón Deportivo')">Agregar al Carrito</button>
            </div>

            <div class="servicio">
                <h4 class="servicio_titulo">Zapatilla Running</h4>
                <img src="https://allbirdsuk.myshopify.com/cdn/shop/products/AB006OM_SHOE_ANGLE_GLOBAL_MENS_WOOL_RUNNER_MIZZLE2_DARK_GREY_NATURAL_WHITE_640d30cf-8e16-4947-9747-54b24683105f_600x600.png?v=1663694382"
                    alt="Zapatillas running">
                    <p><strong>Precio: </strong> $499.999</p>
                <button onclick="agregarAlCarrito('Zapatilla Running')">Agregar al Carrito</button>
            </div>

            <div class="servicio">
                <h4 class="servicio_titulo">Gorra</h4>
                <img src="https://th.bing.com/th/id/R.9e09595eea649466f6333472d6a953d1?rik=YZz3F%2bo2S85yKg&pid=ImgRaw&r=0"
                    alt="Gorra para hombre">
                    <p><strong>Precio: </strong> $70.000</p>
                <button onclick="agregarAlCarrito('Gorra')">Agregar al Carrito</button>
            </div>

            <div class="servicio">
                <h4 class="servicio_titulo">Balon de Fútbol Nike</h4>
                <img src="https://acdn.mitiendanube.com/stores/001/960/337/products/sc3365-455_01-jpg1-766ac5871db19d084a16825718433374-1024-1024.png"
                    alt="Balon de futbol">
                    <p><strong>Precio: </strong> $229.999</p>
                <button onclick="agregarAlCarrito('Pantalón Deportivo')">Agregar al Carrito</button>
            </div>

            <div class="servicio">
                <h4 class="servicio_titulo">Botines Adidas</h4>
                <img src="https://sportotalar.vtexassets.com/arquivos/ids/447057-600-600?v=638266766904470000&width=600&height=600&aspect=true"
                    alt="Botines adidas">
                    <p><strong>Precio: </strong> $300.000</p>
                <button onclick="agregarAlCarrito('Pantalón Deportivo')">Agregar al Carrito</button>
            </div>

            <div class="servicio">
                <h4 class="servicio_titulo">Espinilleras Adidas Predator</h4>
                <img src="https://soccerwearhouse.com/cdn/shop/products/77c64fc49c6032be9083eef0d70f1628.png?v=1646255717"
                    alt="Espinilleras Adidas">
                    <p><strong>Precio: </strong> $79.900</p>
                <button onclick="agregarAlCarrito('Pantalón Deportivo')">Agregar al Carrito</button>
            </div>
        </div>

        <div class="servicio">
            <br>
            <h3>Personalización de Productos</h3>
            <p>Ofrecemos la posibilidad de personalizar tus productos deportivos con tu nombre, número y más. ¡Hazlos
                únicos!</p>
            <img src="https://publicidadcreativa.com.co/camisetas-estampadas/personalizacion-camisetas-estampado-screen.webp" alt="Imagen de personalización">
        </div>
        <div class="servicio">
            <br>
            <h3>Cotizaciones</h3>
            <div id="cotizacion-form">
                <p>Ofrecemos cotizaciones personalizadas para equipos deportivos y compras al por mayor. Si deseas
                    realizar una cotización dejanos tus datos y un asesor se comunicará contigo lo más pronto posible.
                </p>
                <form>
                    <label for="correoCot">Correo Electrónico:</label>
                    <input type="email" id="correoCot" name="correoCot" required>
                    <br>
                    <br>
                    <label for="celularCot">Número de Celular:</label>
                    <input type="tel" id="celularCot" name="celularCot" required>
                    <br>
                    <br>
                    <button type="submit">Enviar Cotización</button>
                </form>
            </div>
    </section>

    <section id="contacto">
        <h2>Contáctenos</h2>
        <p>Puedes comunicarte con nosotros de las siguientes maneras:</p>
        <ul>
            <li>WhatsApp: +57 3000000000</li>
            <li>PBX: (604) 456-7890</li>
            <li>Celular: +57 3000000000</li>
            <li>Dirección: Cra. 52 #48-45 local 1936</li>
        </ul>
        
        <div id="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1132314447173!2d-75.570191!3d6.2488072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428ff65476be1%3A0xff0a56b10c28c3cf!2sCentro%20Comercial%20Palacio%20Nacional!5e0!3m2!1ses-419!2sus!4v1696876821226!5m2!1ses-419!2sco"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="solicitud">
        <h2>Solicitud de Servicio</h2>
        <p>Aquí podrás realizar tus solicitudes de servicio de forma fácil y rápida.</p>
    
        <form action="insert.php" name="formulario"  method="post">

            <label for="nombresyapellidos">Nombres y Apellidos:</label>
            <input type="text" name="nombres" required><br><br>

            <label for="email">Correo electrónico:</label>
            <input type="email" name="correo" required><br><br>

            <label for="celular">Número de celular:</label>
            <input type="text"  name='telefono' required><br><br>
    
            <label for="servicios">Servicio que solicita:</label>
            <select name="servicio">
                <option value="Personalización">Personalización</option>
                <option value="Pedido Mayorista">Pedido Mayorista</option>
                <option value="Devolución">Devolución</option>
            </select><br><br>

            <button type="submit" name="enviar">Enviar</button>
            <button type="button" name="cancelar" onclick="limpiarFormulario()">Cancelar</button>
        </form>
    </section>

    <script>
    function limpiarFormulario() {
        // Limpiar los campos del formulario
        document.getElementsByName('nombres')[0].value = '';
        document.getElementsByName('correo')[0].value = '';
        document.getElementsByName('telefono')[0].value = '';
        document.getElementsByName('servicio')[0].value = 'Personalización';
    }
    </script>

    <footer>
        <p>Derechos de autor © 2023 Tienda de Ropa Deportiva</p>
    </footer> 
</body> 
</html>