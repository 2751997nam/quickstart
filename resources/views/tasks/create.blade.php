@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
    {!! Form::open(['method' => 'POST', 'route' => 'tasks.store', 'class' => 'form-horizontal']) !!}
    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">@lang('messages.create_new_task')</label>

        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control">
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> @lang('messages.create_task')
            </button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
