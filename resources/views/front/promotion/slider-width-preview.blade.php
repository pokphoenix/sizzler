@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-promotion">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            @include('front.promotion.slider-width')
        </div>
    </main>
    <script src="{{ asset('js/home.js')}} "></script>
@endsection
