
$(function() {
	$('[data-toggle="tooltip"]').tooltip({
		animated: 'fade',
		html: true ,

    }); 
	$("#search").on('keyup',function(e){
		var url = $(this).data("href")+"?search="+$(this).val() ;
		console.log('url',$(this).data("href"),url);
		$("a#search_btn").attr('href',url);
	})
});
