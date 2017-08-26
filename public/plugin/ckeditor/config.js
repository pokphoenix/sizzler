/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

  config.height = 300;
    config.enterMode = CKEDITOR.ENTER_BR; // CKEDITOR.ENTER_P, CKEDITOR.ENTER_DIV


    // Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
    config.toolbar = [{
        name: 'document',
        groups: ['mode', 'document', 'doctools'],
        items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
    }, {
        name: 'clipboard',
        groups: ['clipboard', 'undo'],
        items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
    }, {
        name: 'editing',
        groups: ['find', 'selection', 'spellchecker'],
        items: ['Find', 'Replace', '-', 'SelectAll']
    }, {
        name: 'basicstyles',
        groups: ['basicstyles', 'cleanup'],
        items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']
    }, {
        name: 'links',
        items: ['Link', 'Unlink', 'Anchor']
    }, {
        name: 'paragraph',
        groups: ['list', 'indent', 'blocks', 'align', 'bidi'],
        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']
    }, {
        name: 'insert',
        items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'Iframe', 'Youtube']
    }, {
        name: 'colors',
        items: ['FontSize', 'TextColor', 'BGColor']
    }, {
        name: 'tools',
        items: ['Maximize', 'ShowBlocks']
    }];
};