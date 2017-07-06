<div class="btn-on-off-widget" style="margin:0;padding:0">
	<input type="hidden" class="btn-value" name="{{ $nameItem }}" value="{{ ($editStatus!="") ? $editStatus : 1  }}" >
<div class="btn-group" role="group" aria-label="...">

	<button type="button" class="btn btn-{{ ($editStatus=="0") ? 'gray' : 'default'  }} btn-on-off btn-circle" value="0">OFF</button>
	<button type="button" id="statusOn" class="btn btn-{{ ($editStatus=="1") ? 'primary' : 'default'  }} btn-on-off btn-circle" value="1">ON</button>
</div>
</div>



