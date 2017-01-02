<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('overall/head') ?>
  </head>
  <body>
    <?php $this->load->view('overall/menu', array('all' => false)) ?>
    <br>
    <div class="row">
      <div class="col-md-9" id ="contenido">
        <div class="row">
          <h3 class="ui horizontal divider header">
            ¿Quienes Somos?
          </h3>
          <div class="col-md-12 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <br>
        <div class="row">
          <h3 class="ui horizontal divider header">
            <i class="heart icon red"></i>
            Ofrecemos
          </h3>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="diamond icon"></i></h1>
            <h3><b>Calidad</b></h3>
            <p>Con la calidad que se merecen nuestros clientes.</p>
          </div>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="protect icon"></i></h1>
            <h3><b>Seguridad</b></h3>
            <p>Su seguridad es nuestra mayor responsabilidad.</p>
          </div>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="smile icon"></i></h1>
            <h3><b>Confianza</b></h3>
            <p>Una excelente atencion y soporte para nuestros clientes.</p>
          </div>
        </div>
        <div class="row">
          <h3 class="ui horizontal divider header">
            <i class="payment icon"></i>
            Metodos de Pago
          </h3>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="visa icon"></i></h1>
            <h3><b>Visa</b></h3>
          </div>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="paypal icon"></i></h1>
            <h3><b>Paypal</b></h3>
          </div>
          <div class="col-md-4 text-center">
            <h1 id="icons-ofrecemos"><i class="building icon"></i></h1>
            <h3><b>En nuestro local</b></h3>
          </div>
        </div>
        <br>
        <div class="row">
          <h3 class="ui horizontal divider header">
            <i class="world icon green"></i>
            Ubicanos
          </h3>
          <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1375.21119595801!2d-72.69339267069468!3d-12.86363326777038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91727e09f2621cc3%3A0xcb6edc15338f300!2sComisaria+QUILLABAMBA+CUSCO!5e0!3m2!1ses-419!2spe!4v1483160961197"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br>
        <div class="row">
          <h3 class="ui horizontal divider header">
            <i class="text telephone icon teal"></i>
            Contáctenos
          </h3>
          <p class="text-center">Envianos un mensaje o siguenos en nuestras redes sociales, para mantenerte informado.</p>
          <div class="row">
            <div class="col-md-4 text-center">
              <h1 id="icon-contact"> <a href="#"><i class="facebook icon"></i></a></h1>
              <h1 id="icon-contact"> <a href="#"><i class="youtube icon red"></i></a></h1>
              <h1 id="icon-contact"> <a href="#"><i class="google plus circle icon red"></i></a></h1>
              <h1 id="icon-contact"> <a href="#"><i class="twitter icon"></i></a></h1>
            </div>
            <div class="col-md-8 text-center">
              <form class="ui form" id="form-contact">
                <div class="two fields">
                  <div class="field">
                    <input placeholder="Nombre" type="text">
                  </div>
                  <div class="field">
                    <input placeholder="Correo" type="text">
                  </div>
                </div>
                <div class="field">
                  <input placeholder="Asunto" type="text">
                </div>
                <div class="field">
                  <textarea placeholder="Mensaje" style="margin-top: 0px; margin-bottom: 0px; height: 168px;"></textarea>
                </div>
                <button class="ui button teal">
                  Enviar
                </button>
              </form>
            </div>
          </div>
        </div>
        <br>
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
    </script>
  </body>
</html>
