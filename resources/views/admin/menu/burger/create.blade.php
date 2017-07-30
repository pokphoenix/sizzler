@extends('layouts.main')

@section('page_heading',$title)

@section('section')

    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($edit)&&isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '' ] )
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
                    <input type="file" id="thumbnail_th" name="thumbnail_th" class="form-control require-field" >
                     <input type="hidden" id="hid_thumbnail_th" name="hid_thumbnail_th"  value="{{ isset($data->thumbnail_th) ?  $data->thumbnail_th  : '' }}" class="form-control" >
                     <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[0]['w'].' x '.$resize[0]['h'] }} px)</div>
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/m_5_1.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/m_5_1.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  
            
            @for ($i = 0; $i <  $cntImg ; $i++)
            <div class="form-group">
                <label for="ex">ชื่อรูป {{$i+1}} (ไทย)</label>
                <input id="name_img_th_{{$i+1}}" name="name_img_th_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (ไทย)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_th : '' }}">
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
                    <input type="file" id="img_th_{{$i+1}}" name="img_th_{{$i+1}}" class="form-control require-field" >
                    <input type="hidden" id="hid_img_th_{{$i+1}}" name="hid_img_th_{{$i+1}}"  value="{{ isset($subdata[$i]->img_th) ?  $subdata[$i]->img_th  : '' }}" class="form-control" >
                    <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[$i+1]['w'].' x '.$resize[$i+1]['h'] }} px)</div>
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/m_5_'.($i+1).'.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/m_5_'.($i+1).'.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
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
                    <input type="file" id="thumbnail_en" name="thumbnail_en" class="form-control require-field" >
                    <input type="hidden" id="hid_thumbnail_en" name="hid_thumbnail_en"  value="{{ isset($data->thumbnail_en) ?  $data->thumbnail_en  : '' }}" class="form-control" >
                    <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[0]['w'].' x '.$resize[0]['h'] }} px)</div>
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/m_5_1.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/m_5_1.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div> 
            @for ($i = 0; $i < $cntImg ; $i++)
            <div class="form-group">
                <label for="ex">ชื่อรูป {{$i+1}} (อังกฤษ)</label>
                <input id="name_img_en_{{$i+1}}" name="name_img_en_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (อังกฤษ)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_en : '' }}">
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
                    <input type="file" id="img_en_{{$i+1}}" name="img_en_{{$i+1}}" class="form-control require-field" >
                    <input type="hidden" id="hid_img_en_{{$i+1}}" name="hid_img_en_{{$i+1}}"  value="{{ isset($subdata[$i]->img_en) ?  $subdata[$i]->img_en  : '' }}" class="form-control " >
                    <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[$i+1]['w'].' x '.$resize[$i+1]['h'] }} px)</div>
                    <br>
                     <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset('/img/backend/m_5_'.($i+1).'.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/m_5_'.($i+1).'.jpg') }}" target="_blank" >
                        <i class="fa fa-info-circle"></i>
                    </a>
                  </div>
                </div>
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
            </div>  

            @endfor
            @endslot
            
            @slot('panelSubBody')

            @endslot

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
  
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                @for ($i = 0; $i < $cntImg ; $i++)
                img_th_{{$i+1}} : { hasOneElement : ['img_th_{{$i+1}}','hid_img_th_{{$i+1}}'] },
                img_en_{{$i+1}} : { hasOneElement : ['img_en_{{$i+1}}','hid_img_en_{{$i+1}}'] },
                @endfor

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







