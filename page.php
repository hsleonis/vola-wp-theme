<?php
/**
 * Vola Theme page template
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

 get_header();
?>
        <section class="beau-mainbar">
            <h2 class="hidden">VOMO / DOAL</h2>
            <article id="post-1804" class="post-1804 page type-page status-publish hentry">

                <div style="background-attachment: scroll !important;" class="vc_row wpb_row vc_row-fluid">
                    <div class="vc_col-sm-12 wpb_column vc_column_container">
                        <div class="wpb_wrapper">

                            <div id="beausc-portfolio" class="beau-portfolio">
                                <div class="beau-portfolio-masonry-wrapper" data-columns="3" data-margin="20">

                                    <div class="beau-portfolio-items-wrapper beau-portfolio-fit-columns">
                                        <?php
                                            while(have_posts()):the_post();
                                                the_content();
                                            endwhile;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

<?php
    get_footer();