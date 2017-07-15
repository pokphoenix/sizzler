@extends('layouts.main')

@section('page_heading',$title)

@section('section')
    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($edit)&&isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : ''   ] )
        @slot('panelTitle', 'Regular Table')
           
            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">ชื่อ หมวดหมู่ (ไทย)</label>
                <input id="name_th" name="name_th" placeholder="ชื่อ หมวดหมู่ (ไทย)" class="form-control require-field" value="{{ isset($data->name_th) ? $data->name_th : '' }}">
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
            
            @for ($i = 0; $i < $cntImg ; $i++)
            <div class="form-group">
                <label for="ex">ชื่อรูป {{$i+1}} (ไทย)</label>
                <input id="name_img_th_{{$i+1}}" name="name_img_th_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (ไทย)" class="form-control require-field" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_th : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $subdata[$i]) ? asset('storage/upload/'. $subdata[$i]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($subdata[$i]) ? asset('storage/upload/'.$subdata[$i]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_th_{{$i+1}}" name="img_th_{{$i+1}}" class="form-control" >
                    <input type="hidden" id="hid_img_th_{{$i+1}}" name="hid_img_th_{{$i+1}}" value="{{ isset($subdata[$i]) ? $subdata[$i]->img_th : ''}} " >
                  </div>
                </div>
                
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  

            @endfor

              
             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">ชื่อ หมวดหมู่ (อังกฤษ)</label>
                <input id="name_en" name="name_en" placeholder="ชื่อ หมวดหมู่ (อังกฤษ)" class="form-control require-field" value="{{ isset($data->name_en) ? $data->name_en : '' }}">
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
                    <input type="hidden" id="hid_thumbnail_en" name="hid_thumbnail_en" value="{{isset($data->thumbnail_en) ? $data->thumbnail_en : ''}} " >
                  </div>
                </div>
                
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div> 
            @for ($i = 0; $i < $cntImg ; $i++)
            <div class="form-group">
                <label for="ex">ชื่อรูป {{$i+1}} (อังกฤษ)</label>
                <input id="name_img_en_{{$i+1}}" name="name_img_en_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (อังกฤษ)" class="form-control require-field" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_en : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group" >
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset( $subdata[$i]) ? asset('storage/upload/'. $subdata[$i]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($subdata[$i]) ? asset('storage/upload/'.$subdata[$i]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <input type="file" id="img_en_{{$i+1}}" name="img_en_{{$i+1}}" class="form-control" >
                    <input type="hidden" id="hid_img_en_{{$i+1}}" name="hid_img_en_{{$i+1}}" value="{{ isset($subdata[$i]) ? $subdata[$i]->img_en : ''}} " >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  

            @endfor
            @endslot
            
            @slot('panelSubBody')

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







