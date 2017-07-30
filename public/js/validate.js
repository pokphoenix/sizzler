var css_form_default = {"border-width":"1px","border-style":"solid","border-color":"#ccd0d2" } ;
var css_form_error = {"border-width":"2px","border-style":"solid","border-color":"#bf5329" } ;
$('body').on('change', 'input[type=file]', function(e) {
    $(this).valid();   
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
        if (iSize > 2048){
            $(this).val('').css(css_form_error).after('<span class="error-keyup">รูปภาพห้ามมีความจุเกิน 2 MB</span>').focus();return false;
        }
        var validExtensions = ['image/jpeg','image/png']; 
        if ($.inArray(fileType, validExtensions) == -1){
            $(this).val('').css(css_form_error).after('<span class="error-keyup">กรุณาอัพโหลดไฟล์ JPEG หรือ PNG เท่านั้น</span>').focus();return false;
        }
    }
}); 

$(function() {
    $.validator.setDefaults({
        ignore: [],
        errorClass: "validate_error",
        errorElement: "div",
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            th = validator.errorList[0].element.id.search("th");
            en = validator.errorList[0].element.id.search("en")
            // console.log(th,en);
            if (th>0){
                $('.layout-en').hide();
                $('.layout-th').show().focus();
                $('.btn-th').click();
            }else if (en>0){
                $('.layout-th').hide();
                $('.layout-en').show().focus();
                $('.btn-en').click();
            }
            if (errors) {
                validator.errorList[0].element.focus(); //Set Focus
                return false;
            }
        }
        // errorPlacement: function(error, element) {
            //     if (element.context.id=='name_th'){
            //         $('.layout-en').hide();
            //         $('.layout-th').show().focus();
            //         $('.btn-th').click();
            //     }else{
            //         $('.layout-th').hide();
            //         $('.layout-en').show().focus();
            //         $('.btn-en').click();
            //     }
            //     // if ( element.is(":radio") )
            //     //     error.appendTo( element.parent().next().next() );
            //     // else if ( element.is(":checkbox") )
            //     //     error.appendTo ( element.next() );
            //     // else
            //     // error.appendTo( element.parent().next() );
        //  , submitHandler: function(form) {
        //         return false;
        //     // some other code
        //     // maybe disabling submit button
        //     // then:
        //     $(form).submit();
        // }
    });
    $.validator.addMethod("hasOneElement", function(value, element,params) {

        var field_1 = $('input[name="' + params[0] + '"]').val(),
            field_2 = $('input[name="' + params[1] + '"]').val();
        if((field_1==''||field_1==' ') && (field_2==''||field_2==' ')){
            result = false;
        }else{
            result = true;
        }
        // console.log(field_1,field_2);
        return result ;
    }, "this field is require");
});