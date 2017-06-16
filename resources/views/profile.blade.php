@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
					Bio: {{Auth::user()->bio}}<br>
					<a href="{{url('/editbio')}}">Edit Bio</a><br>
					<a href="{{url('/')}}">Posts</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
