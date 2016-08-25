<?php
/**
 * Vola Theme Footer
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
    </div>
</div>

<footer id="beau-footer" class="footer-style-1">
    <div class='footer-area'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="wysija-2" class="clearfix widget_wysija">
                        <h3 style="margin-bottom: 20px !important;"><?php echo TmxLibraryIncluder::getAdmin()->getOption('footer-title'); ?></h3>
                        <div class="widget_wysija_cont" style="text-align: center">
                            <div id="msg-form-wysija-2" class="wysija-msg ajax"></div>
                            <?php echo TmxLibraryIncluder::getAdmin()->getOption('footer-mobile'); ?><br />
                            <?php echo TmxLibraryIncluder::getAdmin()->getOption('footer-email'); ?>
                        </div>
                    </div>
                    <div id="text-2" class="clearfix widget_text">
                        <div class="textwidget">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-copyright-bar">
        <em><?php echo TmxLibraryIncluder::getAdmin()->getOption('copyright-info'); ?></em>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>