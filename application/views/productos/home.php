<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('overall/head') ?>
  </head>
  <body>
    <?php $this->load->view('overall/menu', array('all' => false)) ?>
    <style>
    .swiper-container {
        width: 100%;
        height: 400px;
        max-height: 400px;
        cursor:-webkit-grab;
    }
    .swiper-slide {
        overflow: hidden;
    }
    </style>
    <br>
    <div class="row">
      <div class="col-md-9" id ="contenido">
        <div class="row">
          <div class="ui breadcrumb">
            <a class="section">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section">Store</a>
            <i class="right angle icon divider"></i>
            <div class="active section">T-Shirt</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Swiper -->
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img class="ui bordered rounded image" src="http://hdwplan.com/wp-content/uploads/2016/02/stunning-full-hd.jpeg">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img class="ui bordered rounded image" src="http://lorempixel.com/800/400/sports/2">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img class="ui bordered rounded image" src="http://lorempixel.com/400/800/sports/3">
                  </div>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination-white"></div>
              <!-- Add Navigation -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3" id="avisos">
        <div class="col-md-12">
          <div class="ui special cards">
            <div class="card">
              <div class="blurring dimmable image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a class="ui inverted button" href="#">Ver Ofertas</a>
                    </div>
                  </div>
                </div>
                <img src="http://www.dekoraprint.com/150/cartel-rebajas-rojo.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php $this->load->view('overall/footer', array('all' => true)); ?>
    <script type="text/javascript">
    $('.special.cards .image').dimmer({
      on: 'hover'
    });
    var swiper = new Swiper('.swiper-container', {
        zoom: true,
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true
    });
    </script>
  </body>
</html>
