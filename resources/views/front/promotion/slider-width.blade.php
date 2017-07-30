<section class="phoinikas--home-banner phoinikas--section-space phoinikas--banner-3rdparty">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                    @foreach ($promotion as $sub)
                        <div class="swiper-slide phoinikas--swiper-slide">
                        @if (App::getLocale()=='th') 
                            <a href="{{ url('promotion/view') }}" class="phoinikas--banner"><img src="{{ isset($sub->thumbnail_th) ? asset('storage/upload/'.$sub->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub->name_th }}"></a>
                        @else
                            <a href="{{ url('promotion/view') }}" class="phoinikas--banner"><img src="{{ isset($sub->thumbnail_en) ? asset('storage/upload/'.$sub->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg')}}" alt="{{ $sub->name_en }}"></a>
                        @endif
                            
                        </div>
                    @endforeach 
                    </div>
                     <div class="swiper-pagination"></div>
                </div>
            </section>
