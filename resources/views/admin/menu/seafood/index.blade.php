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
				@if ($auth)
				<a href="{{ asset($route.'/create') }}" class="btn btn-success" type="button" title="เพิ่มข้อมูล">
	                <i class="fa fa-plus"></i>
	            </a>
	            @endif
	           <a href="{{ asset($route.'/'.$categoryId.'/edit') }}" class="btn btn-warning" type="button" title="แก้ไขรายการ">
	                <i class="fa fa-edit"></i>
	            </a>
	            <a data-toggle="tooltip" data-placement="bottom" class="btn btn-info" title="<img src='{{ asset('/img/backend/m_3.jpg') }}'  />"  data-fancybox="gallery" href="{{ asset('/img/backend/m_3.jpg') }}" target="_blank" >
			        <i class="fa fa-info-circle"></i>
			    </a>
			</div>
			
		</div>
		
        <div class="row">
            <div class="col-sm-12">
            	@include('layouts.partials.message')
            	<table class="table table-striped">
				    <thead>
				        <tr class="v-mid">
				        	<th class="col-sm-1 text-center" >#</th>
				            <th class="col-sm-7">  
				            	
				            	<div class="col-sm-6">
								@include('layouts.widgets.tablesort',
								[ 'title' => 'TH' 
									,'sortKey' => 'name_th'
									,'sortBy' => $sortBy 
									,'page' => $tables->currentPage()   
									,'sortType' => $sortType
									,'sortNextType' =>$sortNextType
									,'sortKeyType' => 'txt' 
									,'search' => $search
								])
				            	</div>
				            	<div class="col-sm-6">
				            	@include('layouts.widgets.tablesort',
								[ 'title' => 'EN' 
								    ,'sortKey' => 'name_en'
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
							
				            <th class="col-sm-2 text-right"></th>
				        </tr>
				    </thead>

				    <tbody>
				        @foreach ($tables as $t)
				        <tr >
				        	<td  class="text-center v-mid">{{$loop->index+1}}</td>
				            <td class="v-mid">
				            	<div class="col-sm-6" >
				            		<div class="media">
					                  <div class="media-left">
					                    <a data-fancybox="gallery" href="{{ (isset($t->img_th)) ? asset('storage/upload/'.$t->img_th)  : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
					                      <img class="media-object" src="{{ (isset($t->img_th)) ? asset('storage/upload/'.$t->img_th)  : asset('/img/resource/thumbnail-default.jpg') }}" width="100" height="100" alt="...">
					                    </a>
					                  </div>
					                  <div class="media-body">
					                    <label>TH :</label>{!! $t->name_th !!}<BR>
					                  </div>
					                </div>
				            	</div>
				            	<div class="col-sm-6" >
				            		<div class="media">
					                  <div class="media-left">
					                    <a data-fancybox="gallery" href="{{ (isset($t->img_en)) ? asset('storage/upload/'.$t->img_en)  : asset('/img/resource/thumbnail-default.jpg') }}" target="_blank">
					                      <img class="media-object" src="{{ (isset($t->img_en)) ? asset('storage/upload/'.$t->img_en)  : asset('/img/resource/thumbnail-default.jpg') }}" width="100" height="100" alt="...">
					                    </a>
					                  </div>
					                  <div class="media-body">
					                    <label>EN :</label>{!! $t->name_en !!}<BR>
					                  </div>
					                </div>
				            	</div>
				            	
				            </td>
				            <td class="v-mid">{{$t->created_at->diffForHumans()}}</td>
				           
				            <td class="v-mid"></td>
				        </tr>
				        @endforeach

				    </tbody>
				     <!-- {{$tables->links()}} -->

				</table>

				
            </div>
           	<div class="col-sm-12  col-center"> @include('layouts.partials.pagination', ['paginator' => $tables,'sortBy'=>$sortBy ,'sortType'=>$sortType,'sortNextType'=>$sortNextType,'search'=>$search])</div>
        </div>
       
    </div>
@endsection


		
