@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Activity</h2>
                <form action="{{ route('activity.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date:</label>
                        <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="finish_date">Finish Date:</label>
                        <input type="datetime-local" class="form-control" id="finish_date" name="finish_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
