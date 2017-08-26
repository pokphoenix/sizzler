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
            <div class="col-sm-7">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="ex">Name TH : </label>
                        <span class="column-view">{{$data->name_th}}</span>
                    </div>
                    <div class="form-group">
                        <label for="ex">Thumbnail TH : </label>
                        <div class="col-sm-12">
                            <a data-fancybox="gallery" href="{{ (isset($data->thumbnail_th)) ? asset('storage/upload/'.$data->thumbnail_th)  : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                          <img class="img-thumbnail img-responsive" src="{{ (isset($data->thumbnail_th)) ? asset('storage/upload/'.$data->thumbnail_th)  : asset('/img/resource/thumbnail-default.jpg') }}" width="200" height="200" alt="...">
                        </a>
                        </div>  
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="ex">Name EN : </label>
                        <span class="column-view">{{$data->name_en}}</span>
                    </div>
                    <div class="form-group">
                        <label for="ex">Thumbnail EN : </label>
                        <div class="col-sm-12">
                            <a data-fancybox="gallery" href="{{ (isset($data->thumbnail_en)) ? asset('storage/upload/'.$data->thumbnail_en)  : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
                          <img class="img-thumbnail img-responsive" src="{{ (isset($data->thumbnail_en)) ? asset('storage/upload/'.$data->thumbnail_en)  : asset('/img/resource/thumbnail-default.jpg') }}" width="200" height="200" alt="...">
                        </a>
                        </div>  
                    </div>
                </div>
                
            </div>
            <div class="col-sm-5">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Status')
                    @slot('panelBody')


                    <div class="form-group input-group">
                        <span class="input-group-addon {{ $data->position!=0 ? 'btn-info active':'' }} " title="status" ><i class="fa fa-{{ $data->status==1 ? 'eye':'eye-slash' }} "></i></span>
                        <input type="text" class=" form-control" placeholder="{{ isset($data->status) ? 'Online' : 'Close'  }}" readonly="">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon {{ $data->position!=0 ? 'btn-info active':'' }} btn-info active" title="position"><i class="fa fa-{{ $data->position!=0 ? 'check':'close' }} "></i></span>
                        <input type="text" class=" form-control" placeholder="{{ isset($data->position) ? 'Show' : 'Hide'  }}" readonly="">
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
            <div class="col-sm-6">
                <a href="{{ asset($route) }}" class="btn btn-danger">Back</a>
            </div>
        </div>   
   
</div>

	
  
@endsection







