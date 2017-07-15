@extends('layouts.main')

@section('page_heading',$title)

@section('section')
    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'url'=> isset($data->url) ? $data->url : ''   ] )
        @slot('panelTitle', 'Regular Table')
           


            @slot('panelBodyTH')  

            <div class="form-group">
                <label for="ex">Name TH</label>
                <input id="name_img_th_1" name="name_img_th_1" placeholder="ชื่อหมวดหมูภาษาไทย" class="form-control require-field" value="{{ isset($data->name_img_th_2) ? $data->name_img_th_2 : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $data->img_th_1 ) ? asset('storage/upload/'.$data->img_th_1 ) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset( $data->img_th_1 ) ? asset( 'storage/upload/'.$data->img_th_1 ) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_th_1" name="img_th_1" class="form-control" >
                    <input type="hidden" id="hid_img_th_1" name="hid_img_th_1" value="{{ isset( $data->img_th_1 ) ? $data->img_th_1 : '' }}" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>
            <div class="form-group">
                <label for="ex">Name TH</label>
                <input id="name_img_th_2" name="name_img_th_2" placeholder="ชื่อหมวดหมูภาษาไทย" class="form-control require-field" value="{{ isset($data->name_img_th_2) ? $data->name_img_th_2 : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $data->img_th_2 ) ? asset('storage/upload/'.$data->img_th_2 ) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset( $data->img_th_2 ) ? asset( 'storage/upload/'.$data->img_th_2 ) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_th_2" name="img_th_2" class="form-control" >
                    <input type="hidden" id="hid_img_th_2" name="hid_img_th_2" value="{{ isset( $data->img_th_2 ) ? $data->img_th_2 : '' }}" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  
           

             @endslot
            @slot('panelBodyEN')  
           
            <div class="form-group">
                <label for="ex">Name EN</label>
                <input id="name_img_en_1" name="name_img_en_1" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->name_img_en_1) ? $data->name_img_en_1 : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $data->img_en_1 ) ? asset('storage/upload/'.$data->img_en_1 ) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset( $data->img_en_1 ) ? asset( 'storage/upload/'.$data->img_en_1 ) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_en_1" name="img_en_1" class="form-control" >
                    <input type="hidden" id="hid_img_en_1" name="hid_img_en_1" value="{{ isset( $data->img_en_1 ) ? $data->img_en_1 : '' }}" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div> 
            <div class="form-group">
                <label for="ex">Name EN</label>
                <input id="name_img_en_2" name="name_img_en_2" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->name_img_en_2) ? $data->name_img_en_2 : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $data->img_en_2 ) ? asset('storage/upload/'.$data->img_en_2) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset( $data->img_en_2 ) ? asset( 'storage/upload/'.$data->img_en_2 ) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_en_2" name="img_en_2" class="form-control" >
                    <input type="hidden" id="hid_img_en_2" name="hid_img_en_2" value="{{ isset( $data->img_en_2 ) ? $data->img_en_2 : '' }}" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div> 
            @endslot

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
    $(function() {
        $.validator.setDefaults({
            ignore: []
        });
    });
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                name_th: {
                    required: true,
                    minlength: 2,
                    maxlength: 200
                },
                name_en: {
                    required: true,
                    minlength: 2,
                    maxlength: 200
                }
            },
            // messages: {
            //     name_th: {
            //         required: "Please enter a Name TH",
            //         minlength: "Your Name TH must consist of at least 2 characters",
            //         maxlength: "Your Name TH must consist of at least 200 characters"
            //     },
            //     name_en: {
            //         required: "Please enter a Name EN",
            //         minlength: "Your Name EN must consist of at least 2 characters",
            //         maxlength: "Your Name EN must consist of at least 200 characters"
            //     }
            // },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (validator.errorList[0].element.id=='name_th'){
                    $('.layout-en').hide();
                    $('.layout-th').show().focus();
                    $('.btn-th').click();
                }else if (validator.errorList[0].element.id=='name_en'){
                    $('.layout-th').hide();
                    $('.layout-en').show().focus();
                    $('.btn-en').click();
                }
                if (errors) {
                    validator.errorList[0].element.focus(); //Set Focus
                    return false;
                }
            },
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
                   
            // }
        });
    });
    </script>
@endsection







