@extends('layouts.main')

@section('page_heading',$title)

@section('section')


    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($edit)&&isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1  ] )
        @slot('panelTitle', 'Regular Table')
           
            @slot('panelBodyTH')   

                @component('admin.widgets.collapse')
                    @slot('header', 'รายละเอียดเมนู')
                    @slot('class', 'primary')
                    @slot('id', '1')
                    @slot('collapseIn', true)
                    @slot('body')

                        <div class="form-group">
                            <label for="ex">ชื่อ (ไทย)</label>
                            <input id="title_th" name="title_th" placeholder="ชื่อ (ไทย)" class="form-control require-field" value="{{ isset($data->title_th) ? $data->title_th : old('title_th') }}">
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label for="ex">ชื่อ รูปภาพตัวอย่าง (ไทย)</label>
                            <input id="img_name_th" name="img_name_th" placeholder="ชื่อ รูปภาพตัวอย่าง (ไทย)" class="form-control require-field" value="{{ isset($data->img_name_th) ? $data->img_name_th : old('img_name_th') }}">
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
                                <input type="file" id="thumbnail_th" name="thumbnail_th" class="form-control require-field" value={{ old('thumbnail_th') }} >
                                 <input type="hidden" id="hid_thumbnail_th" name="hid_thumbnail_th"  value="{{ isset($data->thumbnail_th) ?  $data->thumbnail_th  : old('hid_thumbnail_th') }}" class="form-control" >
                                <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[0]['w'].' x '.$resize[0]['h'] }} px)</div>
                                <br>
                                 <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset($navigateImg[0]) }}'  />"  data-fancybox="gallery" href="{{ asset($navigateImg[0]) }}" target="_blank" >
                                    <i class="fa fa-info-circle"></i>
                                </a>
                              </div>
                            </div>
                            
                            <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
                        </div> 
                    @endslot
                @endcomponent
               
                @for ($i = 0; $i <  $cntImg ; $i++)
                    @component('admin.widgets.collapse')
                        @slot('header', "เมนูอาหาร #".($i+1) )
                        @slot('id', '1'.$i)
                        @slot('class', 'warning')
                        @slot('collapseIn', true)
                        @slot('body')
                            <div class="form-group">
                                <div class="col-sm-7">
                                    <label for="ex">ชื่อเมนู {{$i+1}} (ไทย)</label>
                                    <input id="title_menu_th_{{$i+1}}" name="title_menu_th_{{$i+1}}" placeholder="ชื่อเมนู {{$i+1}} (ไทย)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->title_th : '' }}">
                                    

                                    <div class="media">
                                      <div class="media-left media-middle">
                                        <a class="showImage" data-fancybox="gallery" href="{{ isset( $subdata[$i]) ? asset('storage/upload/'. $subdata[$i]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                                          <img class="media-object displayImage"  src="{{ isset($subdata[$i]) ? asset('storage/upload/'.$subdata[$i]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        
                                        <input type="file" id="img_th_{{$i+1}}" name="img_th_{{$i+1}}" class="form-control require-field" >
                                        <input type="hidden" id="hid_img_th_{{$i+1}}" name="hid_img_th_{{$i+1}}"  value="{{ isset($subdata[$i]) ?  $subdata[$i]->img_th  : '' }}" class="form-control" >
                                        <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[$i+1]['w'].' x '.$resize[$i+1]['h'] }} px)</div>
                                        <br>
                                         <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset($navigateImg[$i+1]) }}'  />"  data-fancybox="gallery" href="{{ asset($navigateImg[$i+1]) }}" target="_blank" >
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                      </div>
                                    </div>
                                    
                                    <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
                                </div>
                                <div class="col-sm-5">
                                    <label for="ex">ชื่อรูป {{$i+1}} (ไทย)</label>
                                    <input id="name_img_th_{{$i+1}}" name="name_img_th_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (ไทย)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_th : '' }}">
                                    <label for="ex">ราคา {{$i+1}} (ไทย)</label>
                                    <input id="price_th_{{$i+1}}" name="price_th_{{$i+1}}" placeholder="ราคา {{$i+1}} (ไทย)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->price_th : '' }}">
                                </div>
                               
                            </div>
                        @endslot
                    @endcomponent
                @endfor
            @endslot
            @slot('panelBodyEN')  
                 @component('admin.widgets.collapse')
                    @slot('header', 'รายละเอียดเมนู')
                    @slot('class', 'primary')
                    @slot('id', '1')
                    @slot('collapseIn', true)
                    @slot('body')

                        <div class="form-group">
                            <label for="ex">ชื่อ เมนู (อังกฤษ)</label>
                            <input id="title_en" name="title_en" placeholder="ชื่อ เมนู (อังกฤษ)" class="form-control require-field" value="{{ isset($data->title_en) ? $data->title_en : old('title_en') }}">
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label for="ex">ชื่อ รูปภาพตัวอย่าง (อังกฤษ)</label>
                            <input id="img_name_en" name="img_name_en" placeholder="ชื่อ รูปภาพตัวอย่าง (อังกฤษ)" class="form-control require-field" value="{{ isset($data->img_name_en) ? $data->img_name_en : old('img_name_en') }}">
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
                                <input type="file" id="thumbnail_en" name="thumbnail_en" class="form-control require-field" value={{ old('thumbnail_en') }} >
                                 <input type="hidden" id="hid_enumbnail_en" name="hid_enumbnail_en"  value="{{ isset($data->thumbnail_en) ?  $data->thumbnail_en  : old('hid_enumbnail_en') }}" class="form-control" >
                                <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[0]['w'].' x '.$resize[0]['h'] }} px)</div>
                                <br>
                                 <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset($navigateImg[0]) }}'  />"  data-fancybox="gallery" href="{{ asset($navigateImg[0]) }}" target="_blank" >
                                    <i class="fa fa-info-circle"></i>
                                </a>
                              </div>
                            </div>
                            
                            <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
                        </div> 
                    @endslot
                @endcomponent
                @for ($i = 0; $i <  $cntImg ; $i++)
                    @component('admin.widgets.collapse')
                        @slot('header', "เมนูอาหาร #".($i+1) )
                        @slot('id', '1'.$i)
                        @slot('class', 'warning')
                        @slot('collapseIn', true)
                        @slot('body')
                             <div class="form-group">
                                <div class="col-sm-7">
                                    <label for="ex">ชื่อเมนู {{$i+1}} (อังกฤษ)</label>
                                    <input id="title_menu_en_{{$i+1}}" name="title_menu_en_{{$i+1}}" placeholder="ชื่อเมนู {{$i+1}} (อังกฤษ)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->title_en : '' }}">
                                    

                                    <div class="media">
                                      <div class="media-left media-middle">
                                        <a class="showImage" data-fancybox="gallery" href="{{ isset( $subdata[$i]) ? asset('storage/upload/'. $subdata[$i]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                                          <img class="media-object displayImage"  src="{{ isset($subdata[$i]) ? asset('storage/upload/'.$subdata[$i]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        
                                        <input type="file" id="img_en_{{$i+1}}" name="img_en_{{$i+1}}" class="form-control require-field" >
                                        <input type="hidden" id="hid_img_en_{{$i+1}}" name="hid_img_en_{{$i+1}}"  value="{{ isset($subdata[$i]) ?  $subdata[$i]->img_en  : '' }}" class="form-control" >
                                        <div class="span-field fl">(ขนาดที่เหมาะสม {{ $resize[$i+1]['w'].' x '.$resize[$i+1]['h'] }} px)</div>
                                        <br>
                                         <a data-toggle="tooltip" data-placement="right" class="btn btn-info" title="<img src='{{ asset($navigateImg[$i+1]) }}'  />"  data-fancybox="gallery" href="{{ asset($navigateImg[$i+1]) }}" target="_blank" >
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                      </div>
                                    </div>
                                    
                                    <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 2MB</p>
                                </div>
                                <div class="col-sm-5">
                                    <label for="ex">ชื่อรูป {{$i+1}} (อังกฤษ)</label>
                                    <input id="name_img_en_{{$i+1}}" name="name_img_en_{{$i+1}}" placeholder="ชื่อรูป {{$i+1}} (อังกฤษ)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->name_en : '' }}">
                                    <label for="ex">ราคา {{$i+1}} (อังกฤษ)</label>
                                    <input id="price_en_{{$i+1}}" name="price_en_{{$i+1}}" placeholder="ราคา {{$i+1}} (อังกฤษ)" class="form-control" value="{{ isset($subdata[$i]) ? $subdata[$i]->price_en : '' }}">
                                </div>
                               
                            </div> 
                        @endslot
                    @endcomponent
                @endfor
                 
            @endslot
            
            @slot('panelSubBody')  
                @component('admin.widgets.collapse')
                    @slot('header', 'หมวดหมู่')
                    @slot('id', '3')
                    @slot('collapseIn', true)
                    @slot('body')
                           
                        <div class="form-group">
                            <select disabled class="form-control">
                                 <option value="">กรุณาเลือกหมวดหมู่</option>
                                @foreach ($categorys  as $category ) 
                                    <option value="{{ $category->id }}" {{ ((isset($data->category_id)&&($data->category_id ==  $category->id))|| old('category_id') == $category->id||$category_id==$category->id   ) ? 'selected' : '' }}  >
                                    {{ $category->name_th . ' [ ' .$category->name_en . ' ] ' }}
                                   </option>
                               @endforeach
                            </select>
                            <input type="hidden" id="category_id" name="category_id" value="{{ (isset($data->category_id) ) ? $data->category_id : $category_id }}" >
                        </div>

                    @endslot
                @endcomponent
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
                title_menu_th_{{$i+1}} : {  minlength: 3,maxlength: 255 },
                title_menu_en_{{$i+1}} : {  minlength: 3,maxlength: 255 },
                price_th_{{$i+1}} : {  digits:true },
                price_en_{{$i+1}} : {  digits:true },
                @endfor
                thumbnail_th : { hasOneElement : ['thumbnail_th','hid_thumbnail_th'] },
                thumbnail_en : { hasOneElement : ['thumbnail_en','hid_thumbnail_en'] },
                title_th: {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                }
                ,title_en: {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                }
                ,short_desc_th: {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                }
                ,short_desc_en: {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                }  
                ,price_th: {
                    required: true,
                    digits: true
                }
                ,price_en: {
                    required: true,
                    digits: true
                }
                ,category_id: {
                    required: true,
                     digits: true
                }
            }
        });
    });
    </script>
@endsection







