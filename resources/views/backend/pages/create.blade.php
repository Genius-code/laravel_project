@extends('backend.layout.app')
@section('title')
    Create | Pages
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Create Pages
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create New Page</h5>
                        <p class="card-text">You can add your Page as you like at table below.</p>
                        <a href="{{route('pages.index')}}" class="btn btn-primary">View All Pages</a>
                    </div>
                </div>
                <!--Card Services -->
                <!-- Start Form Create Services -->
{{--                @if(session('success'))--}}
{{--                    <div class="alert alert-success text-center">--}}
{{--                        {{session('success')}}--}}
{{--                    </div>--}}
{{--                @endif--}}
                <form method="post" action="{{route('pages.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" placeholder="link" value="{{old('link')}}">
                    </div>
                    @error('Link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Order :</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="order" placeholder="order" value="{{old('order')}}">
                    </div>
                    @error('order')
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
