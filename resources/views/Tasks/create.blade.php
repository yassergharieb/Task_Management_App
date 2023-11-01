@extends("app")
@section('content')
<form class="p-4" method="POST" action="{{ route('task.store') }}">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Task Name </label>
        <input type="text" name="title" class="form-control" value="{{old('title')}}">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">task description</label>
      <textarea  name="description" class="form-control" value="{{old('description')}}" >
      </textarea>
      @error('description')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Due Date</label>
      <input type="date" name="due_date" class="form-control">
      @error('due_date')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">add task</button>
  </form>
@endsection