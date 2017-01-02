<!DOCTYPE html>
<html lang="es">
  <head>
    <?php $this->load->view('overall/head') ?>
  </head>
  <body>
    <header>
      <?php $this->load->view('overall/menu') ?>
    </header>

    <div class="container-fluid page">
    <div class="row-fluid">
        <div class="container">
            <div class="row">
              <div class="section-heading">
                <span class="cover">
                  <span class="highlight-color">Noticias</span>
                </span>
              </div>
              <?php if ($news): ?>
                <?php for ($i=0; $i < count($news); $i++): ?>
                  <div class="col-xs-18 col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?= base_url('admin/overall/uploads/'.$news[$i]->portada.'')?>" alt="">
                        <div class="caption">
                          <h4><?= $news[$i]->titulo ?></h4>
                          <p><a href="<?= base_url('noticias/ver/'.$news[$i]->id_noticia.'')?>" style="color: #fff;" class="btn btn-primary btn-xs" role="button">Leer más...</a></p>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
                <?php else: ?>
                  <h3>No existe noticias por el momento.</h3>
                  <br>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img class="img" src="https://i.blogs.es/790e04/error-1349562_960_720/original.png" alt="">
                  </div>
              <?php endif; ?>


          </div>
      </div>
  </div>
</div>

    <?php $this->load->view('overall/footer') ?>
  </body>
</html>
