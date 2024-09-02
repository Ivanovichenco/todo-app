@extends('layouts.master')

@section('content') 

<div class="row my-5">
    <div class="col-xl-6 m-auto">
        <div class="card">

            <div class="card-body">
                <h3 class="card-title">TODO Edit</h3>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title"
                        value="{{ $todo->title }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" value="" readonly>{{ $todo->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" name="due_date" class="form-control" id="due_date"
                        value="{{ $todo->due_date }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="is_completed" class="form-label">Completed?</label>
                    <input type="text" name="is_completed" class="form-control" id="is_completed"
                        value="{{ $todo->is_completed }}" readonly>
                </div>
                

              
            </div>
        </div>
    </div>
</div>

@endsection