@extends('layouts.master')

@section('content')
<div class="container">
    <h2 class="text-center my-3">Todo List</h2>
<table class="table table-striped my-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Due Date</th>
        <th scope="col">Completed?</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todos as $todo)
      <tr>
        <th scope="row">{{ $todo->id }}</th>
        <td><a href="{{ route('show', $todo->id)}}" class="btn btn-primary">Show Todo</a></td>
        <td>{{ $todo->title }}</td>
        <td>{{ $todo->description }}</td>
        <td>{{ $todo->due_date }}</td>
        <td>{{ $todo->is_completed }}</td>
        <td>
        <a href="{{ route('edit', $todo->id)}}" class="btn btn-warning">Edit Todo</a>
        <a href="{{ route('destroy', $todo->id)}}" class="btn btn-danger">Delete Todo</a></td>
      </tr>
     @endforeach
     
    </tbody>
  </table>
</div>
@endsection