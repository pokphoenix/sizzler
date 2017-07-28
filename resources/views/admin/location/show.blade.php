@extends('layouts.main')

@section('page_heading',$title)

@section('section')
<style>
      #map {
        height: 400px;
        width: 100%;
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
                        <label for="ex">Address TH : </label>
                        <div class="col-sm-12">
                            <address>
                                {{$data->address_th}}
                            </address>
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="ex">Tel: </label>
                        <span class="column-view">{{$data->tel}}</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="ex">Name EN : </label>
                        <span class="column-view">{{$data->name_en}}</span>
                    </div>
                    <div class="form-group">
                        <label for="ex">Address EN : </label>
                        <div class="col-sm-12">
                            <address>
                                {{$data->address_en}}
                            </address>
                        </div>  
                    </div>
                     <div class="form-group">
                        <label for="ex">Tel: </label>
                        <span class="column-view">{{$data->tel}}</span>
                    </div>
                </div>

                <div class="col-sm-12" >
                      <div id="map"></div>
                </div>
            </div>
            <div class="col-sm-5">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Status')
                    @slot('panelBody')
                    <div class="form-group input-group">
                        <span class="input-group-addon {{ $data->status!=0 ? 'btn-info active':'' }} " title="status" ><i class="fa fa-{{ $data->status==1 ? 'eye':'eye-slash' }} "></i></span>
                        <input type="text" class=" form-control" placeholder="{{ isset($data->status) ? 'Online' : 'Close'  }}" readonly="">
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
      
        <div class="row" style="margin-top:10px;">
            <div class="col-sm-6">
                <a href="{{ asset($route) }}" class="btn btn-danger">Back</a>
            </div>
        </div>   
   
</div>
<script>
     var image = ' {{ asset("img/global/logo-sizzler-map.png")  }} ';
      function initMap() {
        var lat = {{ $data->lat }};
        var lng = {{ $data->lng }}  ;
        var uluru = {lat: lat, lng: lng};
        var map = new google.maps.Map(document.getElementById('map'), {
      
          center: uluru ,
          scrollwheel: true,
          zoom: 15
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon : image
        });
      }
</script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX-fHOj-p7pOpLUJgPsdVf3HwTlp-gR1k&callback=initMap"></script>  
@endsection







