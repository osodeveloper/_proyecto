<!DOCTYPE html>
<html lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <meta property="og:url"           content="<?php echo base_url('noticias/ver/'), $news['noticia'][0]->id_noticia  ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $news['noticia'][0]->titulo ?>" />
  <meta property="og:description"   content="<?php echo $news['noticia'][0]->titulo ?>" />
  <meta property="og:image"         content="<?php echo base_url('admin/overall/uploads/'),$news['noticia'][0]->portada ?>" />
  <meta property="og:image:width" content="450"/>
  <meta property="og:image:height" content="298"/>
  <?php $this->load->view('overall/head') ?>
  <link rel="stylesheet" href="<?= base_url('overall/plugins/flex_Slider/flexslider.css') ?>">
  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=312789122403341";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <header>
      <?php $this->load->view('overall/menu') ?>
    </header>

    <div class="container-fluid page">
    <div class="row-fluid">
        <div class="container">
            <div class="row">
                  <div class="span8 txt_content">
                    <div class="section-heading">
                      <span class="cover">
                        <span class="highlight-color"><?php echo $news['noticia'][0]->titulo ?></span>
                      </span>
                    </div>
      	            <div class="row">
      	               Fecha: <?php echo $news['noticia'][0]->fecha ?> <i class="fa fa-calendar" aria-hidden="true"></i>
      	            </div>
                    <img class="img-responsive img-thumbnail center-block" src="<?php echo base_url('admin/overall/uploads/'),$news['noticia'][0]->portada ?>" alt="">
                    <hr>
                    <div class="section-body">
                      <?php echo $news['noticia'][0]->contenido ?>
                    </div>
                    <hr>
                    <div class="row">
                      <?php if ($news['galeria'] !== false): ?>
                        <div class="row">
                          <section class="slider">
                            <p><b>Galería <span class="glyphicon glyphicon-picture"></span>: </b></p>
                            <div class="flexslider">
                              <ul class="slides">
                                <?php for($i= 0; $i < count($news['galeria']); $i++): ?>
                                  <li><img class="img-responsive img-thumbnail" src="<?php echo base_url('admin/overall/uploads/'), $news['galeria'][$i]->url ?>" alt=""></li>
                                <?php endfor; ?>
                              </ul>
                            </div>
                          </section>
                        </div>
                        <hr>
                      <?php endif; ?>
                    </div>
                    <div class="row">
                      <div class="col-md-12">

                      	<div class="fb-share-button" data-href="http://www.example.com/noticias/ver/<?php echo $news['noticia'][0]->id_noticia,'/', urlencode($news['noticia'][0]->titulo)  ?>" data-layout="button" data-size="large" data-mobile-iframe="true">
                          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                            Compartir
                          </a>
                        </div>
                      </div>
                    </div>

                  </div >
                  <div class="span4 right_sidebar">
                      <div class="section-heading"><span class="cover">Nuestros Productos</span></div>
                      <ul class="sidebar_links">


                          <li>
                              <a href="javascript:;">Biodigestores</a>
                          </li>
                          <li>
                              <a href="javascript:;">Blas Master</a>
                          </li>
                          <li>
                                            <a href="javascript:;">Tuberias</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Electrofusi贸n</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Gaviones</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Geomenbranas</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Cemento Solvente para PVC </a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Sumideros Cajas de Inspecci贸n</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Mallas</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Abrazaderas y Acoples de PP</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Canaletas</a>
                                        </li>
                          <li>
                                            <a href="javascript:;">Accesorios Inyectados de PVC</a>
                                        </li>
                          <li>
                              <a href="javascript:;">Valvulas</a>
                          </li>
                      </ul>

                      <div class="clear"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    <?php $this->load->view('overall/footer') ?>
    <script src="<?= base_url('overall/plugins/flex_Slider/jquery.flexslider-min.js') ?>" charset="utf-8"></script>
    <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        smoothHeight: true,
      });
    });
  	</script>
  </body>
</html>
