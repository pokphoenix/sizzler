<section class="phoinikas--home-banner phoinikas--section-space phoinikas--banner-3rdparty">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                    @foreach ($promotionSliderSub as $sub)
                        <div class="swiper-slide phoinikas--swiper-slide">
                        @if (App::getLocale()=='th') 
                            <a href="{{ url('promotion/'.$sub->id) }}" class="phoinikas--banner"><img src="{{ isset($sub->img_th) ? asset('storage/upload/'.$sub->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub->name_th }}"></a>
                        @else
                            <a href="{{ url('promotion/'.$sub->id) }}" class="phoinikas--banner"><img src="{{   isset($sub->img_en) ? asset('storage/upload/'.$sub->img_en) : asset('/img/resource/thumbnail-default.jpg')}}" alt="{{ $sub->name_en }}"></a>
                        @endif
                            
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>