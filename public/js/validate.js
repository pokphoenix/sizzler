var css_form_default = {"border-width":"1px","border-style":"solid","border-color":"#ccd0d2" } ;
var css_form_error = {"border-width":"2px","border-style":"solid","border-color":"#bf5329" } ;
$('body').on('change', 'input[type=file]', function(e) {
    $(this).css(css_form_default).closest('.media-body').find('span').remove();
    var files = e.originalEvent.target.files;
    var displayImage = $(this).closest('.media').find('.displayImage') ;
    var showImage = $(this).closest('.media').find('.showImage') ;
    if(files){
        var reader = new FileReader();
        reader.onload = function (e) {
             $(displayImage).attr('src', e.target.result);
             $(showImage).attr('href', e.target.result);
        }
        reader.readAsDataURL(files[0]);
        var fileName = files[0].name,
            fileSize = files[0].size,
            fileType = files[0].type;
            iSize = fileSize / 1024 ;
            iSize = (Math.round(iSize * 100) / 100) ; //--- convert to KB   
        if (iSize > 1024){
            $(this).val('').css(css_form_error).after('<span class="error-keyup">รูปภาพห้ามมีความจุเกิน 1 MB</span>').focus();return false;
        }
        var validExtensions = ['image/jpeg','image/png']; 
        if ($.inArray(fileType, validExtensions) == -1){
            $(this).val('').css(css_form_error).after('<span class="error-keyup">กรุณาอัพโหลดไฟล์ JPEG หรือ PNG เท่านั้น</span>').focus();return false;
        }
    }
}); 

