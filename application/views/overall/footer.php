<footer class="row">
  <div class="col-md-3">
    <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/en/b/b6/Corsair_logo_horizontal.png" alt="">
  </div>
  <div class="col-md-3">
    <div class="row" style="margin-bottom:10px;">
      <div class="col-md-3 pull-left">
        <h1><i class="marker icon"></i></h1>
      </div>
      <p>Jr. Vilcabamba F - 4</p>
      <p><b>Santa Ana, La Convencion.</b></p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row" style="margin-bottom:10px; vertical-align:middle;">
      <div class="col-md-3 pull-left">
        <h1><i class="call icon"></i></h1>
      </div>
      <p>Movistar</p>
      <p><b>+51 961 024707</b></p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="row" style="margin-bottom:10px;">
      <div class="col-md-3 pull-left">
        <h1><i class="mail icon"></i></h1>
      </div>
      <p>Correo Electronico</p>
      <p><b>empresa@gmail.com</b></p>
    </div>
  </div>
  <div class="clearfix">
  </div>
  <hr>
  <p><?= $app ?> &copy; Todos los derechos reservados. <?= date('Y') ?> </p>
</footer>
</div>
<?php if ($all): ?>

  <script src="<?= base_url('overall/plugins/jquery3.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/bootstrap/js/bootstrap.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/semantic/semantic.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/swiper/dist/js/swiper.min.js') ?>" charset="utf-8"></script>
<?php else: ?>
  <script src="<?= base_url('overall/plugins/jquery3.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/bootstrap/js/bootstrap.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/semantic/semantic.min.js') ?>" charset="utf-8"></script>
  <script src="<?= base_url('overall/plugins/swiper/dist/js/swiper.min.js') ?>" charset="utf-8"></script>
<?php endif; ?>
