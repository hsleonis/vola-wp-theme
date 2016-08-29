(function() {
    'use strict';
    tinymce.PluginManager.add('tmx_vola_box_image', function( editor, url ) {
        editor.addButton( 'tmx_vola_box_image', {
            title: 'Image Box',
            icon: 'icon dashicons-format-image',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Image Box',
                    width: 520,
                    height: 225,
                    body: [{
                        type: 'textbox',
                        name: 'src',
                        label: 'Source',
                        placeholder: 'Image URL'
                    },
                    {
                        type: 'textbox',
                        name: 'alt',
                        label: 'Alt title',
                        placeholder: 'Alt title'
                    },
                    {
                        type: 'textbox',
                        name: 'link',
                        label: 'URL',
                        placeholder: 'Goes to this URL when clicked',
                        value: '#'
                    },
                    {
                        type: 'textbox',
                        name: 'target',
                        label: 'Target',
                        placeholder: 'Opens link in this window/new tab/popup'
                    },
                    {
                        type: 'textbox',
                        name: 'border',
                        label: 'Border',
                    }],
                    onsubmit: function( e ) {
                        editor.insertContent( '[image_box title="' + e.data.title + '" desc="' + addslashes(e.data.desc) + '" style="' + addslashes(e.data.style) + '"]');
                    }
                });
                console.log(top.tinymce.activeEditor.windowManager.getParams());
            }
        });
    });
})(jQuery);