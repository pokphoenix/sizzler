@extends('layouts.app')

@section('content')

 <main class="phoinikas--body-main phoinikas--page-location">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            <div class="phoinikas--flex-row">
                <article class="phoinikas--location-map">

                    <div class="phoinikas--ggmap">
                       <div id="map"></div>
                    </div>

                </article>

                <aside class="phoinikas--location-aside">
                    <img src="{{ asset('/img/location/img-shop.jpg') }}" alt="">
                    <div class="phoinikas--branch-detail">
                        {{ !empty($data[0]) ? $data[0]->address_th : '' }}
                    </div>
                </aside>

                <footer class="phoinikas--location-select">
                    <div class="phoinikas--inline-row">
                        <div class="phoinikas--select-custom -design-2">
                            <select class="" name="">
                                <option value="0">จังหวัด</option>
                                <option value="1">กรุงเทพ</option>
                            </select>
                        </div>
                        <button type="button" name="button" class="phoinikas--btn-design-3">Done</button>
                    </div>
                    <div class="phoinikas--inline-row">
                        <div class="phoinikas--select-custom -design-2">
                            <select class="" name="" disabled>
                                <option value="">สาขา</option>
                            </select>
                        </div>
                        <button type="button" name="button" class="phoinikas--btn-design-3" disabled>Go</button>
                    </div>
                </footer>
            </div>
        </div>

    </main>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
 <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
@endsection