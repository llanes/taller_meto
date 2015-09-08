<body >
   <header id="header" >
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?= base_url();?>images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                             <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Mantenimientos</a></li>
                                <li><a href="pricing.html">Reparaciones</a></li>
                                <li><a href="404.html"></a></li>
                                <li><a href="shortcodes.html"></a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Galerias</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url();?>/Marca/marca/">Marcas</a></li>
                                <li><a href="pricing.html">Modelos</a></li>
                                <li><a href="404.html">Clientes</a></li>
                                <li><a href="shortcodes.html">Agenda</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Agenda</a></li> 
                    <li class="dropdown">
  
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" >
                             <span class="profile-ava">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                            <span class="username">{admin}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li class="eborder-top">
                                <a href="<?php echo base_url();?>index.php/Home/home"><i  class="icon_key_alt"></i> Cerrar Sesi&oacute;n</a>
                            </li>
                             <li>
                                <i class="icon_key_alt"></i> 
                            </li>

                        </ul>
                    </li>
                    </ul>
                </div>
            </div><!--/.container-->
 
        </nav><!--/nav-->
    </header><!--/header-->