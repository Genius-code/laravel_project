@extends('backend.layout.app')

@section('title')
     Index | Services
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
                <h5 class="card-title">Services List</h5>
            </div>
            <div class="card-body">

                <a href="{{route('services.create')}}" class="btn btn-primary">Create New Service</a>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success text-center"><strong>{{session('success')}}</strong></div>
        @elseif(session('update'))
            <div class="alert alert-info text-center"><strong>{{session('update')}}</strong></div>
        @elseif(session('msg'))
            <div class="alert alert-danger text-center"><strong>{{session('msg')}}</strong></div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @isset($services)
                        @if($services->count() > 0)
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$id++}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>
                                        @empty($service->icon)
                                            <span>No Icon</span>
                                        @else
                                            {{$service->icon}}
                                        @endif
                                    </td>
                                    <td><a href="{{route('services.show',['id' => $service->id])}}" class="btn btn-success">Show</a></td>
                                    <td><a href="{{route('services.edit',['id' => $service->id])}}" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="{{route('services.delete',['id' => $service->id])}}" method="post" >
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
