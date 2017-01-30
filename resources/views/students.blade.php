@extends('layout.master')

@section('content')

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Welcome to DES(Data Export System)</h2>
        </div>
    </div>
    <form action="{!! route('search') !!}" method="post">
        {!! csrf_field() !!}
        <div class="row medium-margin-top">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input name="query" type="text" class="form-control input-lg"
                           placeholder="Student Name, Email, University or Course">

                    <span class="input-group-btn">
                  <button class="btn btn-primary input-lg" type="submit">
                     <i class="fa fa-search"></i> Search
                  </button>
               </span>
                </div>
            </div>
        </div>
    </form>

    <form action="{!! route('export') !!}" method="post">
        {!! csrf_field() !!}
        <div class="row margin-top">
            <div class="col-md-12 ">
                <button id="js-select" class="btn btn-primary" type="button"><i class="fa fa-check"></i> Select All
                </button>
                <button disabled id="js-export" class="btn btn-info" type="submit"><i class="fa fa-download"></i> Export</button>
                <a href="{!! route('export.attendence') !!}" class="btn btn-success" type="button"><i
                            class="fa fa-download"></i> Export Course Attendence</a>
            </div>
        </div>
        @include('partials._students_records', ['$students' => $students])
    </form>
@endsection