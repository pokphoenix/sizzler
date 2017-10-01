@extends('layouts.main')

@section('page_heading','admin home')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.message')
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in! Admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
