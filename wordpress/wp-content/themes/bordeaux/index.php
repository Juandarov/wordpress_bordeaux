<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">
        <article class="principal">
            <?php
                $args = array('category_name' => 'principal');
                $posts = get_posts($args);

                foreach ($posts as $post) {
                    setup_postdata($post);
                    get_template_part('content', 'page');
                }
            ?>
        </article>

        <h2>Actualités</h2>

                <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage">
                    <?php
                        $args = array('category_name' => 'Actualités');
                        $posts = get_posts($args);

                        foreach ($posts as $post) {
                            setup_postdata($post);
                            get_template_part('content', 'page');
                        }
                    ?>
                </div>
    </div>

        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
