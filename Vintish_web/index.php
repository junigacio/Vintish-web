<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con ->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql ->execute();
$resultado = $sql ->fetchAll(PDO::FETCH_ASSOC);





?>







<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="icon" href="img/vintish.jpg.png">
        
        <title>Vintish</title>
    </head>
    <body>
        <header class="main-header">
            <div class="container container--flex">
              <div class="main-header__container">
                <h1 class="main-header__title">Vintish</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                  <ul class="menu">
                    <li class="menu__item"><a href="" class="menu__link">INCIO</a></li>
                    <li class="menu__item"><a href="" class="menu__link">SOBRE NOSOTROS</a></li>
                    <li class="menu__item"><a href="" class="menu__link">NOVEDADES</a></li>
                    <li class="menu__item"><a href="" class="menu__link">TIENDA</a></li>
                    <li class="menu__item"><a href="" class="menu__link">CONTACTOS</a></li>
                  </ul>
                </nav>
              </div>
              <div class="main-header__container">
                <span class="main-header__txt">Neesitas ayuda?</span>
                <a href="mailto:Vintish@vintish-soporte.com.ar"><p class="main-header__txt"><i class="fa-regular fa-envelope"></i> Contactanos!</p></a>
              </div>
              <div class="main-header__container">
                <a href="register.html" class="main-header__link"><i class="fas fa-user"></i></a>
                <a href="" class="main-header__btn">Mis compras <i class="fas fa-shopping-cart"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
              </div>
            </div>
          </header>
          <div class="container-slider">
            <div class="slider" id="slider">
              <div class="slider__section">
                <img src="img/clothes-on-bags.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">De todo el mundo hasta tu casa</h2>
                  <p class="slider__txt">10%OFF primera compra en el exterior</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="img/item-a1.webp" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Antigúedades y accesorios</h2>
                  <p class="slider__txt">30%OFF compras en el interior</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="img/jeans-on-chair.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Desde las marcas más finas hasta las más desconocidas</h2>
                  <p class="slider__txt">30%OFF ropa usada</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="img/Girl-camera.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Ropa y accesorios para todas las edades</h2>
                  <p class="slider__txt">5%OFF ropa de niños</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
              </div>
            </div>
            <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
          </div>
          <script src="/js/slider.js"></script>
          <main class="main">
            <div class="container">
              <h2 class="main-title">Productos nuevos para ti</h2>
              <section class="container-products">
                <?php
                  foreach ($resultado as $row) { ?>
                <div class="product">
                  <?php 
                  
                  $id = $row['id'];
                  $images = "images/$id/woman-blackdress-1.webp";
                  if(!file_exists($imagen)){
                    $images="images/vintish.jpg.png";
                  }

                  ?>
                  <img src="<?php echo $imagen; ?>" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title"><?php echo $row['nombre']; ?></h3>
                    <span class="product__price">$USD <?php echo $row['precio']; ?></span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">

                <?php 
                  
                  $id = $row['id'];
                  $images = "images/$id/woman-blackdress-1.webp";
                  if(!file_exists($imagen)){
                    $images="images/vintish.jpg.png";
                  }

                  ?>

                  <img src="<?php echo $imagen; ?>" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title"><?php echo $row['nombre']; ?></h3>
                    <span class="product__price">$USD <?php echo $row['precio']; ?></span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">

                <?php 
                  
                  $id = $row['id'];
                  $images = "images/$id/woman-blackdress-1.webp";
                  if(!file_exists($imagen)){
                    $images="images/vintish.jpg.png";
                  }

                  ?>

                  <img src="<?php echo $imagen; ?>" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title"><?php echo $row['nombre']; ?></h3>
                    <span class="product__price">$USD <?php echo $row['precio']; ?></span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">

                <?php 
                  
                  $id = $row['id'];
                  $images = "images/$id/woman-blackdress-1.webp";
                  if(!file_exists($imagen)){
                    $images="images/vintish.jpg.png";
                  }

                  ?>

                  <img src="<?php echo $imagen; ?>" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title"><?php echo $row['nombre']; ?></h3>
                    <span class="product__price">$USD <?php echo $row['precio']; ?></span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <?php } ?>
              </section>
              <section class="container__testimonials">
                <h2 class="section__title">Nuestros clientes</h2>
                <h3 class="testimonial__title">Anamaria </h3>
                <p class="testimonial__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, perferendis, animi! Numquam quasi similique, fuga sint. Nulla veritatis quia nemo, magni, necessitatibus impedit inventore, provident culpa repellat esse a quo.</p>
              </section>
            
              <div class="container-editor">
                <div class="editor__item">
                  <img src="img/girl1.jpg" alt="" class="editor__img">
                  <p class="editor__circle">Expresate como quieras</p>
                </div>
                <div class="editor__item">
                  <img src="img/Girls-smiling.jpg" alt="" class="editor__img">
                  <p class="editor__circle">Con la gente que quieras</p>
                </div>
              </div>
              <section class="container-tips">
                <div class="tip">
                  <i class="far fa-hand-paper"></i> 
                  <h2 class="tip__title">Satisfacción garantizada!</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
                <div class="tip">
                 <i class="fas fa-rocket"></i>
                  <h2 class="tip__title">Envios rápidos</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
                <div class="tip">
                  <i class="fas fa-cog"></i>
                  <h2 class="tip__title">Politica de devoluciones</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="" class="btn-shop">COMPRAR AHORA</a>
                </div>
              </section>
            </div>
          </main>
          <footer class="main-footer">
            <div class="footer__section">
              <h2 class="footer__title">Sobre nosotros</h2>
              <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Localización :</h2>
              <p class="footer__txt">San Martín 1990, Santa Fé, Santa Fé capital, Argentina</p>
              <h2 class="footer__title">Contactos</h2>
              <p class="footer__txt">Telefono : +54 342 5 674101</p>
              <p class="footer__txt">Email : Vintish@vintish-soporte.com.ar</p>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Atajos</h2>
              <a href="" class="footer__link">INICIO</a>
              <a href="" class="footer__link">SOBRE NOSOTROS</a>
              <a href="" class="footer__link">ERROR</a>
              <a href="" class="footer__link">TIENDA</a>
              <a href="" class="footer__link">CONTACTANOS</a>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Registrate para tener más ofertas</h2>
              <p class="footer__txt">Subscribierndote a nuestro tablón informativo tendras las mejores ofertas siempre.</p>
              <input type="email" class="footer__input" placeholder="Enter your email">
            </div>
            <p class="copy">© 2023 Vintish. All Rights Reserved | Design by Junigacio</p>
          </footer>
    </body>
</html>