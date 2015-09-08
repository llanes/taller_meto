<body class="homepage" style="background:url('<?php echo site_url();?>/images/geometry.jpg');">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-whatsapp"></i>  +595 985 000 000</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">Sobre Nosotros</a></li>
                         <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                <li><a href="pricing.html">Reparaciones</a></li>
                                <li><a href="pricing.html">Recambios y Accesorios</a></li>
                                <li><a href="404.html"></a></li>
                                <li><a href="shortcodes.html"></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimientos <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                <li><a href="pricing.html">Preventivo</a></li>
                                    <li><a href="pricing.html">Predictivo</a></li>
                                    <li><a href="pricing.html">Correctivo</a></li>
                                <li><a href="404.html"></a></li>
                                <li><a href="shortcodes.html"></a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Galerias</a></li>
                        <li><a href="contact-us.html">Contcto</a></li>
                        <li><a data-toggle="modal"  href='#modal-id'>Login</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Admin Login</h4>
                        </div>
                        <div class="modal-body">
                                    <form method="post" class="login-form" action="<?= site_url();?>/Home_admin/home_admin/">
                                        <div class="login-wrap">
                                                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                                                    <div class="input-group">
                                                      <span class="input-group-addon"><i class="icon_profile"></i></span>
                                                      <input type="text" class="form-control" maxlength="20" id="usuario" name="usuario" onfocus="autofocus" autocomplete="off" placeholder="Usuario" autofocus="" pattern="[A-Za-z ]{3,100}" value="" required="">
                                                    </div>
                                                    <div class="text-center"><span class="text-danger"></span></div> 
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                                                        <input type="password" class="form-control" maxlength="30" id="pass" name="pass" placeholder="Password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" value="" required="">
                                                    </div>
                                                    <div class="text-center"><div class="text-danger"></div></div> 
                                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar Sesión</button>
                                                    <!--<button class="btn btn-info btn-lg btn-block" type="button" onclick="closer()">Cancelar </button> -->
                                        </div>
                                    </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        </nav><!--/nav-->
    </header><!--/header-->