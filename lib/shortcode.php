<?php
/**
 * Vola Theme page meta
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxShortcode
{

    /**
     * TmxCustomizerTitan constructor.
     *
     * @since 1.0.1
     */
    public function __construct() {
        $this->hooks();
    }

    /**
     * Create imagebox shortcode
     *
     * @since 1.0.1
     */
    public function shortcode_image( $atts ) {
        $a = shortcode_atts( array(
            'src' => '#',
            'alt' => '',
            'link' => '#',
            'target' => '',
            'border' => false,
        ), $atts );

        ob_start();
        ?>
        <article id="2319" class="beau-portfolio-item beau-post-in-list post-2319 beau_portfolio type-beau_portfolio status-publish has-post-thumbnail hentry project_category-design project_category-mockup">
            <div class="beau-portfolio-featured-image-wrapper">
                <div class="beau-portfolio-featured-image-bg" style="<?php echo $a['border']?'border: 1px solid #000;':''; ?>">
                    <a href="<?php echo $a['link']; ?>" target="<?php echo $a['target']; ?>"><img src="<?php echo $a['src']; ?>" alt="<?php echo $a['alt']; ?>" /></a>
                </div>
            </div>
        </article>
        <?php
        return ob_get_clean();
    }

    /**
     * Create textbox shortcode
     *
     * @since 1.0.1
     */
    public function shortcode_text( $atts, $content = null ) {
        $a = shortcode_atts( array(
            'title' => '',
            'style' => '',
        ), $atts );

        ob_start();
        ?>
        <article id="2308" class="beau-portfolio-item beau-post-in-list post-2308 beau_portfolio type-beau_portfolio status-publish has-post-thumbnail hentry project_category-design project_category-website">
            <div class="beau-portfolio-featured-image-wrapper">
                <div class="beau-portfolio-featured-image-bg" style="min-height:225px; border:1px solid; padding:15px;<?php echo $a['style']; ?>">
                    <p style="text-transform:uppercase; font-size:22px; letter-spacing:1.6px; margin:0px 0px 12px 0px; text-align:center; line-height:28px"><?php echo $a['title']; ?></p>
                    <p style="font-size:14px; line-height:18.5px !important; text-align:center;"><?php echo do_shortcode($content); ?>
                    </p>
                </div>
            </div>
        </article>
        <?php
        return ob_get_clean();
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_shortcode( 'image_box', array($this, 'shortcode_image' ));
        add_shortcode( 'text_box', array($this, 'shortcode_text' ));
    }
}