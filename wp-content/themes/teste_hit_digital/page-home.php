<?php get_header() ?>


<main class="pages home">
    <div class="content">
        <?php get_template_part( 'template-parts/content', 'header' ) ?>

        <div class="d-flex justify-content-center">
            <div class="page-title">
                <h2>Introdução</h2>
            </div>
        </div>

        <div class="wrapper-content text-homepage">
            <?php
                if(have_posts()):
                    while(have_posts()):the_post();
                        the_content();

                        if( !strlen(get_the_content()) ) {
                            echo 'Sem conteúdo cadastrado! Para inserir conteúdo edite essa página no painel administrativo.';
                        }
                    endwhile;
                else:
                    
                endif;
            ?>
        </div>
    </div>
</main>



<?php get_footer() ?>