@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-location">
    <div class="phoinikas--wrapper phoinikas--wrapper-global">
      <div class="phoinikas--flex-row">
        <article class="phoinikas--location-map">

          <div class="phoinikas--ggmap" style="background-color: #FFFFFF;">
            <div id="map"></div>
          </div>

        </article>
  
        <aside class="phoinikas--location-aside">
            <img src="{{ asset('/img/location/img-shop.jpg') }}" alt="">
            <div class="phoinikas--branch-detail" id="branch-info">
                {{ $data['name'] }}<br><br>
                {!! $data['address'] !!}<br><br>
                {{ trans('home.tel') .' : '. $data['tel'] }}
            </div>
        </aside>

        <footer class="phoinikas--location-select">
          <div class="phoinikas--inline-row">
            <div class="phoinikas--select-custom -design-2">
              <select class="" name="province" id="province" onchange="MoveMapByProvince(this.value)">
                <option value="">{{ trans('home.province') }}</option>
              </select>
            </div>
          </div>
          <div class="phoinikas--inline-row" style="margin-top: 20px;">
            <div class="phoinikas--select-custom -design-2">
              <select class="" name="branch" id="branch" onchange="MoveMapByBranch(this.value)">
                <option value="">{{ trans('home.branch') }}</option>
              </select>
            </div>
            <button type="button" name="button" class="phoinikas--btn-design-3" onclick="MoveMapTo()">Go</button>
          </div>
        </footer>
      </div>
    </div>

  </main>

    <script>
      function decodeHtml(html) {
          var txt = document.createElement("textarea");
          txt.innerHTML = html;
          return txt.value;
      }
      var map;
      var image = '{{ asset("/img/global/logo-sizzler-map.png") }}';

      var json = decodeHtml('{{ $json }}') ;
      var locations = $.parseJSON(json);

      function initMap() {
        // Create a map object and specify the DOM element for display.
        map = new google.maps.Map(document.getElementById('map'), {
          // center: {lat: parseFloat(locations[0]['lat']) , lng: parseFloat(locations[0]['lng']) },
          center: {lat: 13.7444683 , lng: 100.5277199 },
          scrollwheel: true,
          zoom: 12
        });

        // Create a marker and set its position.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: {lat: parseFloat(location['lat']), lng: parseFloat(location['lng'])},
            map: map,
            icon: image,
            title: locations[i]['name']
          });
        });

        markers.forEach(function(element,i){
          element.addListener('click', function() {
            ChangeBranchinfo(i);

            return new google.maps.InfoWindow({
              content: "<div class='map-title'>"+locations[i]['name']+"</div><div class='map-desc'>"+locations[i]['address']+"</div>"
            }).open(map, markers[i]);
          });
        });

        // List province
        var province_tmp = [];
        locations.forEach(function(element,i){
          province_tmp.push(element['province']);
        });

        var uniqueProvince = [];
        $.each(province_tmp, function(i, el){
          if($.inArray(el, uniqueProvince) === -1) uniqueProvince.push(el);
        });

        uniqueProvince.forEach(function(element,i){
          $('#province').append($('<option/>', {
            value: element,
            text : element
          }));
        });

      }

      function MoveMapTo(){
          MoveMapByBranch($('#branch').val());
      }

      function MoveMapByProvince(province_select){
        locations.some(function(element,i){
          if(element['province'] == province_select){
            var center = new google.maps.LatLng(parseFloat(element['lat']),parseFloat(element['lng']));
            map.panTo(center);

            return true;
          }
        });

        // Change Branch
        $('#branch').empty().append('<option value="">{{ trans("home.branch") }}</option>');
        $('.customSelectInner').html('{{ trans("home.branch") }}');
        locations.forEach(function(element,i){
          if(element['province'] == province_select){
            $('#branch').append($('<option/>', {
              value: element['name'],
              text : element['name']
            }));
          }
        });
      }

      function MoveMapByBranch(branch){
        locations.some(function(element,i){
          if(element['name'] == branch){
            var center = new google.maps.LatLng(element['lat'],element['lng']);
            map.panTo(center);

            ChangeBranchinfo(i)

            return true;
          }
        });
      }

      function ChangeBranchinfo(i){
        $('#branch-info').html(locations[i]['name']+"<br><br>"+locations[i]['address']+"<br><br>{{ trans('home.tel') }} : "+locations[i]['tel']);
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX-fHOj-p7pOpLUJgPsdVf3HwTlp-gR1k&callback=initMap"  ></script>
   
@endsection