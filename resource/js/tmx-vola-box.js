'use strict';

(function() {
    tinymce.PluginManager.add('tmx_vola_box', function( editor, url ) {
        editor.addButton( 'tmx_vola_box', {
            title: 'My test button',
            icon: 'wp_code',
            onclick: function() {
                editor.insertContent('Hello World!');
            }
        });
    });
})(jQuery);