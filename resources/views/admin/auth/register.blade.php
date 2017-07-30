@extends('layouts.main')

@section('page_heading',$title)



@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <form id="submitform" class="form-horizontal" role="form" method="POST" action="{{ isset($data->id) ? asset($route.'/'.$data->id) : asset($route) }}">
                        {{ csrf_field() }}
                        @if (isset($edit))
                            {{ method_field('PUT') }}
                        @endif
                    @include('layouts.partials.error')
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text"  @if(isset($show)) disabled @endif class="form-control" name="name" value="{{ isset($data->name) ? $data->name : old('name') }}"  autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text"  @if(isset($show)) disabled @endif class="form-control" name="lastname" value="{{ isset($data->lastname) ? $data->lastname : old('lastname') }}"  autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  @if(isset($show)) disabled @endif class="form-control" name="email" value="{{ isset($data->email) ? $data->email : old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(!isset($edit))
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password_confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                 <select id="role_id" name="role_id"  @if(((isset($show)||isset($edit))&& $data->id==1) || isset($profile) ) disabled  @endif  class="form-control">
                                    <option value="">กรุณาเลือกประเภทแอดมิน</option>
                                    @foreach ($roles  as $role ) 
                                        <option value="{{ $role->id }}"  @if(isset($data)&&$data->role_id==$role->id ) selected @endif >{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 <a href="{{  isset($backUrl) ? url($backUrl) : url($route) }}" class="btn btn-danger">Back</a>
                                @if(!isset($show))
                                <button type="submit" class="btn btn-primary">
                                    {{  (isset($edit)) ? 'Save' : 'Register' }}
                                </button>
                                @endif
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
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    maxlength: 200
                },
                lastname: {
                    required: true,
                    minlength: 2,
                    maxlength: 200
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 2,
                    maxlength: 200
                },
                @if(!isset($edit)) 
                password: {
                    required: true,
                    minlength: 2,
                    maxlength: 200
                },
                password_confirm: {
                  equalTo: "#password"
                },
                @endif
                role_id: {
                  @if(isset($edit)&&$data->id==1) 
                  equalTo: 1,
                  @endif
                  required: true
                  
                }
            },
        });
    });
    </script>
@endsection




