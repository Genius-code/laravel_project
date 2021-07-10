@extends('backend.layout.app')

@section('title')
    Team | Create
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Create Team
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create New Team</h5>
                        <p class="card-text">You can add your Team as you like at table below.</p>
                        <a href="{{route('teams.index')}}" class="btn btn-primary">View All Team</a>
                    </div>
                </div>
                <!--Card Services -->
                <!-- Start Form Create Services -->
                <form method="post" action="{{route('teams.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Job :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="job" placeholder="job title" value="{{old('job')}}">
                    </div>
                    @error('job')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Twitter :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter_link" placeholder="twitter link" value="{{old('twitter_link')}}">
                    </div>
                    @error('twitter_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Facebook :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook_link" placeholder="facebook link" value="{{old('facebook_link')}}">
                    </div>
                    @error('facebook_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Linkedin :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="linkedin_link" placeholder="linkedin link" value="{{old('linkedin_link')}}">
                    </div>
                    @error('linkedin_link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option value="on">On</option>
                            <option value="off">Off</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <!-- End Form Create Services -->
            </div>
        </div>
    </div>
@endsection
