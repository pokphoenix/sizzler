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
                        {{ $data['address'] }}<br><br>
                        โทร : {{ $data['tel'] }}
                    </div>
                </aside>

                <footer class="phoinikas--location-select" style="margin-top: 100px;">
                    <div class="phoinikas--inline-row">
                        <div class="phoinikas--select-custom -design-2">
                            <select class="" name="province" id="province" >
                                <option value="">จังหวัด</option>
                            </select>
                        </div>
                    </div>
                    <div class="phoinikas--inline-row" style="margin-top: 20px;">
                        <div class="phoinikas--select-custom -design-2">
                            <select class="" name="branch" id="branch">
                                <option value="">สาขา</option>
                            </select>
                        </div>
                        <button type="button" name="button" class="phoinikas--btn-design-3" onclick="MoveMapTo()">Go</button>
                    </div>
                </footer>
            </div>
        </div>

    </main>
    
    <!-- <script src="{{ asset('js/home.js') }} "></script> -->

    <script>
    $(function() {
        var map;
        var image = "{{ asset('img/global/logo-sizzler-map.png') }}" ;
        var json = decodeHtml('{{ $json }}') ;
        var locations = $.parseJSON(json);
       
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


         $("#province").on("change", function(){
            MoveMapByProvince($(this).val());
         }); 
         $("#branch").on("change", function(){
            MoveMapByBranch($(this).val());
         });

        
        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        function initMap() {



            // Create a map object and specify the DOM element for display.
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: locations[0]['lat'], lng: locations[0]['lng']},
              scrollwheel: true,
              zoom: 12
            });

            // Create a marker and set its position.
            var markers = locations.map(function(location, i) {
              return new google.maps.Marker({
                position: {lat: location['lat'], lng: location['lng']},
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
              //var center = new google.maps.LatLng(locations[0]['lat'],locations[0]['lng']);
              //map.panTo(center);

              MoveMapByBranch($('#branch').val());
        }

        function MoveMapByProvince(province_select){
            $('#branch').empty().append('<option value="">สาขา</option>');
            $('.customSelectInner').html("สาขา");
            locations.forEach(function(element,i){
              if(element['province'] == province_select){
                console.log(element['name']);
                $('#branch').append($('<option/>', {
                  value: element['name'],
                  text : element['name']
                }));
              }
            });

            locations.some(function(element,i){
              if(element['province'] == province_select){
                //console.log(element['name']);
                var center = new google.maps.LatLng(element['lat'],element['lng']);
                map.panTo(center);

                return true;
              }
            });

            // Change Branch
           
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
            $('#branch-info').html(locations[i]['name']+"<br><br>"+locations[i]['address']+"<br><br>โทร : "+locations[i]['tel']);
        }
    });

    
      // var locations = [
      //   {province: 'กรุงเทพมหานคร', name: 'ซีพี ทาวเวอร์ ', address: 'เลขที่ 313  ชั้น 2 อาคารซีพี ทาวเวอร์  ถนนสีลม  แขวงสีลม  เขตบางรัก กทม. 10500', tel: '061-421-1840', lat: 13.7461738, lng: 100.5377945},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล บางนา ', address: 'เลขที่ 1091 ชั้น 5 ห้องเลขที่ 551  ศูนย์การค้าเซ็นทรัลซิตี้บางนา', tel: '061-421-1873', lat: 13.669563, lng: 100.6321113},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล พระราม 3 ', address: 'เลขที่ 79/248-249 ชั้น 5 ห้องเลขที่ 535-536 ศูนย์การค้าเซ็นทรัลพระราม 3', tel: '061-421-1874', lat: 13.6978897, lng: 100.535386},
      //   {province: 'กรุงเทพมหานคร', name: 'เดอะมอลล์ บางกะปิ', address: 'เลขที่ 3522  ชั้น 3 ห้างเดอะมอลล์บางกะปิ  ถนนลาดพร้าว, แขวงคลองจั่น', tel: '061-421-1890', lat: 13.7658444, lng: 100.6401912},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล ลาดพร้าว', address: 'ห้องเลขที่ 325 ชั้น 3 เลขที่ 1697 ถนนพหลโยธิน กรุงเทพมหานครฯ  10900', tel: '061-421-1895', lat: 13.8294305, lng: 100.5729696},
      //   {province: 'กรุงเทพมหานคร', name: 'สยามเซ็นเตอร์ ', address: 'เลขที่ 979  ชั้น 4 สยามเซ็นเตอร์  ถนน พระราม1  แขวงปทุมวัน', tel: '061-421-1908', lat: 13.746461, lng: 100.5293743},
      //   {province: 'กรุงเทพมหานคร', name: 'ซีคอนสแควร์ ', address: 'เลขที่ 904 ชั้น 4 ห้างซีคอนสแควร์ หมู่ที่ 6 ถนนศรีนครินทร์ แขวงหนองบอน', tel: '061-421-1980', lat: 13.6960206, lng: 100.646141},
      //   {province: 'กรุงเทพมหานคร', name: 'มาบุญครอง', address: 'เลขที่ 444 ชั้น 7 อาคารมาบุญครองเซ็นเตอร์', tel: '061-421-1982', lat: 13.7444683, lng: 100.5277199},
      //   {province: 'กรุงเทพมหานคร', name: 'เมเจอร์ เอกมัย', address: 'เลขที่ 1221/39 ห้อง 105A-108A ชั้น G เมเจอร์เอกมัย ถ.สุขุมวิท แขวงคลองตันเหนือ', tel: '061-421-2011', lat: 13.7212299, lng: 100.5810567},
      //   {province: 'กรุงเทพมหานคร', name: 'เมเจอร์ รัชโยธิน ', address: 'เลขที่ 1839 ห้องเลขที่ 102 เมเจอร์รัชโยธิน ชั้น G ถ.พหลโยธิน  แขวงลาดยาว', tel: '061-421-2012', lat: 13.8286371, lng: 100.5663187},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล พระราม 2 ', address: 'เลขที่ 128  หมู่ 6 ห้องหมายเลข M10-7 ชั้น 4 อาคารศูนย์การค้าเซ็นทรัล พระราม 2 ', tel: '061-421-2016', lat: 13.6629123, lng: 100.4352963},
      //   {province: 'กรุงเทพมหานคร', name: 'อเวนิว แจ้งวัฒนะ ', address: '104/42 ม.1 ถ.แจ้งวัฒนะ  แขวงทุ่งสองห้อง  เขตหลักสี่  กทม. 10210', tel: '061-421-2024', lat: 13.8977089, lng: 100.5028429},
      //   {province: 'กรุงเทพมหานคร', name: 'แฟชั่นไอส์แลนด์', address: '5/5-6 หมู่ 7  ถ.รามอินทรา  แขวงคันนายาว  เขตคันนายาว  กทม. 10230', tel: '061-421-2025', lat: 13.8255986, lng: 100.6767352},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ้นทรัล แจ้งวัฒนะ', address: '99  หมู่2  ห้างเซ็นทรัล แจ้งวัฒนะ ชั้น 5  ถ.แจ้งวัฒนะ  ต.บางตลาด  อ.ปากเกร็ด', tel: '061-421-2027', lat: 13.9038717, lng: 100.5254887},
      //   {province: 'กรุงเทพมหานคร', name: 'เดอะมอลล์ บางแค', address: '275 ม.1 ห้างเดอะมอลล์ บางแค ชั้น 2 ถ.เพชรเกษม  แขวงบางแคเหนือ เขตบางแค', tel: '061-421-2044', lat: 13.7132183, lng: 100.4057462},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล ปิ่นเกล้า', address: '7/492-494  ศูนย์การค้าเซ็นทรัล ปิ่นเกล้า ชั้น 5 ถ.บรมราชนนี', tel: '061-421-2049', lat: 13.7776274, lng: 100.4737671},
      //   {province: 'กรุงเทพมหานคร', name: 'เดอะมอลล์ ท่าพระ', address: '99 ศูนย์การค้าเดอะมอลล์ ท่าพระ ชั้น 4  ถ.เจริญนคร  แขวงบุคคโล  เขตธนบุรี ', tel: '061-421-2091', lat: 13.7136352, lng: 100.4778851},
      //   {province: 'กรุงเทพมหานคร', name: 'พาราไดร์ พาร์ค', address: '61 ศูนย์การค้าพาราไดร์ พาร์ค ชั้น 3 ถ.ศรีนครินทร์  แขวงหนองบอน เขตประเวศ  ', tel: '061-421-2113', lat: 13.6876962, lng: 100.645422},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัลพระราม 9', address: 'Unit#632 ชั้น 6 ศูนย์การค้าเซ็นทรัลพลาซ่า พระราม 9 ', tel: '061-421-2174', lat: 13.758439, lng: 100.5639754},
      //   {province: 'กรุงเทพมหานคร', name: 'สยามสแควร์ วัน (SQ 1)', address: 'ห้องเลขที่ SS 5001 ชั้น 5 อาคารศูนย์การค้าสยามสแควร์วัน ', tel: '061-421-2176', lat: 13.744931, lng: 100.5316716},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัล เวสต์เกต', address: 'ห้องที่ 356 ชั้น 3 อาคารศูนย์การค้าเซ็นทรัลพลาซ่าเวสต์เกต เลขที่ 199,199/1,199/2 ', tel: '061-421-2185', lat: 13.877375, lng: 100.4099473},
      //   {province: 'กรุงเทพมหานคร', name: 'เดอะ ริเวอร์ไซด์', address: 'ห้องเลขที่ 206 เลขที่ 257 ถนนเจริญนคร แขวงสำเหร่ เขตธนบุรี ', tel: '061-421-2230', lat: 13.7053289, lng: 100.4733248},
      //   {province: 'กรุงเทพมหานคร', name: 'เซ็นทรัลเฟสติวัล อีสท์ วิลล์', address: 'ห้องเลขที่ 213 ชั้น 2  เซ็นทรัลเฟสติวัล อีสท์ วิลล์ ', tel: '061-421-2243', lat: 13.8036116, lng: 100.6119115},
      //   {province: 'กรุงเทพมหานคร', name: 'สเปล แอท ฟิวเจอร์ปาร์ค', address: 'ห้องเลขที่ PL2.2.SHP001 ชั้น 2  สเปล แอท ฟิวเจอร์ปาร์ค ถนนพหลโยธิน ', tel: '061-421-2261', lat: 13.9888135, lng: 100.6152863},
      //   {province: 'กรุงเทพมหานคร', name: 'เมกาบางนา', address: 'ห้องที่ 2208-2209 ชั้น2  เมกาบางนา 38,38/1,39 ถนนบางนา-ตราด กิโลเมตรที่ 8 ', tel: '061-418-8025', lat: 13.6466873, lng: 100.6781248},
      //   {province: 'ขอนแก่น', name: 'เซ็นทรัล ขอนแก่น', address: '99 ศูนย์การค้าเซ็นทรัล ขอนแก่น ชั้น 4 ห้องเลขที่ 427-430,431/2', tel: '085-484-8816', lat: 16.432901, lng: 102.8233933},
      //   {province: 'ชลบุรี', name: 'เซ็นทรัล ชลบุรี ', address: '55/88-89 ศูนย์การค้าเซ็นทรัล ชลบุรี ชั้น 3 ห้องเลขที่ 319 ม.1 ถ.สุขุมวิท  ', tel: '085-484-8815', lat: 13.3365332, lng: 100.9675367},
      //   {province: 'ชลบุรี', name: 'พัทยา ', address: 'ห้องเลขที่ D3-D6 ชั้น 3 เลขที่  218  ศูนย์การค้ารอยัลการ์เด้น พลาซ่า หมู่ที่ 10   ', tel: '085-484-8803', lat: 12.9374901, lng: 100.8727929},
      //   {province: 'ชลบุรี', name: 'เซ็นทรัล พัทยา', address: '333/99-333/100 ห้างเซ็นทรัล พัทยา ชั้น 6  ม.9  ถ.พัทยาสาย 2 ', tel: '085-484-8814', lat: 12.9289569, lng: 100.8525475},
      //   {province: 'ชลบุรี', name: 'แปซิฟิค พาร์ค ศรีราชา', address: 'ห้องเลขที่  T301-2   ชั้น 3 เลขที่ 90   ถนนสุขุมวิท   ตำบลศรีราชา', tel: '085-661-5067', lat: 13.169123, lng: 100.9281833},
      //   {province: 'เชียงราย', name: 'เซ็นทรัล เชียงราย', address: 'พื้นที่หมายเลข# 241/2,242 ชั้น 2 ศูนย์การค้าเซ็นทรัลพลาซ่า เชียงราย, ', tel: '085-484-8829', lat: 19.8867021, lng: 99.8333168},
      //   {province: 'เชียงใหม่', name: 'เซ็นทรัล แอร์พอร์ท พลาซ่า', address: 'เลขที่ 2 ห้องเลขที่ 436-439  ชั้น 4  เซ็นทรัล แอร์พอร์ท พลาซ่า ถนนมหิดล ', tel: '085-484-8808', lat: 18.7689491, lng: 98.9731214},
      //   {province: 'เชียงใหม่', name: 'เซ็นทรัล เฟสติวัล เชียงใหม่', address: 'ห้องเลขที่ 516 ชั้น 5 ศูนย์การค้าเซ็นทรัลเฟสติวัล เชียงใหม่ เลขที่ 99,99/1,99/2 หมู่ 4 ', tel: '092-2507838', lat: 18.807268, lng: 99.0159333},
      //   {province: 'นครปฐม', name: 'เซ็นทรัล ศาลายา', address: 'ห้องเลขที่ 153-154 , ชั้น 1  ศูนย์การค้าเซ็นทรัลพลาซ่าศาลายา 99/21 หมู่ 2 ', tel: '061-4038121', lat: 13.787276, lng: 100.2741423},
      //   {province: 'นครราชสีมา', name: 'เดอะมอลล์ โคราช ', address: 'เลขที่ 1242/2  ชั้น 2 ห้างเดอะมอลล์โคราช  ถนนมิตรภาพ  ตำบลในเมือง', tel: '085-484-8807', lat: 14.9346032, lng: 102.0951789},
      //   {province: 'นครศรีธรรมราช', name: 'เซ็นทรัล นครศรีธรรมราช', address: 'ห้องเลขที่. 312-313, ชั้นที่ 3, เซ็นทรัล พลาซ่า นครศรีธรรมราช, ', tel: '085-484-8804', lat: 8.4062815, lng: 99.949013},
      //   {province: 'นนทบุรี ', name: 'เดอะมอลล์ งามวงศ์วาน', address: 'เลขที่ 30/39-50  ห้างเดอะมอลล์งามวงศ์วาน ชั้น 3 เดอะมอลล์งามวงศ์วาน ', tel: '061-421-1891', lat: 13.855467, lng: 100.5400025},
      //   {province: 'ปทุมธานี', name: 'ฟิวเจอร์ปาร์ค รังสิต ', address: 'เลขที่ 161  ชั้น G โซลเซ็นทรัล อาคารฟิวเจอร์ พาร์ค รังสิต  หมู่ที่ 2', tel: '061-421-1859', lat: 13.9891583, lng: 100.6156565},
      //   {province: 'ประจวบคีรีขันธ์', name: 'หัวหิน มาร์เก็ตวิลเลจ', address: '234/1 ห้องเลขที่ A207,A209 ชั้น 2 อาคารศูนย์การค้าหัวหิน มาร์เก็ต วิลเลจ ถ.เพชรเกษม', tel: '085-484-8813', lat: 12.557632, lng: 99.9569948},
      //   {province: 'ประจวบคีรีขันธ์', name: 'บลูพอร์ต หัวหิน', address: 'ห้องเลขที่ 212/1 ชั้น 2 ศูนย์การค้าบลูพอร์ต หัวหิน ซอยหัวหิน100 (อาคเนย์)', tel: '063-225-7663', lat: 12.5477715, lng: 99.9599138},
      //   {province: 'ภูเก็ต ', name: 'เซ็นทรัล ภูเก็ต ', address: 'เลขที่ 74-75  ชั้น 3 ห้องเลขที่ 311-312 ห้างเซ็นทรัลเฟสติวัล ม.5  ต.วิชิต', tel: '085-484-8812', lat: 7.8903004, lng: 98.370803},
      //   {province: 'ระยอง', name: 'เซ็นทรัล ระยอง', address: 'ห้องที่ 169-170  เลขที่ 99,99/1 ถนน บางนา-ตราด ตำบลเชิงเนิน', tel: '085-484-8805', lat: 12.7568899, lng: 101.1287667},
      //   {province: 'ระยอง', name: 'แหลมทอง  ระยอง', address: 'พื้นที่หมายเลข เอ 037, ชั้น 1  ศูนย์การค้าแหลมทองพลาซ่า-ระยอง เลขที่ 554 ', tel: '085-484-8821', lat: 12.6275204, lng: 101.375414},
      //   {province: 'สงขลา', name: 'เซ็นทรัล เฟสติวัล หาดใหญ่', address: 'ห้องเลขที่513  ศูนย์การค้าเซ็นทรัลเฟสติวัลหาดใหญ่ เลขที่1518,1518/1-1518/2 ', tel: '092-2507839', lat: 6.9915948, lng: 100.4807514},
      //   {province: 'สุราษฎร์ธานี', name: 'เซ็นทรัล สุราษฎร์ธานี', address: 'ห้องที่ 326 ชั้น 3 เซ็นทรัล พลาซ่า สุราษฎร์ธานี เลขที่ 88 หมู่10 ตำบลวัดประดู่ ', tel: '061-418-8358', lat: 9.1104273, lng: 99.3005363},
      //   {province: 'อุดรธานี', name: 'เจริญศรี อุดรธานี', address: 'ห้องเลขที่ 402 ชั้น 4 เลขที่ 277/1-3,271/5 ศูนย์การค้าเซ็นทรัล อุดร ', tel: '085-484-8810', lat: 17.5622081, lng: 102.4288911},
      //   {province: 'อุบลราชธานี ', name: 'เซ็นทรัล อุบลราชธานี', address: 'ห้องที่ 315-317 ชั้น 3 เลขที่ 311 หมู่ 7 ตำบลแจระแม  อำเภอเมืองอุบลราชธานี', tel: '081-938-5646', lat: 15.240301, lng: 104.8211333}
      // ];

      

    </script>
 <!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSj2FlCSRgqNFMCtmxEWys08N6dmPRRGg&callback=initMap" async defer></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj5eQdYPwZB06BKsU3xvCycgwSa1-X104&callback=initMap" async defer></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script> -->
@endsection