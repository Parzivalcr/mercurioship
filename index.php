<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
  background-image: url('OIP.jpg');
  background-size: cover;
  //background-position: center;
}

--Test code

h1 {
  color: black;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 30px;
}
</style>
    <title>Informacion de la Empresa</title>
</head>
<body>
    <h1>Mercurio Logistics</h1>
    
    <?php
    // Variable para rastrear la vista actual
    $vista = isset($_GET['vista']) ? $_GET['vista'] : '';

    // Comprueba la vista actual y muestra el contenido correspondiente
    if ($vista == 'mision') {
        mostrarMision();
    } elseif ($vista == 'vision') {
        mostrarVision();
    } elseif ($vista == 'productos') {
        mostrarProductos();
    } elseif ($vista == 'FAQ') {
        mostrarFAQ();
    } else {
        mostrarInicio();
    }
    ?>
    
    <br>
    <a href="?vista=inicio">Volver a la página de inicio</a>

    <?php
    // Función para mostrar la vista de la Misión
    function mostrarMision() {
        echo "<h2>Misión de la Empresa</h2>";
        echo "<p>       At Mercurio Shipping, our mission is to revolutionize the way goods are delivered by providing exceptional shipping services that exceed our customers' expectations.         </p>";
    }

    // Función para mostrar la vista de la Visión
    function mostrarVision() {
        echo "<h2>Visión de la Empresa</h2>";
        echo "<p>     Our vision at Mercurio Shipping is to be the leading global provider of shipping and logistics solutions, setting new industry standards through innovation, efficiency, and customer-centricity.          </p>";
    }

    // Función para mostrar Productos
    function mostrarProductos() {
        echo "<h2>Productos</h2>";
        echo "<p>     Parcel Delivery: We specialize in delivering parcels of various sizes, ranging from small packages to larger items. Whether it's documents, personal items, or merchandise, we ensure safe and reliable transportation to domestic and international destinations.          </p>";
        echo "<p>     Freight Shipping: Our freight services cater to businesses and individuals who need to ship larger or bulkier items. We have the capacity to handle palletized goods, heavy equipment, machinery, and other oversized cargo, providing efficient and cost-effective solutions.          </p>";
        echo "<p>     Express Delivery: For time-sensitive shipments, we offer express delivery services that prioritize fast transit times. This option is ideal for urgent documents, perishable goods, or any items that require expedited handling and delivery.         </p>";
        echo "<p>     E-commerce Fulfillment: We provide specialized services for e-commerce businesses, including order fulfillment, inventory management, and shipping integration. Our streamlined processes help online retailers meet customer expectations and deliver a seamless shopping experience.          </p>";
        echo "<p>     Warehousing and Storage: We offer secure warehousing and storage facilities for short-term or long-term needs. Whether it's storing inventory, managing stock overflow, or handling fulfillment for seasonal demand, our flexible solutions cater to diverse storage requirements.          </p>";
    }

    // Función para mostrar FAQ
    function mostrarFAQ() {
        echo "<h2>FAQ</h2>";
        echo "<p>     Q: What services does your shipping delivery company offer?</p>";
        echo "<p> A: Our shipping delivery company offers a wide range of services to meet the diverse needs of our customers. We provide domestic and international shipping solutions for parcels, packages, and freight. Our services include express delivery, next-day delivery, same-day delivery, and economy shipping options. We handle various types of shipments, including documents, small packages, oversized items, and bulk cargo.</p>";
    }

    // Función para mostrar la vista de Inicio (por defecto)
    function mostrarInicio() {
        echo "<h2>Welcome to the our tracking packaging website</h2>";
        echo "<p>Please visit below link to know more about us.</p>";
        echo "<a href='?vista=mision'>Mision</a> ","<br>","<br>";
        echo "<a href='?vista=vision'>Vision</a>","<br>","<br>";
        echo "<a href='?vista=productos'>Productos</a>","<br>","<br>";
        echo "<a href='?vista=FAQ'>FAQ</a>","<br>","<br>";
    }
    ?>


</body>
</html>
    
