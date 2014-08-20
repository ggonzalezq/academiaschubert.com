<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="es"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="es"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="es"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" lang="es"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper"<?php if( is_schubert_camerata() ): ?> class="schubert-camerata"<?php endif; ?>>
            <header id="main-header">
                <div class="wrapper">
                    <div id="branding">
                        <?php if( is_schubert_camerata() ): ?>
                        <a href="/schubert-camerata/">Schubert camerata</a>
                        <?php else: ?>
                        <a href="/">Schubert tu academia de musica</a>
                        <?php endif; ?>
                    </div><!--#/branding-->
                    <nav id="main-nav">
                        <ul>
                            <?php if( is_schubert_camerata() ): ?>
                            <li><a href="/schubert-camerata/camerata/">Camerata</a></li>
                            <li><a href="/schubert-camerata/eventos/">Eventos</a></li>
                            <li><a href="/schubert-camerata/paquetes/">Paquetes</a></li>
                            <li><a href="/schubert-camerata/promociones/">Promociones</a></li>
                            <?php else: ?>
                            <li><a href="/clases/">Clases</a></li>
                            <li><a href="/espacios/">Espacios</a></li>
                            <li><a href="/admision/">Admisión</a></li>
                            <li><a href="/galeria/">Galería</a></li>
                            <li><a href="/la-academia/">La academía</a></li>
                            <li><a href="/contacto/">Contacto</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav><!--#/main-nav-->
                    <nav id="social-nav">
                        <ul>
                            <li class="facebook"><a href="http://www.facebook.com/pages/Schubert-Tu-Academia-de-M%C3%BAsica/145487628869580" target="_blank">Facebook</a></li>
                            <li class="twitter"><a href="http://twitter.com/SchubertAcademy" target="_blank">Twitter</a></li>
                            <li class="youtube"><a href="" target="_blank">Youtube</a></li>
                        </ul>
                    </nav><!--#/social-nav-->
                </div>
            </header><!--#/main-header-->
            <section id="main-section">
                <div class="wrapper">
