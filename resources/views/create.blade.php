@extends('layout.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message{
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
<div class="mb-4">
    <a href="{{route('tasks.index')}}" class="link"> <- Go back to the task list!!</a>
</div>
{{-- {{$errors}} --}}
  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="mb-4">
      <label for="title">
        Title
      </label>
      <input text="text" name="title" id="title"  value="{{old('title')}}" @class(['border-red-500' => $errors->has('title')])
      />
      @error('title')
      <p class="error-message">{{$message}}</p>
    </div>

@enderror
    <div  class="mb-4">
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="5"
      @class(['border-red-500' => $errors->has('description')])>{{old('description')}}</textarea>
      @error('description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div  class="mb-4">
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10"
      @class(['border-red-500' => $errors->has('long_description')])>{{old('long_description')}}</textarea>
      @error('long_description')
      <p class="error-message">{{$message}}</p>
      @enderror
    </div>

    <div>
      <button type="submit" class="btn">Add Task</button>
    </div>
  </form>
@endsection
