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
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <!-- /column -->
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
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="caption-overlay">
                <div class="escurecer">
                  <div class="descricao-destaque">
                    <p style="color:white; font-size: 22px; text-align: center; padding:25px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                  <figure><a><img src="<?=THEME?>/style/images/art/s1.jpg" alt="" /> </a></figure>
                  <div class="caption bottom-right">
                    <div class="title">
                      <h3 class="main-title layer">Retratos</h3>
                    </div>
                    <!--/.title -->
                  </div>

                </div>
                <!--/.caption -->
              </div>
            </div>
            <!-- /column -->
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
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                      top: 35%;
                      text-align: center;
                      width: 100%;
                      color: white;
                      z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                        top: 35%;
                        text-align: center;
                        width: 100%;
                        color: white;
                        z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                          top: 35%;
                          text-align: center;
                          width: 100%;
                          color: white;
                          z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                            top: 35%;
                            text-align: center;
                            width: 100%;
                            color: white;
                            z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                              top: 35%;
                              text-align: center;
                              width: 100%;
                              color: white;
                              z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                top: 35%;
                                text-align: center;
                                width: 100%;
                                color: white;
                                z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                  top: 35%;
                                  text-align: center;
                                  width: 100%;
                                  color: white;
                                  z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                    top: 35%;
                                    text-align: center;
                                    width: 100%;
                                    color: white;
                                    z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                      top: 35%;
                                      text-align: center;
                                      width: 100%;
                                      color: white;
                                      z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                        top: 35%;
                                        text-align: center;
                                        width: 100%;
                                        color: white;
                                        z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                          top: 35%;
                                          text-align: center;
                                          width: 100%;
                                          color: white;
                                          z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                            top: 35%;
                                            text-align: center;
                                            width: 100%;
                                            color: white;
                                            z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                              top: 35%;
                                              text-align: center;
                                              width: 100%;
                                              color: white;
                                              z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                                top: 35%;
                                                text-align: center;
                                                width: 100%;
                                                color: white;
                                                z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                                  top: 35%;
                                                  text-align: center;
                                                  width: 100%;
                                                  color: white;
                                                  z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                                    top: 35%;
                                                    text-align: center;
                                                    width: 100%;
                                                    color: white;
                                                    z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                                      top: 35%;
                                                      text-align: center;
                                                      width: 100%;
                                                      color: white;
                                                      z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
                <div class=" col-md-2 px-0 px-0">

                  <figure class="icon-overlay">
                    <div class="caption bottom-right" style="    position: absolute;
                                                        top: 35%;
                                                        text-align: center;
                                                        width: 100%;
                                                        color: white;
                                                        z-index:9999999">
                      <div class="title">
                        <p style="margin:0">Outubro, 2019</p>
                        <h3 class="main-title layer" style="color:white">Retratos</h3>
                      </div>
                      <!--/.title -->
                    </div><a href="#0" data-type="slide-portfolio-item-1"><img src="<?=THEME?>/style/images/art/pf1.jpg" alt="" /></a>
                  </figure>

                </div>
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
              <p>Tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla
                sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam
                id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
              <ul class="social">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion"
                          href="#collapseTwo"> Equipamentos </a> </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body"> <strong>Equipamentos de Fotografia</strong>
                        Camera Canon EOS Rebel T6i<br>
                        Lente Canon EF-S 18-55MM<br>
                        Lente Canon EF 50MM F/1.8 STM<br>
                        Lente Canon EF 85MM F/1.8 USM<br>
                        Lente Canon EF 75-300MM F/4-5.6<br><br>

                        <strong> Equipamentos de Iluminação e microfone</strong>
                        Iluminador de vídeo Light Led 500 PRO 5500K ATEK <br>
                        Tripé Studio ATEK <br>
                        Tripé Opus 3 ATEK <br>
                        Globo Difusor AT 233 ATEK<br>
                        Microfone Profissional Rode Videomic com Sistema Rycote</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion"
                          href="#collapseThree"> Certificados </a> </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body"> Focus Fotografia - Conhecendo a luz (Ago/2018)<br>
                        Focus Fotografia - Interpretando a luz (Set/2018)<br>
                        Focus Fotografia - Moda, retrato e books (Out/2018)<br>
                        Focus Fotografia - Estúdio publicitário editorial e still (Out/2018)<br>
                        Focus Fotografia - Fotojornalismo (Nov/2018)<br>
                        Focus Fotografia - Casamento e eventos sociais (Nov/2018)<br>
                        Focus Fotografia - Photoshop para fotógrafos (Dez/2018)<br> </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="progress-list">
                <li>
                  <p>Certificados <em>7</em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="70"></div>
                  </div>
                </li>
                <li>
                  <p>Ensaios (para elas) <em>9</em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="90"></div>
                  </div>
                </li>
                <li>
                  <p>Fotos do portfólio<em>918</em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="100"></div>
                  </div>
                </li>
                <li>
                  <p>Galeria <em>918</em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="80"></div>
                  </div>
                </li>
                <li>
                  <p>Seguidores em mídias sociais <em>2174</em></p>
                  <div class="progress plain">
                    <div class="bar" data-width="100"></div>
                  </div>
                </li>
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
          <div class="item">
            <blockquote>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Nullam dolor nibh ultricies vehicula
                elit vulputate tristique egestas.<small class="meta">Nikolas Brooten</small></p>
            </blockquote>
          </div>
          <!-- /.item -->
          <div class="item">
            <blockquote>
              <p>Cras justo odio, dapibus facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Etiam
                porta sem malesuada magna mollis euismod.<small class="meta">Coriss Ambady</small></p>
            </blockquote>
          </div>
          <!-- /.item -->
          <div class="item">
            <blockquote>
              <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis id vestibulum. Donec sed odio dui.
                Sed posuere consectetur est at lobortis.<small class="meta">Barclay Widerski</small></p>
            </blockquote>
          </div>
          <!-- /.item -->
          <div class="item">
            <blockquote>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum.
                Vivamus sagittis lacus vel augue laoreet.<small class="meta">Elsie Spear</small></p>
            </blockquote>
          </div>
          <!-- /.item -->
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
            <p class="text-left">Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a
              pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p>
            <ul class="contact-info text-left">
              <li><i class="icon-location"></i>Avenida Paulista, 104</li>
              <li><i class="icon-phone"></i>+55 (11) 99999-9999</li>
              <li><i class="icon-mail"></i><a href="contato@email.com">contatot@email.com</a> </li>
            </ul>
            <div class="divide50"></div>
            <div class="form-container">
              <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label>
                        <input type="text" name="name" placeholder="NOme" required>
                      </label>
                    </div>
                    <!--/.form-field -->
                  </div>
                  <!--/column -->
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label>
                        <input type="email" name="email" placeholder="e-mail" required>
                      </label>
                    </div>
                    <!--/.form-field -->
                  </div>
                  <!--/column -->
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label>
                        <input type="tel" name="tel" placeholder="Telefone">
                      </label>
                    </div>
                    <!--/.form-field -->
                  </div>
                  <!--/column -->
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label class="custom-select">
                        <select name="department" required="required">
                          <option value="">Departamento</option>
                          <option value="Sales">Foto</option>
                          <option value="Marketing">Videos</option>
                          <option value="Support">Network</option>
                          <option value="Other">Outro</option>
                        </select>
                        <span>
                          <!-- fake select handler --></span> </label>
                    </div>
                    <!--/.form-field -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
                <textarea name="message" placeholder="Escreva sua mensagem aqui..." required></textarea>

                <input type="submit" class="btn" value="Enviar" data-error="Preencha todos campos" data-processing="Enviando..."
                  data-success="Obrigado!">
                <footer class="notification-box"></footer>
              </form>
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