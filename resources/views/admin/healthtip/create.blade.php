@extends('layouts.main')

@section('page_heading',$title)

@section('section')
    @component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1 , 'editPosition'=> isset($data->position) ? $data->position : 0    ] )
        @slot('panelTitle', 'Regular Table')
           


            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">Title TH</label>
                <input id="title_th" name="title_th" placeholder="ชื่อหมวดหมูภาษาไทย" class="form-control require-field" value="{{ isset($data->title_th) ? $data->title_th : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="ex">Short Description TH</label>
                <input id="short_description_th" name="short_description_th" placeholder="รายละเอียดย่อ ภาษาไทย" class="form-control require-field" value="{{ isset($data->short_description_th) ? $data->short_description_th : '' }}">
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
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  

            <div class="form-group">
                <label for="ex">เนื้อหา TH</label>
                <textarea id="text_th" name="text_th" placeholder="รายละเอียดย่อ ภาษาไทย" class="form-control require-field">{{ isset($data->text_th) ? $data->text_th : '' }}</textarea>
                <p class="help-block"></p>
            </div>

             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">Name EN</label>
                <input id="title_en" name="title_en" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->title_en) ? $data->title_en : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="ex">Short Description EN</label>
                <input id="short_description_en" name="short_description_en" placeholder="รายละเอียดย่อ ภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->short_description_en) ? $data->short_description_en : '' }}">
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
                <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
            </div>  
             <div class="form-group">
                <label for="ex">เนื้อหา EN</label>
                <textarea id="text_en" name="text_en" placeholder="รายละเอียดย่อ ภาษาอังกฤษ" class="form-control require-field">{{ isset($data->text_en) ? $data->text_en : '' }}</textarea>
                <p class="help-block"></p>
            </div>
            @endslot



            @slot('panelSubBody')
                @component('admin.widgets.collapse')
                    @slot('header', 'Upload Image')
                    @slot('id', '4')
                    @slot('collapseIn', true)
                    @slot('body')
                    
                    @if (isset($aside))

                        @foreach ( $aside as $a )
                        <div class="form-group">
                            <div class="media">
                              <div class="media-left">
                                 <a class="showImage" data-fancybox="gallery" href="{{ isset($a) ? asset('storage/upload/'.$a->image ) : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                                  <img class="media-object displayImage"  src="{{ isset($a) ? asset('storage/upload/'.$a->image ) : asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">

                                </a>
                              </div>

                              <div class="media-body">
                                 <button  class="del-img btn btn-danger" data-href="{{ asset('admin/healthtip/image/'.$a->id) }}"  type="button" ><i class="fa fa-minus"></i></button>
                              </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                        <div class="form-group">
                            <div class="media">
                              <div class="media-left">
                                <a class="showImage" data-fancybox="gallery" href="{{ asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                                  <img class="media-object displayImage"  src="{{ asset('/img/resource/thumbnail-default.jpg') }}"  alt="...">
                                </a>
                              </div>
                              <div class="media-body">
                                <input type="file" id="img-aside" name="img_aside[]" class="form-control" >
                              </div>
                            </div>
                            <p class="help-block">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p>
                        </div>

                        <div id="append-img"  ></div>
                        <div class="form-group">
                            <button class="btn btn-info" type="button" id="add-img-upload" > <i class="fa fa-plus"></i> </button>
                        </div>
                    @endslot
                @endcomponent
            @endslot

    @endcomponent
<script src="{{ asset('/plugin/ckeditor/ckeditor.js') }} "></script>

<script src="{{ asset('js/validate.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace( 'text_th' );
        CKEDITOR.replace( 'text_en' );

        $("#add-img-upload").on('click',function(){
            $("#append-img").append("<div class=\"form-group\"><div class=\"media\"><div class=\"media-left\"><a class=\"showImage\" data-fancybox=\"gallery\" href=\"{{ asset('/img/resource/thumbnail-default.jpg') }}\" target=\"_blank\"><img class=\"media-object displayImage\" src=\"{{ asset('/img/resource/thumbnail-default.jpg') }}\"></a></div><div class=\"media-body\"><input type=\"file\"  name=\"img_aside[]\" class=\"form-control\"><BR><button  class=\"del-append-img btn btn-danger\" type=\"button\" ><i class=\"fa fa-minus\"></i></button></div></div><p class=\"help-block\">รูปภาพเป็น jpg หรือ png และมีขนาดไม่เกิน 1MB</p></div>");
        });

        $('#append-img').on('click', '.del-append-img', function(){
            $(this).closest('.form-group').remove();
        });
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('.del-img').on('click',function(){
            var ele = $(this).closest('.form-group') ;
            $.ajax({
                method:'DELETE',
                url: $(this).data('href') ,
                data: { _token: CSRF_TOKEN }
               
            })
            .done(function(html) {
                ele.remove();
            })
            .fail(function() {
                alert('cannot delete this image');
            })
        });

     // var editor=CKEDITOR.instances.editor1.getData();
    });

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
                },
               
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







