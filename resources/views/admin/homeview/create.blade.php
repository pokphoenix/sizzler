@extends('layouts.main')

@section('page_heading',$title)

@section('section')
    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'editPosition'=> isset($data->position) ? $data->position : 0    ] )
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
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
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
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  
            @endslot

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
  
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
            }
            
        });
    });
    </script>
@endsection







