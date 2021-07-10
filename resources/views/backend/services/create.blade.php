@extends('backend.layout.app')
@section('title')
    Create | Services
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Create Services
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create New Services</h5>
                        <p class="card-text">You can add your Service as you like at table below.</p>
                        <a href="{{route('services.index')}}" class="btn btn-primary">View All Services</a>
                    </div>
                </div>
                <!--Card Services -->
                @if(Session('msg'))
                    <div class="alert alert-success"><strong>{{Session('msg')}}</strong></div>
                    @endif
                <!-- Start Form Create Services -->
                <form method="post" action="{{route('services.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Icon :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" placeholder="icon" value="{{old('icon')}}">
                    </div>
                    @error('icon')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{old('description')}}</textarea>
                    </div>
                    @error('description')
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

