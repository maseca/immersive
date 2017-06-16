@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MEATLAB FORUM</div>

                <div class="panel-body">
					<a href="{{url('/newpost')}}">Make New Post</a><br>
					<a href="{{url('/profile')}}">Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
