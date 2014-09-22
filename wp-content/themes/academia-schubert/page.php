<?php get_header(); ?>
<?php if( ! is_front_page() ): ?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>
            <article id="classes">
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="content">
                    <?php //the_content(); ?>
                    <nav id="classes-nav">
                        <ul>
                            <li class="violin"><a href="/clases/violin/">Violin</a></li>
                            <li class="guitar"><a href="/clases/guitarra/">Guitarra</a></li>
                            <li class="singing"><a href="/clases/canto/">Canto</a></li>
                            <li class="piano"><a href="/clases/piano/">Piano</a></li>
                            <li class="musical-appreciation"><a href="/clases/apreciacion-musical/">Apreciacion musical</a></li>
                            <li class="solfeo"><a href="/clases/solfeo/">Solfeo</a></li>
                        </ul>
                    </nav><!--#/classes-nav-->
                    <p>Las clases son personalizadas, con un método práctico-teórico para que el alumno pueda aprender música más rápidamente. Son 4 horas a la semana sea cual sea el curso elegido.</p>
                    <p>Algo único en Schubert, son los cubículos, espacios diseñados para la práctica extra como algo opcional, además del espacio diseñado para repaso de lo aprendido en el curso, la Academia cuenta con instrumentos para dicha practica.</p>
                </div>
            </article>
        <?php endwhile; ?> 
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
