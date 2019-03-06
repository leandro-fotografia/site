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
                <?php  if ($slider['tipo'] == 'Imagem'): ?>
                <li data-transition="fade"> <img src="<?=$slider['imagem']?>" alt="<?=$slider['titulo']?>"
                        data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800"
                        data-easing="Sine.easeOut">
                        <?=$slider['titulo']?>
                    </h1>
                    <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500"
                        data-easing="Sine.easeOut">
                        <?=$slider['texto']?>
                    </div>
                </li>
                <?php elseif ($slider['tipo'] == 'Video'): ?>
                <li data-transition="fade"> <img src="<?=$slider['imagem']?>"
                        alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900"
                        data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">
                        <?=$slider['titulo']?>
                    </div>
                    <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900"
                        data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">
                        <?=$slider['texto']?>
                    </div>
                    <div class="tp-caption tp-fade fadeout fullscreenvideo" data-x="0" data-y="0" data-speed="1000"
                        data-start="1100" data-easing="Power4.easeOut" data-elementdelay="0.01" data-endelementdelay="0.1"
                        data-endspeed="1500" data-endeasing="Power4.easeIn" data-autoplay="true"
                        data-autoplayonlyfirsttime="false" data-nextslideatend="true" data-dottedoverlay="twoxtwo"
                        data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 1;">
                        <video class="" preload="none" width="100%" height="100%" poster='<?=$slider['imagem']?>'>
                            <source src='<?=$slider['video']?>' type='video/mp4' />
                        </video>
                    </div>
                </li>
                <? endif; ?>
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
                <h3 class="section-title text-left titulo-areas">Para Você</h3>
            </div>
            <div class="divide10 mt-5"></div>
            <div class="row">
                <?php foreach (get_field('para-elas') as $gal) : ?>
                <div class="col-sm-3">
                    <div class="caption-overlay">
                        <div class="escurecer">
                            <figure><a><img src="<?=$gal['imagem']['sizes']['medium_large']?>" alt="" /> </a></figure>
                            <div class="caption bottom-right">
                                <div class="title">
                                    <h3 class="main-title layer">
                                        <?=$gal['titulo']?>
                                    </h3>
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
            <h3 class="section-title text-left titulo-areas">Para Empresas</h3>
            <div class="divide10 mt-5"></div>
            <div class="row">
                <?php foreach (get_field('para-empresas') as $gal) : ?>
                <div class="col-sm-3">
                    <div class="caption-overlay">
                        <div class="escurecer">
                            <figure><a><img src="<?=$gal['imagem']['sizes']['medium_large']?>" alt="" /> </a></figure>
                            <div class="caption bottom-right">
                                <div class="title">
                                    <h3 class="main-title layer">
                                        <?=$gal['titulo']?>
                                    </h3>
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
                <h3 class="section-title titulo-areas">Galeria</h3>
            </div>
            <div class="divide30 mt-5"></div>
            <div id="slide-portfolio" class="image-grid col3">
                <div class="items-wrapper">
                    <div class="row" style="margin:0;">
                        <?php foreach (getGaleria(get_field('select-galeria')) as $galeria): ?>
                        <div class=" col-md-2 px-0 px-0 back-negro">
                            <a class="cbp-caption fancybox-media" href="<?=$galeria['imagem']['sizes']['medium_large']?>">
                                <figure class="icon-overlay light-over">
                                    <div class="caption bottom-right cpp">
                                        <div class="title">
                                            <p style="margin:0">
                                                <?=$galeria['data']?>
                                            </p>
                                            <h3 class="main-title layer" style="color:white">
                                                <?=$galeria['texto']?>
                                            </h3>
                                        </div>
                                    </div>
                                    <img src="<?=$galeria['imagem']['sizes']['medium_large']?>" alt="<?=$galeria['texto']?>" />
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
            <h3 class="section-title titulo-areas">O fotógrafo</h3>
            <div class="divide20 mt-5"></div>
            <div class="row">
                <div class="col-sm-3">
                    <figure><img src="<?=THEME?>/style/images/leandro.jpeg" alt=""></figure>
                </div>
                <div class="col-sm-5">
                    <?=get_field('sobre') ?>
                    <ul class="social">
                        <div class="panel-group" id="accordion">
                            <div class="row">
                                <div class="panel panel-default panel-Two col-lg-4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle link-Two"
                                                data-parent="#accordion" href="#collapseTwo"> Equipamentos </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-Three col-lg-4">
                                    <div class="panel-heading ">
                                        <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle link-Three"
                                                data-parent="#accordion" href="#collapseThree"> Certificados </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-Four col-lg-4">

                                    <div class="panel-heading ">
                                        <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle link-Four"
                                                data-parent="#accordion" href="#collapseFour"> Dicas de Leitura </a>
                                        </h4>
                                    </div>

                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?=get_field('equipamentos') ?>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div id="collapseThree" class="panel-collapse collapse tres">
                                        <div class="panel-body">
                                            <?=get_field('certificados') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div id="collapseFour" class="panel-collapse collapse quatro">
                                        <div class="panel-body">
                                            <?=get_field('dicas_leitura') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="progress-list">
                        <?php foreach (get_field('skills') as $skill): ?>
                        <li>
                            <p>
                                <?=$skill['nome']?> <em>
                                    <?=$skill['porcentagem']?></em></p>
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
                    <p>
                        <?=$dep['depoimento']?> <small class="meta">
                            <?=$dep['feito']?></small></p>
                </blockquote>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<section id="contact">
    <div class="light-wrapper">
        <div class="container inner">
            <div>
                <h3 class="section-title text-left titulo-areas">Entre em contato</h3>
                <div class="row mt-5">
                    <div class="col-lg-6">

                        <div class="divide50"></div>
                        <div class="form-container">
                            <?= do_shortcode('[contact-form-7 id="84" title="Contact form 1"]')?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="divide50"></div>
                        <p class="text-left">
                            <?=get_field('contato_texto')?>
                        </p>
                        <ul class="contact-info text-left mt-5">
                            <li><i class="icon-location"></i>
                                <?=get_field('endereco')?>
                            </li>
                            <li><i class="icon-phone"></i>
                                <?=get_field('telefone')?>
                            </li>
                            <li><i class="icon-mail"></i><a href="<?=get_field('email')?>">
                                    <?=get_field('email')?></a> </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<div class="slide-portfolio-overlay"></div>
</main>

<script>
    window.onload = function () {
        $(".onepage a").first().hide("fast");
    }
</script>
<!-- Modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Acessar área restrita</h4>
            </div>
            <div class="modal-body">
                <form id="restrctForm" class="form" action="">
                    <div id="alertUser" class="alert alert-danger" role="alert">
                        Usuário não autorizado!
                    </div>
                    <input type="hidden" name="id" value="<?=get_the_ID();?>">
                    <div class="form-group">
                        <label for=""> Login </label>
                        <input class="form-control" type="text" name="login">
                    </div>
                    <div class="form-group">
                        <label for=""> Senha </label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="areaRestrita()" class="btn btn-primary">Acessar</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>