@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Make New Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('newpost') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control" name="content" value="{{ old('content') }}" required autofocus>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('thread_id') ? ' has-error' : '' }}">
                            <label for="thread_id" class="col-md-4 control-label">Specify Thread ID</label>

                            <div class="col-md-6">
                                <input id="thread_id" type="text" class="form-control" name="thread_id" value="{{ old('thread_id') }}" required autofocus>

                                @if ($errors->has('thread_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thread_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Post it!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
