<?php
/**
 * Vola Theme Enqueue Style & Scripts
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxEnqueue{
    /**
     * TmxEnqueue constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Enqueues style & scripts
     *
     * @since 1.0.1
     */
    public function tmx_enqueue_scripts() {

        // Style sheets
        wp_enqueue_style( 'dashicons', get_stylesheet_directory_uri().'/resource/css/dashicons.min.css');
        wp_enqueue_style( 'jquery-ui-dialog', get_stylesheet_directory_uri().'/resource/css/jquery-ui-dialog.min.css');
        wp_enqueue_style( 'layerslider', get_stylesheet_directory_uri().'/resource/js/plugins/LayerSlider/static/css/layerslider.css');
        wp_enqueue_style( 'contact-form-7', get_stylesheet_directory_uri().'/resource/js/plugins/contact-form-7/includes/css/styles.css');
        wp_enqueue_style( 'revslider', get_stylesheet_directory_uri().'/resource/js/plugins/revslider/public/assets/css/settings.css');
        wp_enqueue_style( 'animate', get_stylesheet_directory_uri().'/resource/js/vendor/animate-css/animate.min.css');
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/js/vendor/font-awesome-4.3.0/css/font-awesome.min.css');
        wp_enqueue_style( 'jquery-fancybox', get_stylesheet_directory_uri().'/js/vendor/fancybox-2.1.5/jquery.fancybox.css');
        wp_enqueue_style( 'et-line-font', get_stylesheet_directory_uri().'/js/vendor/et-line-font/style.css');
        wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri().'/resource/js/vendor/owl-carousel/owl.carousel.css');
        wp_enqueue_style( 'owl-carousel-theme', get_stylesheet_directory_uri().'/resource/js/vendor/owl-carousel/owl.theme.css');
        wp_enqueue_style( 'linecons', get_stylesheet_directory_uri().'/resource/js/vendor/linecons/linecons.css');
        wp_enqueue_style( 'master-stylesheet', get_stylesheet_directory_uri().'/resource/css/css/style.css');
        wp_enqueue_style( 'grid', get_stylesheet_directory_uri().'/resource/css/grid.css');
        wp_enqueue_style( 'js-composer', get_stylesheet_directory_uri().'/resource/js/plugins/js_composer/assets/css/js_composer.min.css');
        wp_enqueue_style( 'staticcss', get_stylesheet_directory_uri().'/resource/css/staticcss.css');
        wp_enqueue_style( 'masterslider', get_stylesheet_directory_uri().'/resource/css/masterslider.main.css');
        wp_enqueue_style( 'beau-google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Baskerville%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext');
        wp_enqueue_style( 'ls-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext');
        wp_enqueue_style( 'montserrat-google-fonts', 'http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular');
        wp_enqueue_style( 'style', get_stylesheet_uri());

        wp_enqueue_style( 'vc_lte_ie9', "http://beauwp.wpengine.com/js/plugins/js_composer/assets/css/vc_lte_ie9.min.css", array(), false, 'screen' );
        wp_style_add_data( 'vc_lte_ie9', 'conditional', 'lte IE 9' );
        wp_enqueue_style( 'vc-ie8', "http://beauwp.wpengine.com/js/plugins/js_composer/assets/css/vc-ie8.min.css", array(), false, 'screen' );
        wp_style_add_data( 'vc-ie8', 'conditional', 'IE 8' );

        // Scripts
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'masterslider-init', get_stylesheet_directory_uri().'/resource/js/masterslider-init.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'greensock', get_stylesheet_directory_uri().'/resource/js/plugins/LayerSlider/static/js/greensock.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'layerslider', get_stylesheet_directory_uri().'/resource/js/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'layerslider-transitions', get_stylesheet_directory_uri().'/resource/js/plugins/LayerSlider/static/js/layerslider.transitions.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'revslider', get_stylesheet_directory_uri().'/resource/js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'revolution', get_stylesheet_directory_uri().'/resource/js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'jquery-ui-core');
        wp_enqueue_script( 'jquery-ui-widget');
        wp_enqueue_script( 'jquery-ui-mouse');
        wp_enqueue_script( 'jquery-ui-resizable');
        wp_enqueue_script( 'jquery-ui-draggable');
        wp_enqueue_script( 'jquery-ui-button');
        wp_enqueue_script( 'jquery-ui-position');
        wp_enqueue_script( 'jquery-ui-dialog');
        wp_enqueue_script( 'wpdialog', get_stylesheet_directory_uri().'/resource/js/wpdialog.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'contact-form-7', get_stylesheet_directory_uri().'/resource/js/plugins/contact-form-7/includes/js/jquery.form.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'contact-form-7-scripts', get_stylesheet_directory_uri().'/resource/js/plugins/contact-form-7/includes/js/scripts.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'js_composer_front', get_stylesheet_directory_uri().'/resource/js/plugins/js_composer/assets/js/js_composer_front.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'google-maps', 'http://maps.google.com/maps/api/js?sensor=false&#038;libraries=places&#038;', array( ), '', true );
        wp_enqueue_script( 'jquery-fancybox', get_stylesheet_directory_uri().'/resource/js/vendor/fancybox-2.1.5/jquery.fancybox.pack.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'jquery-fancybox-media', get_stylesheet_directory_uri().'/resource/js/vendor/fancybox-2.1.5/helpers/jquery.fancybox-media.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri().'/resource/js/vendor/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'plugins', get_stylesheet_directory_uri().'/resource/js/plugins.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'theme', get_stylesheet_directory_uri().'/resource/js/theme.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'masterslider', get_stylesheet_directory_uri().'/resource/js/masterslider.min.js', array( 'jquery' ), '', true );

    }

    /**
     * Enqueues style & scripts on admin
     *
     * @since 1.0.1
     */
    public function tmx_admin_scripts(){
        wp_enqueue_style('tmx-admin-shortcode', get_stylesheet_directory_uri().'/resource/css/admin-style.css');
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'wp_enqueue_scripts', array($this, 'tmx_enqueue_scripts') );
        add_action( 'admin_enqueue_scripts', array($this, 'tmx_admin_scripts') );
    }
}