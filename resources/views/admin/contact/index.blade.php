@extends('layouts.main')

@section('page_heading',$title)

@section('section')
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group input-group">
                    <input type="text" class="form-control" id="search" name="search" data-href="{{ asset($route) }}" value="{{ $search }}">
                    <span class="input-group-btn">
                    	<a href="#" id="search_btn" class="btn btn-default"  >
	                    	<i class="fa fa-search"></i>
	                    </a>
                    </span>
                </div>
			</div>
			<div class="col-sm-6">
				
			</div>
			
		</div>
		
        <div class="row">
            <div class="col-sm-12">
            	@include('layouts.partials.message')
            	<table class="table table-striped">
				    <thead>
				        <tr class="v-mid">
				        	<th class="col-sm-1 text-center" >#</th>
				            <th class="col-sm-5">  
				            	<div class="col-sm-4">
								@include('layouts.widgets.tablesort',
								[ 'title' => 'name' 
									,'sortKey' => 'name'
									,'sortBy' => $sortBy 
									,'page' => $tables->currentPage()   
									,'sortType' => $sortType
									,'sortNextType' =>$sortNextType
									,'sortKeyType' => 'txt' 
									,'search' => $search
								])
				            	</div>
				            	<div class="col-sm-4">
				            	@include('layouts.widgets.tablesort',
								[ 'title' => 'email' 
								    ,'sortKey' => 'email'
									,'sortBy' => $sortBy 
									,'page' => $tables->currentPage()  
									,'sortType' => $sortType
									,'sortNextType' =>$sortNextType
									,'sortKeyType' => 'txt'
									,'search' => $search
								])	
				            	</div>
				            	<div class="col-sm-4">
				            	@include('layouts.widgets.tablesort',
								[ 'title' => 'tel' 
								    ,'sortKey' => 'tel'
									,'sortBy' => $sortBy 
									,'page' => $tables->currentPage()  
									,'sortType' => $sortType
									,'sortNextType' =>$sortNextType
									,'sortKeyType' => 'txt'
									,'search' => $search
								])	
				            	</div>
				            </th>
				            <th class="col-sm-2"> @include('layouts.widgets.tablesort',
								[ 'title' => 'created' 
								    ,'sortKey' => 'created_at'
									,'sortBy' => $sortBy 
									,'page' => $tables->currentPage()  
									,'sortType' => $sortType
									,'sortNextType' =>$sortNextType
									,'sortKeyType' => 'num'
									,'search' => $search
								])	
							</th>
							<th class="col-sm-4 text-right">
								<div class="col-sm-2">
									@include('layouts.widgets.tablesort',
									[ 'title' => '' 
										,'sortKey' => 'status'
										,'sortBy' => $sortBy 
										,'page' => $tables->currentPage()   
										,'sortType' => $sortType
										,'sortNextType' =>$sortNextType
										,'sortKeyType' => 'onOff' 
										,'search' => $search
									])
								</div>
								<div class="col-sm-2"></div>
								<div class="col-sm-2"></div>
								<div class="col-sm-2"></div>
								<div class="col-sm-2"></div>
							</th>
				           
				        </tr>
				    </thead>

				    <tbody>
				        @foreach ($tables as $t)
				        <tr >
				        	<td  class="text-center v-mid">{{$loop->index+1}}</td>
				            <td class="v-mid">
				                <label>email :</label> {{$t->email}}<BR>	
				                <label>tel :</label> {{$t->tel}}<BR>
				            </td>
				            <td class="v-mid">{{$t->created_at->diffForHumans()}}</td>
				            <td class="v-mid" style="padding-top:25px;" >
				            	<div class="col-sm-2">
				            		<form class="form-group" method="post" action="{{ asset($route.'/public/'.$t->id) }}">
											{{ csrf_field() }}
											{{ method_field('PUT') }}
											<input type="hidden" name="status" value="{{ $t->status }}" >
											<button type="button"
											@if($t->status==0)
											onclick="if (confirm('คุณต้องการตั้งว่า ติดต่อแล้ว ใช่หรือไม่?')) { $(this).closest('form').submit(); }" 
											@endif
											 class="pull-right  btn btn-circle {{ $t->status==1 ? 'btn-success':'offline' }}"" title="status {{ $t->status==1 ? 'seen':'unseen' }}">
											 	<i class="fa fa-{{ $t->status==1 ? 'eye':'eye-slash' }} "></i>
											</button>
								</form> 
				            	</div>
				            	<div class="col-sm-2">
				            		<a href="{{ asset($route.'/'.$t->id) }}" target="_blank" class="btn btn-default btn-circle"><i class="fa fa-file-text-o" title="read item"></i></a>
				            	</div>
				            	<div class="col-sm-2">
				            		@if ($auth)
								 <form class="form-group" method="post" action="{{ asset($route.'/'.$t->id) }}">
											 {{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="button" onclick="if (confirm('คุณต้องการลบใช่หรือไม่?')) { $(this).closest('form').submit(); }"  class="btn btn-danger btn-circle" title="delete item">
											 	<i class="fa fa-trash-o"></i>
											</button>
									</form>
								@endif
				            	</div>
								<div class="col-sm-2"></div>
								<div class="col-sm-2"></div>
				            </td>
				        </tr>
				        @endforeach

				    </tbody>
				     <!-- {{$tables->links()}} -->

				</table>

				
            </div>
           	<div class="col-sm-12  col-center"> @include('layouts.partials.pagination', ['paginator' => $tables,'sortBy'=>$sortBy ,'sortType'=>$sortType,'sortNextType'=>$sortNextType,'search'=>$search])</div>
        </div>
       
    </div>


<script type="text/javascript">
$(function() {
	$("#search").on('keyup',function(e){
		var url = $(this).data("href")+"?search="+$(this).val() ;
		console.log('url',$(this).data("href"),url);
		$("a#search_btn").attr('href',url);
	})
});
</script>
@endsection


		
