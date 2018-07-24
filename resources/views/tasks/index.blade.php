@extends('layouts.app')

@section('title', 'Task Manager')

@section('content')
<!-- Current Tasks -->
{{-- Change Language --}}
{!! Form::open(['method' => 'GET', 'url' => route('tasks.locale'), 'id' => 'changeLang', 'class' => 'form-horizontal']) !!}
<div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
    {!! Form::label('lang', 'Change Language', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('lang', $options, App::getLocale(), ['name' => 'lang', 'class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('lang') }}</small>
    </div>
</div>
{!! Form::close() !!}

<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            @lang('messages.create_new_task')
        </a>
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>Task</th>
                <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>
                    <!-- Delete Button -->
                    <td>
                        {!! Form::open(['method' => 'delete', 'url' => route('tasks.destroy', ['id' => $task->id]), 'class' => 'form-horizontal']) !!}
                        <div class="btn-group pull-right">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash">@lang('messages.delete')</i> 
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function()
        {
            $('#lang').change(function(){
                $('#changeLang').submit();
            });
        })
    </script>
@endsection
