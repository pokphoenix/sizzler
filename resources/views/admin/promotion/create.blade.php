@extends('layouts.main')

@section('page_heading',$title)

@section('section')
	@component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'editPosition'=> isset($data->position) ? $data->position : 0    ] )
        @slot('panelTitle', 'Regular Table')
            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">ชื่อรูป (ภาษาไทย)</label>
                <input id="name_th" name="name_th" placeholder="ชื่อรูปภาษาไทย" class="form-control require-field" value="{{ isset($data->name_th) ? $data->name_th : '' }}">
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
                    <h5>รูป thumbnail</h5>
                    <input type="file" id="thumbnail_th" name="thumbnail_th" class="form-control require-field" >
                     <input type="hidden" id="hid_thumbnail_th" name="hid_thumbnail_th"  value="{{ isset($data->thumbnail_th) ?  $data->thumbnail_th  : '' }}" class="form-control" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  
            <!-- <div class="form-group">
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset($data->img_th) ? asset('storage/upload/'.$data->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($data->img_th) ? asset('storage/upload/'.$data->img_th) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5>รูป เนื้อหา</h5>
                    <input type="file" id="img_th" name="img_th" class="form-control" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>   -->
             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">ชื่อรูป (ภาษาอังกฤษ)</label>
                <input id="name_en" name="name_en" placeholder="ชื่อรูป (ภาษาอังกฤษ)" class="form-control require-field" value="{{ isset($data->name_en) ? $data->name_en : '' }}">
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
                   <h5>รูป thumbnail</h5>
                    <input type="file" id="thumbnail_en" name="thumbnail_en" class="require-field form-control" >
                     <input type="hidden" id="hid_thumbnail_en" name="hid_thumbnail_en"  value="{{ isset($data->thumbnail_en) ?  $data->thumbnail_en  : '' }}" class="form-control" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  
            <!-- <div class="form-group">
              
                <div class="media">
                  <div class="media-left">
                    <a class="showImage" data-fancybox="gallery" href="{{ isset($data->img_en) ? asset('storage/upload/'.$data->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                      <img class="media-object displayImage"  src="{{ isset($data->img_en) ? asset('storage/upload/'.$data->img_en) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                     <h5>รูป เนื้อหา</h5>
                    <input type="file" id="img_en" name="img_en" class="form-control" >
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  --> 
            @endslot

          

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
 
  
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                thumbnail_th : { hasOneElement : ['thumbnail_th','hid_thumbnail_th'] },
                thumbnail_en : { hasOneElement : ['thumbnail_en','hid_thumbnail_en'] },
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







