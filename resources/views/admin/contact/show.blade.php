@extends('layouts.main')

@section('page_heading',$title)

@section('section')

<style type="text/css">
    .column-view {
        padding:0 10px; border-bottom: 1px dotted #000;
    }
</style>

<div class="col-sm-12">
        <div class="row">
            <div class="col-sm-10 form-horizontal ">
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" >ชื่อ สกุล :</label>
                    <div class="col-sm-9 form-control-static">
                       <span class="column-view">{{$data->name}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" >เบอร์โทรศัพท์ :</label>
                    <div class="col-sm-9 form-control-static">
                       <span class="column-view">{{$data->tel}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" >อีเมล์ :</label>
                    <div class="col-sm-9 form-control-static">
                       <span class="column-view">{{$data->email}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" >ข้อความ :</label>
                    <div class="col-sm-9 form-control-static">
                       <span class="column-view">{{$data->text}}</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Status')
                    @slot('panelBody')


                    <div class="form-group input-group">
                        <span class="input-group-addon {{ $data->position!=0 ? 'btn-info active':'' }} " title="status" ><i class="fa fa-{{ $data->status==1 ? 'eye':'eye-slash' }} "></i></span>
                        <input type="text" class=" form-control" placeholder="{{ ($data->status==1) ? 'Seen' : 'Unseen'  }}" readonly="">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon  active" title="created at"><i class="fa fa-calendar-o"></i></span>
                        <input type="text" class=" form-control" placeholder="{{ $data->created_at }}" readonly="">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon active" title="updated  at"><i class="fa fa-calendar-check-o"></i> </span>
                        <input type="text" class=" form-control" placeholder="{{ $data->updated_at }}" readonly="">
                    </div>

                    
                    @endslot
                @endcomponent
            </div>
        </div>  

        <div class="row">
            <div class="col-sm-6" >
                <div class="col-sm-2"><a href="{{ asset($route) }}" class="btn btn-danger">Back</a></div>
                 @if($data->status==0)
                <div class="col-sm-2">
                     <form class="form-group" method="post" action="{{ asset($route.'/public/'.$data->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="status" value="{{ $data->status }}" >
                    <button type="button"
                   
                    onclick="if (confirm('คุณต้องการตั้งว่า ติดต่อแล้ว ใช่หรือไม่?')) { $(this).closest('form').submit(); }" 
                   
                     class="btn btn-success">
                        Seen
                    </button>
                </form> 
                </div>
                 @endif
               
            </div>
        </div>   
   
</div>

	
  
@endsection







