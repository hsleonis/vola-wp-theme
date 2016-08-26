'use strict';

(function() {
    tinymce.PluginManager.add('tmx_vola_box', function( editor, url ) {
        editor.addButton( 'tmx_vola_box', {
            title: 'My test button',
            icon: 'wp_code',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Insert header tag',
                    body: [{
                        type: 'textbox',
                        name: 'title',
                        label: 'Your title'
                    },
                        {
                            type: 'textbox',
                            name: 'id',
                            label: 'Header anchor'
                        },
                        {
                            type: 'listbox',
                            name: 'level',
                            label: 'Header level',
                            'values': [
                                {text: '&lt;h3&gt;', value: '3'},
                                {text: '&lt;h4&gt;', value: '4'},
                                {text: '&lt;h5&gt;', value: '5'},
                                {text: '&lt;h6&gt;', value: '6'}
                            ]
                        }],
                    onsubmit: function( e ) {
                        editor.insertContent( '&lt;h' + e.data.level + ' id="' + e.data.id + '"&gt;' + e.data.title + '&lt;/h' + e.data.level + '&gt;');
                    }
                });
            }
        });
    });
})(jQuery);