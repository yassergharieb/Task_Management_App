@extends("app")
@section('content')
<form class="p-4" method="POST" action="{{ route('task.update' , $task->id) }}">
    @csrf
    <input type="hidden" name="id" class="form-control" value="{{$task->id}}">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Task Title </label>
        <input type="text" name="name" class="form-control" value="{{old('title' , $task->title)}}">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Task Description</label>
      <textarea  name="description" class="form-control"  >
        {{old('description' , $task->description)}}
      </textarea>
      @error('description')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Due Date</label>
      <input type="date" name="due_date" class="form-control" value="{{old("due_date" , $task->due_date)}}">
      @error('due_date')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">add task</button>
    <a href="{{route('task.all')}}" class="btn btn-success">Discard changes</a>
  </form>
@endsection


