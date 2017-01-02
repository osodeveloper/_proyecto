<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('overall/head') ?>
  </head>
  <body>
    <?php $this->load->view('overall/menu') ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center">
        <img class="img-responsive" src="https://www.shareicon.net/download/2016/08/01/640380_emoticon_512x512.png" alt="">
        <h1>error 404!</h1>
        <h2>Pagina no encontrada.</h2>
        <h3>Ir al <a href="<?= base_url() ?>">inicio. <i class="home icon"></i></a></h3>
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
