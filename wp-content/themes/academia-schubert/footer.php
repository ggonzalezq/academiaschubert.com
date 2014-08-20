                </div>
            </section><!--#/main-section-->
            <footer id="main-footer">
                <div class="wrapper">
                    <?php if( is_schubert_camerata() ): ?>
                    <p>Imagina tu boda con Shubert Camerata</p>
                    <a href="" class="black-button">Solicitar cotización</a>
                    <?php else: ?>
                    <p>Formamos artistas sensibles que aportan <br />a la sociedad y son un ejemplo aseguir</p>
                    <a href="" class="black-button">Solicitar información</a>
                    <?php endif; ?>
                </div>
            </footer><!--#/main-footer-->
        </div><!--#/wrapper-->
        <?php if( is_schubert_camerata() ): ?>
        <div id="schubert-academy">
            <a href="/">Schubert academia</a>
        </div><!--#/schubert-camerata-->
        <?php else: ?>
        <div id="schubert-camerata">
            <a href="/schubert-camerata/">Schubert camerata</a>
        </div><!--#/schubert-camerata-->
        <?php endif; ?>
	<?php wp_footer(); ?>
    </body>
</html>