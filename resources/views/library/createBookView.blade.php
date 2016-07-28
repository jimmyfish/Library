@extends('layouts.app')
@section('title','Input New')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Input New Book</div>

                    <div class="panel-body">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Input ID of Book" name="book_id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Input Name of Book" name="book_name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Input Name of Author" name="author_name">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <input type="hidden" value="{{ Auth::user()->name }}" name="created_by">
                                <input type="submit" value="Process" class="btn btn-primary pull-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection