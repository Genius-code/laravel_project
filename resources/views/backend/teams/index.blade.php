@extends('backend.layout.app')

@section('title')
    Team | Index
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
                <h5 class="card-title">Team List</h5>
            </div>
            <div class="card-body">

                <a href="{{route('teams.create')}}" class="btn btn-primary">Create New Person</a>
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
                    <th>Job</th>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Linkedin</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $id = 1;
                @endphp
                @isset($rows)
                    @if($rows->count() > 0)
                        @foreach($rows as $row)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->job}}</td>
                                <td>{{$row->twitter_link}}</td>
                                <td>{{$row->facebook_link}}</td>
                                <td>{{$row->linkedin_link}}</td>
                                <td><a href="{{route('teams.show',['team' => $row->id])}}" class="btn btn-success">Show</a></td>
                                <td><a href="{{route('teams.edit',['team' => $row->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{route('teams.destroy',['team' => $row->id])}}" method="post" >
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
