@extends('layouts.main')

@section('page_heading',$title)



@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <form id="submitform" class="form-horizontal" role="form" method="POST" action="{{ asset($route.'/'.$data['id']) }}">
                        {{ csrf_field() }}
                       {{ method_field('PUT') }}
                    @include('layouts.partials.error')
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">New Password</label>
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" value=""  autofocus>

                                @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"> Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new_password_confirm" type="password" class="form-control" name="new_password_confirmation" >
                            </div>
                        </div>
  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 <a href="{{ url($route) }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">
                                   Save
                                </button>
                              
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script>
    $(function() {
        $.validator.setDefaults({
            ignore: []
        });
    });
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
               
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 200
                },
                new_password: {
                    required: true,
                    minlength: 6,
                    maxlength: 200
                },
                new_password_confirm: {
                  equalTo: "#new_password"
                }
             
            }
        });
    });
    </script>
@endsection




