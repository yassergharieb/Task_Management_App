@extends('app')
@section('content')
@include('components.errors')
@include('components.success')
    @if (count($tasks) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">task name</th>
                    <th scope="col">description</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td> <a href="{{ route('task.edit', $task->id) }}">
                              <div class="btn btn btn-success"> Edit </div>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn  btn-danger"> Delete </button>
                              </form>
                          </a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger p-4" role="alert">
            no tasks here add new task
            <a href="{{ route('task.create') }}"> add new task </a>
        </div>
    @endif
@endsection
