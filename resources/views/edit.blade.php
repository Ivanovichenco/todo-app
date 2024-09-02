@extends('layouts.master')

@section('content')
    <form action="{{ route('update', $todo->id) }}" method="post">
        @csrf

        <div class="row my-5">
            <div class="col-xl-6 m-auto">
                <div class="card">

                    <div class="card-body">
                        <h3 class="card-title">TODO Edit</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $todo->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" value="">{{ $todo->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" name="due_date" class="form-control" id="due_date"
                                value="{{ $todo->due_date }}">
                        </div>
                        <select class="form-select" aria-label="Default select example" name="is_completed">
                            <option selected>Completed Todo?</option>
                            <option value="1" {{ $todo->completed == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $todo->completed == 0 ? 'selected' : '' }}>No</option>
                        </select>

                        <button type="submit" class="btn btn-primary my-3">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
