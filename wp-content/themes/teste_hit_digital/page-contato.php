<?php get_header() ?>

<main class="pages contato">
    <div class="content">
        <?php get_template_part( 'template-parts/content', 'header' ) ?>

        <div class="d-flex justify-content-center">
            <div class="page-title">
                <h2>Contato</h2>
            </div>
        </div>

        <div class="wrapper-content form-contato">
            <form method="POST" class="form-group" id="form">
                <div class="row">
                    <div class="cols col-lg-6">
                        <fieldset>
                            <input class="form-control" type="text" name="nome" placeholder="Nome*" required>
                        </fieldset>
                    </div>

                    <div class="cols col-lg-6 mt-3 mt-md-0">
                        <fieldset>
                            <input class="form-control" type="email" name="email" placeholder="E-mail*" required>
                        </fieldset>
                    </div>

                    <div class="cols mt-3 col-lg-12">
                        <fieldset>
                            <textarea rows="8" class="form-control" name="mensagem" placeholder="Mensagem*"></textarea>
                        </fieldset>
                    </div>

                    <div class="cols col-lg-12 text-center">
                        <button type="submit" id="btn-submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>


<?php get_footer() ?>