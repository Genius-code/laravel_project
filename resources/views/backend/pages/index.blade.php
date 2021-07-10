@extends('backend.layout.app')
@section('title')
    Index | Pages
@endsection
@section('content')
    @include('includes.sidebar_admin')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="{{route('admin.index')}}" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <div class="card text-center col-sm-6 mx-auto mb-2">
            <div class="card-header">
                <h5 class="card-title">Pages List</h5>
            </div>
            <div class="card-body">

                <a href="{{route('pages.create')}}" class="btn btn-primary">Create New Page</a>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success text-center"><strong>{{session('success')}}</strong></div>
        @elseif(session('update'))
            <div class="alert alert-info text-center"><strong>{{session('update')}}</strong></div>
        @elseif(session('del'))
            <div class="alert alert-danger text-center"><strong>{{session('del')}}</strong></div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>order</th>
                    <th>Status</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $id = 1;
                @endphp
                @isset($pages)
                    @if($pages->count() > 0)
                        @foreach($pages as $page)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$page->name}}</td>
                                <td>{{$page->link}}</td>
                                <td>{{$page->order}}</td>
                                <td>{{$page->status}}</td>
                                <td><a href="{{route('pages.show',['page' => $page->id])}}" class="btn btn-success">Show</a></td>
                                <td><a href="{{route('pages.edit',['page' => $page->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{route('pages.destroy',['page' => $page->id])}}" method="post" >
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endisset
                </tbody>
            </table>
        </div>
    </main>
@endsection
