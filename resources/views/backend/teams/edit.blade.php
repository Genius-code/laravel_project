@extends('backend.layout.app')

@section('title')
    Edit | Team
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Edit Team
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Edit Team</h5>
                        <p class="card-text">You can edit your Team as you like at table below.</p>
                        <a href="{{route('teams.index')}}" class="btn btn-primary">View All Team</a>
                    </div>
                </div>
                <!--Card Services -->
                <!-- Start Form Create Services -->
                <form method="post" action="{{route('teams.update',['team' => $team->id])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" value="{{$team->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Job :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="job" placeholder="job title" value="{{$team->job}}">
                    </div>
                    @error('job')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Twitter :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter_link" placeholder="twitter link" value="{{$team->twitter_link}}">
                    </div>
                    @error('twitter_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Facebook :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook_link" placeholder="facebook link" value="{{$team->facebook_link}}">
                    </div>
                    @error('facebook_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Linkedin :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="linkedin_link" placeholder="linkedin link" value="{{$team->linkedin_link}}">
                    </div>
                    @error('linkedin_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option value="">Select</option>
                            <option value="on" @if($team->status === 'on') selected @else '' @endif>On</option>
                            <option value="off" @if($team->status === 'off') selected @else '' @endif>Off</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <!-- End Form Create Services -->
            </div>
        </div>
    </div>
@endsection
