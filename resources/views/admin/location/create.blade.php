@extends('layouts.main')

@section('page_heading',$title)

@section('section')
	@component('layouts.widgets.submitForm', ['id'=>'createForm','method'=> isset($edit) ? 'PUT' : 'POST' ,'action'=> isset($data->id) ? asset($route.'/'.$data->id) : asset($route),'backUrl'=>asset($route),'errors'=> isset($errors) ? $errors : '', 'editStatus'=>isset($data->status) ? $data->status : 1  ] )
        @slot('panelTitle', 'Regular Table')
            @slot('panelHeadBody')
            <div class="form-group">
                <label for="ex">ละติจูด</label>
                <input id="lat" name="lat" placeholder="ละติจูด" class="form-control require-field" value="{{ isset($data->lat) ? $data->lat : '' }}">
                <p class="help-block"></p>
            </div>
             <div class="form-group">
                <label for="ex">ลองจิจูด</label>
                <input id="lng" name="lng" placeholder="ลองจิจูด" class="form-control require-field" value="{{ isset($data->lng) ? $data->lng : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="ex">เบอโทร</label>
                <input id="tel" name="tel" placeholder="เบอร์โทรศัพท์" class="form-control require-field" value="{{ isset($data->tel) ? $data->tel : '' }}">
                <p class="help-block"></p>
            </div>
            @endslot
            @slot('panelBodyTH')   
            <div class="form-group">
                <label for="ex">ชื่อ (ภาษาไทย)</label>
                <input id="name_th" name="name_th" placeholder="ชื่อภาษาไทย" class="form-control require-field" value="{{ isset($data->name_th) ? $data->name_th : '' }}">
                <p class="help-block"></p>
            </div>
             <div class="form-group">
                <label for="ex">ที่อยู่ (ภาษาไทย)</label>
                <textarea rows="5" id="address_th"  name="address_th" class="form-control require-field" placeholder="Address TH">{{ isset($data->address_th) ? $data->address_th : '' }}</textarea>
            </div>
          


            
             @endslot
            @slot('panelBodyEN')  
            <div class="form-group">
                <label for="ex">ชื่อ (ภาษาอังกฤษ)</label>
                <input id="name_en" name="name_en" placeholder="ชื่อหมวดหมูภาษาอังกฤษ" class="form-control require-field" value="{{ isset($data->name_en) ? $data->name_en : '' }}">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="ex">ที่อยู่ (ภาษาอังกฤษ)</label>
                 <textarea id="address_en" rows="5"  name="address_en" class="form-control require-field" placeholder="Address EN">{{ isset($data->address_en) ? $data->address_en : '' }}</textarea>
            </div>
            @endslot

            @slot('panelSubBody')  
                @component('admin.widgets.collapse')
                    @slot('header', 'จังหวัด')
                    @slot('id', '3')
                    @slot('collapseIn', true)
                    @slot('body')
                          
                        <div class="form-group">
                            <label for="sel">กรุณาเลือกจังหวัด</label>
                            <select id="province_id" name="province_id"  class="form-control">
                                 <option value="">กรุณาเลือกจังหวัด</option>
                                @foreach ($categorys  as $category ) 
                                    <option value="{{ $category->id }}" {{ (isset($data->province_id)&&($data->province_id ==  $category->id)) ? 'selected' : '' }}  >{{ $category->province_name_th." | ".$category->province_name_en }}</option>
                               @endforeach
                            </select>
                        </div>

                    @endslot
                @endcomponent
            @endslot

    @endcomponent

<script src="{{ asset('js/validate.js') }}"></script>
<script>
// $('textarea').val('');
  
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
                },
                province_id:{
                    required: true,
                },
                lat:{
                    required: true,
                },
                lng:{
                    required: true,
                },
                tel:{
                    required: true,
                }

            }
            
        });
    });
    </script>
@endsection







