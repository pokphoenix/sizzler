
<div class="btn-on-off-widget" style="margin:0;padding:0">
	<input type="hidden" class="btn-value" name="{{ $nameItem }}" value="{{ ($editStatus==0) ? 0 : $editStatus  }}" >
<div class="btn-group" role="group" aria-label="...">

	<button type="button" class="btn btn-{{ ($editStatus==0) ? 'gray' : 'default'  }} btn-on-off btn-circle" value="0">No</button>
	<button type="button" id="statusOn" class="btn btn-{{ (isset($editStatus)&&!empty($editStatus)) ? 'primary' : 'default'  }} btn-on-off btn-circle" value="{{ (isset($editStatus)&&!empty($editStatus)) ? $editStatus : ( isset($initVal) ? $initVal : 1 )  }}">Yes</button>
</div>
</div>
