@extends('layouts.main')

@section('page_heading',$title)

@section('section')
    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'url'=> isset($data->url) ? $data->url : ''   ] )
        @slot('panelTitle', 'Regular Table')
           


            @slot('panelBodyTH')  

            <div class="form-group">
                <label for="ex">ชื่อรูปซ้าย (ภาษาไทย)</label>
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
                     <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/p_02.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/p_02.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>
            <div class="form-group">
                <label for="ex">ชื่อรูปขวา (ภาษาไทย)</label>
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
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/p_03.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/p_03.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  
           

             @endslot
            @slot('panelBodyEN')  
           
            <div class="form-group">
                <label for="ex">ชื่อรูปซ้าย (ภาษาอังกฤษ)</label>
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
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/p_02.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/p_02.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div> 
            <div class="form-group">
                <label for="ex">ชื่อรูปขวา (ภาษาอังกฤษ)</label>
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
                     <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/p_03.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/p_03.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div> 
            @endslot
             @slot('panelBodyMain')
            <div class="form-group">
                <label for="ex">ส่วนแสดงผล <h6>(คลิกเพื่อดูขนาดใหญ่)</h6></label>
                <a class="showImage" data-fancybox="gallery" href="{{ asset('/img/backend/p_01.jpg') }}" target="_blank">
                    <img class="img-responsive" src="{{ asset('/img/backend/p_01.jpg') }}" >
                </a>
                
            </div>
            @endslot
    @endcomponent
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script>
  
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                url : {
                  required: true
                },
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







