@extends('layouts.main')

@section('page_heading',$title)

@section('section')
	@component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1  ] )
        @slot('panelTitle', 'Regular Table')
            @slot('panelHeadBody')
            <div class="form-group">
                <label for="ex">Latitude</label>
                <input id="lat" name="lat" placeholder="ละติจูด" class="form-control require-field" value="{{ isset($data->lat) ? $data->lat : '' }}">
                <p class="help-block"></p>
            </div>
             <div class="form-group">
                <label for="ex">Longtitude</label>
                <input id="lng" name="lng" placeholder="ลองจิจูด" class="form-control require-field" value="{{ isset($data->lng) ? $data->lng : '' }}">
                <p class="help-block"></p>
            </div>
            @endslot
            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">Name TH</label>
                <input id="name_th" name="name_th" placeholder="ชื่อภาษาไทย" class="form-control require-field" value="{{ isset($data->name_th) ? $data->name_th : '' }}">
                <p class="help-block"></p>
            </div>
             <div class="form-group">
                <label for="ex">Address TH</label>
                <textarea rows="5" id="address_th"  name="address_th" class="form-control require-field" placeholder="Address TH">{{ isset($data->address_th) ? $data->address_th : '' }}</textarea>
            </div>


            
             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">Name EN</label>
                <input id="name_en" name="name_en" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->name_en) ? $data->name_en : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="ex">Address EN</label>
                 <textarea id="address_en" rows="5"  name="address_en" class="form-control require-field" placeholder="Address EN">{{ isset($data->address_en) ? $data->address_en : '' }}</textarea>
            </div>
            @endslot

           

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
// $('textarea').val('');
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
                address_th:{
                    required: true,
                },
                address_en:{
                    required: true,
                }
            },
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







