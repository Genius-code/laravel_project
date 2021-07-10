@extends('backend.layout.app')
@section('title')
    Dashboard | Index
@endsection

@section('content')
    @include('includes.sidebar_admin')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="{{route('admin.index')}}" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <h2>Section title</h2>
        <div class="table-responsive">

        </div>
    </main>
@endsection
