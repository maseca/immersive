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

			@foreach ($posts as $post)
				<div class="panel panel-default">
					<div class="panel-heading">
						Thread ID: {{$post->thread_id}} Post ID: {{$post->id}} Last Edited: {{$post->updated_at}}
					</div>

					<div class="panel-body">
						{{$post->content}}
					</div>
				@if ($post->user_id == Auth::id())
						<a href="{{url('')}}">Edit Post</a>
						<a href="{{url('')}}">Delete Post</a>
				@endif
				</div>
			@endforeach
        </div>
    </div>
</div>
@endsection
