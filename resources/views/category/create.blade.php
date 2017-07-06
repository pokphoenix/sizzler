@extends('layouts.main')

@section('page_heading',$title)

@section('section')
	@component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset('category/'.$data->id) : asset('category'),'backUrl'=>asset('category'),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'editPosition'=> isset($data->position) ? 1 : 0    ] )
        @slot('panelTitle', 'Regular Table')
            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">Name TH</label>
                <input id="name_th" name="name_th" placeholder="ชื่อหมวดหมูภาษาไทย" class="form-control require-field" value="{{ isset($data->name_th) ? $data->name_th : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset($data->thumbnail_th) ? asset('storage/upload/'.$data->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($data->thumbnail_th) ? asset('storage/upload/'.$data->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="thumbnail_th" name="thumbnail_th" class="form-control" >
                    <input type="hidden" id="hid_thumbnail_th" name="hid_thumbnail_th" value="{{isset($data->thumbnail_th) ? $data->thumbnail_th : ''}} " >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  
             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">Name EN</label>
                <input id="name_en" name="name_en" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->name_en) ? $data->name_en : '' }}">
                <p class="help-block"></p>
            </div>
           
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset($data->thumbnail_en) ? asset('storage/upload/'.$data->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($data->thumbnail_en) ? asset('storage/upload/'.$data->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="thumbnail_en" name="thumbnail_en" class="form-control" >
                    <input type="hidden" id="hid_thumbnail_en" name="hid_thumbnail_en" value="{{ isset($data->thumbnail_en) ? $data->thumbnail_en : '' }}" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  
            @endslot
    @endcomponent

    <script type="text/javascript">
    var css_form_default = {"border-width":"1px","border-style":"solid","border-color":"#CACACA" } ;
    var css_form_error = {"border-width":"2px","border-style":"solid","border-color":"#D9534F" } ;
   $('body').on('change', 'input[type=file]', function(e) {
        var files = e.originalEvent.target.files;
        var displayImage = $(this).closest('.media').find('.displayImage') ;
        var showImage = $(this).closest('.media').find('.showImage') ;
        if(files){
            var reader = new FileReader();
            
            // reader.onload = (function(theFile){
            //     var fileName = theFile.name;
            //     return function(e){
            //         console.log(ele);
            //         $(ele).attr('src', e.target.result);
            //     };
            // })(files[0]);   
            // reader.readAsText(files[0]);

            reader.onload = function (e) {
                console.log(e);
                 $(displayImage).attr('src', e.target.result);
                 $(showImage).attr('href', e.target.result);
            }

            reader.readAsDataURL(files[0]);

            // $(this).closest('.media').find('.displayImage').attr('src', files[0].name);
            // $(this).closest('.media').find('.showImage').attr('href', files[0]);

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
    </script>
  
@endsection







