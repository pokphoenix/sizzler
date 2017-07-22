@extends('layouts.app')

@section('content')
 <main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header" style="background:  brown;">
				<h2>Promotion</h2>
			</header>

			<section class="phoinikas--flex-row phoinikas--detail-row">
				<img src="{{ asset('storage/upload/'.$data[0]->img_th)  }}" alt="" style="margin: auto;">
			</section>


		</div>

	</main>

@endsection