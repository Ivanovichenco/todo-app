@extends('layouts.master')

@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="row my-5">
            <div class="col-xl-6 m-auto">
                <div class="card" >
                    
                    <div class="card-body">
                        <h3 class="card-title">TODO Create</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                          </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text"  name="description" class="form-control" id="description">
                          </div>
                          <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date"  name="due_date" class="form-control" id="due_date">
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </div>
            </div>
        </div>
    </form>
@endsection