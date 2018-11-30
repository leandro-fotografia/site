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
      </div>
    </section>
   

    <section id="services">
      <div class="light-wrapper">
        <div class="container inner">
          <div>
            <h3 class="section-title text-left">Para Você</h3>
          </div>
          <div class="divide10"></div>
          <div class="row">
            <?php foreach (get_field('para-elas') as $gal) : ?>
            <div class="col-sm-3">
              <div class="caption-overlay">
                <div class="escurecer">                 
                  <figure><a><img src="<?=$gal['imagem']?>" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer"><?=$gal['titulo']?></h3>
                    </div>
                    <div class="descricao-destaque">
                    <p>
                      <?=$gal['texto']?>
                    </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>       
        </div>
      </div>
    </section>
   

    <section id="portfolio">
      <div class="dark-wrapper">
        <div class="container inner">
          <div>
            <h3 class="section-title text-left">Para Empresas</h3>
          </div>         
          <div class="divide10"></div>
          <div class="row">
            <?php foreach (get_field('para-empresas') as $gal) : ?>
            <div class="col-sm-3">
              <div class="caption-overlay">
                <div class="escurecer">                 
                  <figure><a><img src="<?=$gal['imagem']?>" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer"><?=$gal['titulo']?></h3>
                    </div>
                    <div class="descricao-destaque">
                    <p>
                      <?=$gal['texto']?>
                    </p>
                  </div>
                  </div>
                </div>
               
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
     
    </section>
    
            <!-- /.hidden --> 
          
    <section id="gallery">
      <div class="light-wrapper ">
        <div class="inner">
          <div class="container">
            <h3 class="section-title">Galeria</h3>
          </div>
          <div class="divide30"></div>
          <div id="slide-portfolio" class="image-grid col3">
            <div class="items-wrapper">
              <div class="row" style="margin:0;">
                <?php foreach (getGaleria(get_field('select-galeria')) as $galeria): ?>
                <div class=" col-md-2 px-0 px-0 back-negro">
                  <a class="cbp-caption fancybox-media" href="<?=$galeria['imagem']['sizes']['medium_large']?>">
                    <figure class="icon-overlay light-over">
                      <div class="caption bottom-right cpp">                      
                        <div class="title">
                          <p style="margin:0"><?=$galeria['data']?></p>
                          <h3 class="main-title layer" style="color:white">
                            <?=$galeria['texto']?>
                          </h3>
                        </div>
                      </div>  
                      <img 
                      src="<?=$galeria['imagem']['sizes']['medium_large']?>" 
                      alt="<?=$galeria['texto']?>" />                   
                    </figure>
                  </a>
                </div>
                <?php endforeach; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
    <section id="about">
      <div class="dark-wrapper">
        <div class="container inner">
          <h3 class="section-title">O fotógrafo</h3>
          <div class="divide20"></div>
          <div class="row">
            <div class="col-sm-3">
              <figure><img src="<?=THEME?>/style/images/leandro.jpeg" alt=""></figure>
            </div>
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
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion"
                          href="#collapseFour"> Dicas de Leitura </a> </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body"> <?=get_field('dicas_leitura') ?> </div>
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
                    <div class="bar sonny_progressbar" data-width="<?=getPorcentagem($skill['porcentagem'])?>"></div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
   


    </section>
   

    <div class="parallax parallax3 inverse-wrapper customers">
      <div class="container inner text-center">
        <h3 class="section-title sem-cor-titulo depoimento-titulo">Depoimentos</h3>
        <div class="testimonials owl-carousel thin">
          <?php foreach (getDepoimentos() as $dep): ?>
          <div class="item">
            <blockquote>
              <p> <?=$dep['depoimento']?> <small class="meta"><?=$dep['feito']?></small></p>
            </blockquote>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
   

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
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer inverse-wrapper">
      <div class="sub-footer">
        <div class="container inner">
          <div class="col-lg-10">
            <p class="text-center">© 2018. Todos direitos reservados</p>
          </div>
          <div class="col-lg-2">
            <img style="width: 10%;" src="<?=THEME?>/style/images/icone-cadeado.png" alt="Area restrita" />    
          </div>
        </div>
             
      </div>
    </footer>
  
    <div class="slide-portfolio-overlay"></div>
  </main>  
 
  <script>
  window.onload = function () {
    $(".onepage a").first().hide("fast");
  }
</script>
<?php get_footer(); ?>