@extends('layouts.app')
@section('title','Library')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Library Control</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ ('/listBook') }}" class="btn btn-primary btn-flat btn-block">List Book</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ ('/newBook') }}" class="btn btn-success btn-flat btn-block">New Book</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ ('/newTrans') }}" class="btn btn-danger btn-flat btn-block">New Transaction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection