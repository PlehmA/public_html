<?php require('includes/utilities.php') ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('resources/header.php'); ?>
<body>
<style>
  html, body {
        position: relative;
        height: 100%;
    }
    body {
        background-color: #F5DEB3;
        font-family: 'Rambla', sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
        
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #F5DEB3;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
  </style>
<div class="container">
 <?php require_once('resources/navigation.php'); ?>


<div class="text-center page-header">
	<h1 class="animated zoomInDown">Clasificados San Martin</h1>
	<p class="animated zoomInUp">De todo un poco y <b>mucho tambien</b>....</p>
</div>

<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./images/publicitese.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/publicitese.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./images/publicitese.jpg" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>




<?php require_once('resources/footer.php') ?>
</div>
<?php require_once('includes/scripts.php'); ?>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    </script>
</body>
</html>