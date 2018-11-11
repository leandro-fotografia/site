<?php 
/**
 * Template Name: Home
 */
get_header(); 
?>
    <section id="home">
      <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">
          <ul>
            <?php foreach (get_field('slider') as $slider): ?>
            <li data-transition="fade"> <img src="<?=$slider['imagem']?>" alt="<?=$slider['titulo']?>" data-bgposition="center top"
                data-bgfit="cover" data-bgrepeat="no-repeat" />
              <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut"><?=$slider['titulo']?></h1>
              <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500"
                data-easing="Sine.easeOut"><?=$slider['texto']?></div>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
      </div>
      <!-- /.revolution -->
    </section>
    <!--/#home -->

    <section id="services">
      <div class="light-wrapper">
        <div class="container inner">
          <div>
            <h3 class="section-title text-left">Para Elas</h3>
          </div>
          <!-- /.thin -->
          <div class="divide10"></div>
          <div class="row">
            <?php foreach (get_field('para-elas') as $gal) : ?>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      <?=$gal['texto']?>
                    </p>
                  </div>
                  <figure><a><img src="<?=$gal['imagem']?>" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer"><?=$gal['titulo']?></h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <!-- /column -->
            <?php endforeach; ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->
      </div>
      <!-- /.light-wrapper -->
    </section>
    <!--/#services -->

    <section id="portfolio">
      <div class="dark-wrapper">
        <div class="container inner">
          <div>
            <h3 class="section-title text-left">Para Empresas</h3>
          </div>
          <!-- /.thin -->
          <div class="divide10"></div>
          <div class="row">
            <?php foreach (get_field('para-empresas') as $gal) : ?>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      <?=$gal['texto']?>
                    </p>
                  </div>
                  <figure><a><img src="<?=$gal['imagem']?>" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer"><?=$gal['titulo']?></h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <!-- /column -->
            <?php endforeach; ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->
      </div>
      <!-- /.light-wrapper -->
    </section>
    <!--/#services -->
    <section id="gallery">
      <div class="light-wrapper ">
        <div class="inner">
          <div class="container">
            <h3 class="section-title text-center">Galeria</h3>
          </div>
          <div class="divide30"></div>
          <div id="slide-portfolio" class="image-grid col3">
            <div class="items-wrapper">
              <div class="row" style="margin:0;">
                
                <?php foreach (getGaleria(get_field('select-galeria')) as $galeria): ?>
                <div class=" col-md-2 px-0 px-0">
                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="position: absolute;
                      top: 35%;
                      text-align: center;
                      width: 100%;
                      color: white;
                      z-index:9999999">
                      <div class="title">
                        <p style="margin:0"><?=$galeria['data']?></p>
                        <h3 class="main-title layer" style="color:white">
                          <?=$galeria['texto']?>
                        </h3>
                      </div>
                      <!--/.title -->
                    </div>
                    <a href="#0" data-type="slide-portfolio-item-1">
                      <img src="<?=$galeria['imagem']?>" alt="<?=$galeria['texto']?>" />
                    </a>
                  </figure>
                </div>
                <?php endforeach; ?>

              </div>
            </div>
            <!--/.items-wrapper -->
          </div>
          <!-- slide-portfolio -->

        </div>
        <!-- /.container -->

      </div>
      <!-- /.dark-wrapper -->
    </section>
    <!--/#gallery -->

    <section id="about">
      <div class="dark-wrapper">
        <div class="container inner">
          <h3 class="section-title text-center">O fotógrafo</h3>
          <div class="divide20"></div>
          <div class="row">
            <div class="col-sm-3">
              <figure><img src="<?=THEME?>/style/images/leandro.jpeg" alt=""></figure>
            </div>
            <!-- /column -->
            <div class="col-sm-5">
              <?=get_field('sobre') ?>
              <ul class="social">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion"
                          href="#collapseTwo"> Equipamentos </a> </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?=get_field('equipamentos') ?>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion"
                          href="#collapseThree"> Certificados </a> </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body"> <?=get_field('certificados') ?> </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="progress-list">
                <?php foreach (get_field('skills') as $skill): ?>
                <li>
                  <p><?=$skill['nome']?> <em><?=$skill['porcentagem']?></em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="<?=getPorcentagem($skill['porcentagem'])?>"></div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <!-- /column -->

          </div>
          <!-- /.row -->
          <div class="clearfix"></div>
        </div>
        <!--/.container -->
      </div>
      <!--/.light-wrapper -->


    </section>
    <!--/#about -->

    <div class="parallax parallax3 inverse-wrapper customers">
      <div class="container inner text-center">
        <h3 class="section-title">Depoimentos</h3>
        <div class="testimonials owl-carousel thin">
          <?php foreach (getDepoimentos() as $dep): ?>
          <div class="item">
            <blockquote>
              <p> <?=$dep['depoimento']?> <small class="meta"><?=$dep['feito']?></small></p>
            </blockquote>
          </div>
          <!-- /.item -->
          <?php endforeach; ?>
        </div>
        <!-- /.testimonials -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.parallax -->

    <section id="contact">
      <div class="light-wrapper">
        <div class="container inner">
          <div class="thin">
            <h3 class="section-title text-left">Entre em contato</h3>
            <p class="text-left"><?=get_field('contato_texto')?></p>
            <ul class="contact-info text-left">
              <li><i class="icon-location"></i><?=get_field('endereco')?></li>
              <li><i class="icon-phone"></i><?=get_field('telefone')?></li>
              <li><i class="icon-mail"></i><a href="<?=get_field('email')?>"><?=get_field('email')?></a> </li>
            </ul>
            <div class="divide50"></div>
            <div class="form-container">
              <?= do_shortcode('[contact-form-7 id="84" title="Contact form 1"]')?>
              <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->
          </div>
          <!-- /.thin -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.light-wrapper -->
    </section>
    <!--/#contact -->

    <footer class="footer inverse-wrapper">
      <!-- .container -->
      <div class="sub-footer">
        <div class="container inner">
          <p class="text-center">© 2018. Todos direitos reservados</p>
        </div>
        <!-- .container -->
      </div>
      <!-- .sub-footer -->
    </footer>
    <!-- /footer -->
    <div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
  </main>
  <!--/.body-wrapper -->
  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-1">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">Aline</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp1-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp1-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp1-3.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp1-4.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp1-5.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->

  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-2">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">Avenida Paulisata</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp2-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp2-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp2-3.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp2-4.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->

  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-3">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">Fernanda 25/04/2016</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp3-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp3-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp3-3.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp3-4.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->

  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-4">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">Casamento</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp4-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp4-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp4-3.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp4-4.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp4-5.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->
  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-5">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">França</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp5-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp5-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp5-3.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp5-4.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->
  <div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-6">
    <div class="slide-portfolio-item-detail">
      <div class="inner2">
        <h2 class="text-center">Catadores</h2>
        <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
          dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere
          erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non
          magna.</p>
        <div class="divide25"></div>
        <ul class="basic-gallery text-center">
          <li><img src="<?=THEME?>/style/images/art/sp6-1.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp6-2.jpg" alt=""></li>
          <li><img src="<?=THEME?>/style/images/art/sp6-3.jpg" alt=""></li>
        </ul>
      </div>
      <!-- .inner -->
    </div>
    <!-- slide-portfolio-item-detail -->
  </div>
  <!-- slide-portfolio-item-content -->

  <!-- slide-portfolio-item-content -->
  <a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a>
  <script>
  window.onload = function () {
    $(".onepage a").first().hide("fast");
  }
</script>
<?php get_footer(); ?>