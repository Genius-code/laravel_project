@extends('backend.layout.app')
@section('title')
    Edit | Services
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Edit Services
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Edit Services</h5>
                        <p class="card-text">You can add your Service as you like at table below.</p>
                        <a href="{{route('services.index')}}" class="btn btn-primary">View All Services</a>
                    </div>
                </div>
                <!--Card Services -->
                <!-- Start Form Create Services -->
                <form method="post" action="{{route('services.update',['id' => $service->id])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Service name" value="{{$service->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Icon :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" placeholder="Service icon" value="{{$service->icon}}">
                    </div>
                    @error('icon')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$service->description}}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option value="select">Select</option>
                            <option value="on"@if($service->status === 'on') selected @else '' @endif >On</option>
                            <option value="off"@if($service->status === 'off') selected @else '' @endif >Off</option>
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

