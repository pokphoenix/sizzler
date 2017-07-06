<a href="{{ $url }}" data-method="{{ isset($method) ? $method : 'get' }}" class="jquery-postback btn btn-{{{ isset($class) ? $class : 'default' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} {{{ isset($circle) ? 'btn-circle' : ''}}} @if (isset($size)) btn-{{$size}} @endif  {{{ isset($disabled) ? 'disabled' : '' }}}">{{ isset($btn_text) ? $btn_text : '' }}
 @if (isset($icon)) <i class="fa {{$icon}}"></i>  @endif   
</a>

<script>
// $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
// });
// $(document).on('click', 'a.jquery-postback', function(e) {
//     e.preventDefault(); // does not go through with the link.

//     var $this = $(this);

//     $.post({
//         type: $this.data('method'),
//         url: $this.attr('href')
//     }).done(function (data) {
//         alert('success');
//         console.log(data);
//     });
// });
</script>