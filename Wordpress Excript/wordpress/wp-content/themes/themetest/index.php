<?php get_header(); ?>
<!-- corpo -->
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Blog demonstração</h1>
        <p class="blog-desc">Descrição do Blog</p>
    </div>

    <div class="row">

        <div class="col-sm-8 main">

            <?php if(have_posts()): ?>
              <?php while (have_posts()):  ?>
                  <?php the_post(); ?>
                    <article id="<?php the_ID() ?>" <?php post_class('clearfix'); ?>>

                        <header>
                              <?php the_title(sprintf("<h2><a href='%s'>", esc_url( get_permalink())),"</a></h2>") ?>
                        </header>

                        <?php the_excerpt(); ?>
                    </article>
                  <?php endwhile ?>
                <?php endif ?>
            <nav>
                <ul class="pager">
                    <li><a href="#">Anterior</a></li>
                    <li><a href="#">Próximo</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
            <div class="sidebar">
                <h4>Widget A</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Valor 1</a></li>
                    <li><a href="#">Valor 2</a></li>
                    <li><a href="#">Valor 3</a></li>
                </ol>
            </div>
            <div class="sidebar">
                <h4>Widget B</h4>
                <ol class="list-unstyled">
                    <li><a href="#">Valor 1</a></li>
                    <li><a href="#">Valor 2</a></li>
                    <li><a href="#">Valor 3</a></li>
                </ol>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
