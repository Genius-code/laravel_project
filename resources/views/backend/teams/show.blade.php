@extends('backend.layout.app')

@section('title')
    Team | Show
@endsection
@section('content')

    @include('includes.sidebar_admin')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="{{route('admin.index')}}" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <div class="card text-center col-sm-6 mx-auto mb-2">
            <div class="card-header">
                <h5 class="card-title">Team Item</h5>
            </div>
            <div class="card-body">

                <a href="{{route('teams.index')}}" class="btn btn-primary">Show All Team</a>
            </div>
        </div>
        <div class="table-responsive col-md-9 ml-sm-auto col-lg-10 mx-auto px-md-4">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Linkedin</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $id = 1;
                @endphp
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->job}}</td>
                    <td>{{$team->twitter_link}}</td>
                    <td>{{$team->facebook_link}}</td>
                    <td>{{$team->linkedin_link}}</td>
                    <td>{{$team->status}}</td>
                    <td>{{$team->created_at}}</td>
                    <td>{{$team->updated_at->diffForHumans()}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
