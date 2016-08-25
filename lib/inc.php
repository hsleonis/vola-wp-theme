<?php
/**
 * Vola Theme library includer
 * Includes all necessary library files
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxLibraryIncluder{
    /**
     * @access private
     * @var instance
     * Used to instantiate
     *
     * @since 1.0.1
     */
    private static $instance;

    /**
     * @access private
     * @var admin
     * used to store titan instance
     *
     * @since 1.0.1
     */
    private static $admin;

    /**
     * @access public
     * TmxLibraryIncluder constructor.
     * @param string $admin instance
     * @return new TmxLibraryIncluder instance
     *
     * @since 1.0.1
     */
    public static function instance($admin) {
        if ( ! self::$instance ) {
            self::$instance = new self;
            self::$admin = $admin;
            self::$instance->includes();
            self::$instance->init();
        }
        return self::$instance;
    }

    /**
     * @access private
     * Include all library files
     *
     * @since 1.0.1
     */
    private function includes(){
        require_once ( get_template_directory().'/lib/enqueue.php');
        require_once ( get_template_directory().'/lib/menu.php');
        require_once ( get_template_directory().'/lib/admin-embedder.php');
        require_once ( get_template_directory().'/lib/customizer.php');
        require_once ( get_template_directory().'/lib/theme-support.php');
        require_once ( get_template_directory().'/lib/shortcode.php');
    }

    /**
     * @access private
     * Initialize libraries
     *
     * @since 1.0.1
     */
    private function init(){
        new TmxEnqueue();
        new TmxCustomizerTitan(self::$admin);
        new TmxMenu(array(
            'main-menu' => __( 'Main menu', 'themeaxe' ),
        ));
        new TmxThemeSupport();
        new TmxShortcode();
    }

    /**
     * @access public
     * @return admin instance
     *
     * @since 1.0.1
     */
    public function getAdmin(){
        return TitanFramework::getInstance(self::$admin);
    }
}