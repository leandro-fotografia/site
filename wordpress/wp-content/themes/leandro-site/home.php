<?php get_header(); ?>
<body class="onepage">
  <div id="preloader">
    <div class="textload">Carregando</div>
    <div id="status">
      <div class="spinner"></div>
    </div>
  </div>
  <main class="body-wrapper">
    <div class="navbar">
      <div class="navbar-header">
        <div class="basic-wrapper">
          <div class="navbar-brand">
            <a href="onepage.html">
              <img src="#" srcset="<?=THEME?>/style/images/logo.png 1x, <?=THEME?>/style/images/logo@2x.png 2x" class="logo-light" alt="" />
              <img src="#" srcset="<?=THEME?>/style/images/logo-dark.png 1x, <?=THEME?>/style/images/logo-dark@2x.png 2x" class="logo-dark"
                alt="" width="202px;" />
            </a> </div>
          <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
        </div>
        <!-- /.basic-wrapper -->
      </div>
      <!-- /.navbar-header -->
      <nav class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#home">Home</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#portfolio">Portifolio</a></li>
          <li><a href="#gallery">Galeria</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
        <!-- /.navbar-nav -->
      </nav>
      <!-- /.navbar-collapse -->

      <div class="social-wrapper">
        <ul class="social naked">
          <li><a href="#"><i class="icon-s-facebook"></i></a></li>
          <li><a href="#"><i class="icon-s-instagram"></i></a></li>
        </ul>
        <!-- /.social -->
      </div>
      <!-- /.social-wrapper -->
    </div>
    <!-- /.navbar -->

    <section id="home">
      <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">
          <ul>
            <li data-transition="fade"> <img src="<?=THEME?>/style/images/art/slider-bg1.jpg" alt="" data-bgposition="center top"
                data-bgfit="cover" data-bgrepeat="no-repeat" />
              <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Olá!
                Seja bem vindo</h1>
              <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500"
                data-easing="Sine.easeOut">Web site pessoal <br />
                Leandro Fotografia</div>
            </li>
            <li data-transition="fade"> <img src="<?=THEME?>/style/images/art/slider-bg2.jpg" alt="" data-bgposition="center top"
                data-bgfit="cover" data-bgrepeat="no-repeat" />
              <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800"
                data-easing="Sine.easeOut">Criatividade e Capacitação</div>
              <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500"
                data-easing="Sine.easeOut">Confira meu portifolio</div>
            </li>

          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
      </div>
      <!-- /.revolution -->
    </section>
    <!--/#home -->
<?php get_footer(); ?>