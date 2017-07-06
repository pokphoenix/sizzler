<style>
img {
  width: 100px;
  height: 100px;
  background-position: center center;
  background-repeat: no-repeat;
}
</style>
<div class="col-sm-12">
	<form id="logout-form" action="{{ $action }}" method="POST" enctype="multipart/form-data" >
             {{ csrf_field() }}	
			@if ($method == 'PUT' )
				{{ method_field('PUT') }}
			@endif
		<div class="row">
			<div class="col-sm-6">
			 	@include('layouts.partials.error')
				
				 <div class="layout-th">
				 	 {{ $panelBodyTH }}	
				 </div>
				 <div class="layout-en">
				 	 {{ $panelBodyEN }}	
				 </div>
			</div>
			<div class="col-sm-6">
				@component('admin.widgets.collapse')
		            @slot('header', 'Language')
		            @slot('class', 'info')
		            @slot('id', '1')
		            @slot('collapseIn', true)
		            @slot('body')
		                <div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-info  btn-language">TH</button>
						  <button type="button" class="btn btn-default  btn-language">EN</button>
						</div>
		            @endslot
		        @endcomponent
				

				@component('admin.widgets.collapse')
		            @slot('header', 'Status')
		            @slot('id', '2')
		            @slot('collapseIn', true)
		            @slot('body')
		            		@include('layouts.widgets.buttonOnOff',['editStatus'=> $editStatus,'nameItem'=>'status'])
		            @endslot
		        @endcomponent
	
				@component('admin.widgets.collapse')
		            @slot('header', 'Show Position')
		            @slot('id', '3')
		            @slot('collapseIn', true)
		            @slot('body')
		            		@include('layouts.widgets.buttonOnOff',['editStatus'=> $editPosition,'nameItem'=>'position'])
		            @endslot
		        @endcomponent

			</div>
		</div>	
		<div class="row">
			<div class="col-sm-6">
				<a href="{{ $backUrl }}" class="btn btn-danger">Back</a>
				<button type="submit"  class="btn btn-primary" >Save</button>
			</div>
		</div>
	</form>   
    
   
</div>
<style>

</style>


<script type="text/javascript">
	$(function() {
		$('.layout-en').hide();

		$('.btn-language').on('click',function(e){
			$('.btn-language').removeClass('btn-info').addClass('btn-default');
			$(this).removeClass('btn-default').addClass('btn-info');
			$('.layout-th,.layout-en').hide();
			($(this).text()=='TH') ? $('.layout-th').show() : $('.layout-en').show(); 
		})

		$('.btn-on-off').on('click',function(e){
			
			$(this).closest('.btn-on-off-widget').find('.btn-value').val($(this).attr('value'));
			$(this).next('.btn-on-off').removeClass('btn-primary btn-gray').addClass('btn-default');
			$(this).prev('.btn-on-off').removeClass('btn-primary btn-gray').addClass('btn-default');
			if($(this).attr('value')==1){
				$(this).removeClass('btn-default').addClass('btn-primary')
			}else{
				$(this).removeClass('btn-default').addClass('btn-gray');
			}
		})

	});


</script>
