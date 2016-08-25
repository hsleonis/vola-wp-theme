<?php
/**
 * Vola Theme customizer settings
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxCustomizerTitan
{
    /**
     * @access private
     * @var instance name
     * @since 1.0.1
     */
    private $instance_name;

    /**
     * TmxCustomizerTitan constructor.
     *
     * @since 1.0.1
     */
    public function __construct($instance_name)
    {
        $this->instance_name = (string)$instance_name;
        $this->hooks();
    }

    /**
     * Create customizer options with Titan
     *
     * @since 1.0.1
     */
    public function tmx_create_options() {
        $titan = TitanFramework::getInstance($this->instance_name);

        $footer = $titan->createThemeCustomizerSection(array(
            'name' => 'Footer',
        ));

        $footer->createOption(array(
            'name' => 'Footer Title',
            'id' => 'footer-title',
            'type' => 'text',
            'desc' => 'Page footer title'
        ));
        $footer->createOption(array(
            'name' => 'Mobile',
            'id' => 'footer-mobile',
            'type' => 'text',
            'desc' => 'Mobile numbers'
        ));
        $footer->createOption(array(
            'name' => 'Email',
            'id' => 'footer-email',
            'type' => 'text',
            'desc' => 'Email address'
        ));

        $copyright = $titan->createThemeCustomizerSection(array(
            'name' => 'Copyright',
        ));
        $copyright->createOption(array(
            'name' => 'Copyright Information',
            'id' => 'copyright-info',
            'type' => 'text',
            'desc' => 'Copyright information shown at page bottom'
        ));
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'tf_create_options', array($this, 'tmx_create_options') );
    }
}