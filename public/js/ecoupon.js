// Init Barcode JS
JsBarcode(".barcode").init();

// var clipboard = new Clipboard('.phoinikas--button-copy_url');

// clipboard.on('success', function(e) {
//     console.info('Action:', e.action);
//     console.info('Text:', e.text);
//     console.info('Trigger:', e.trigger);

//     e.clearSelection();
// });

jQuery(document).ready(function($) {
	$('.phoinikas--share').on('focus', function() {
		$('.phoinikas--button-copy_url').click();
	})
});
