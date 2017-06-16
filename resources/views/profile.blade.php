@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->user_name}}'s Profile:</div>

                <div class="panel-body">
					{{$user->bio}}<br>
					@if ($user->id == Auth::id())
						<a href="{{url('/editbio')}}">Edit Bio</a><br>
					@endif
                </div>
            </div>
		@foreach ($user->fposts as $fpost)
            <div class="panel panel-default">
                <div class="panel-heading">
					Thread: {{$fpost->thread_id}} Last Edited: {{$fpost->updated_at}}
				</div>

                <div class="panel-body">
					{{$fpost->content}}<br>
					@if ($user->id == Auth::id())
						<a href="{{url('')}}">Edit Post</a>
						<a href="{{url('')}}">Delete Post</a>
					@endif
                </div>
            </div>
		@endforeach
        </div>
    </div>
</div>
@endsection
