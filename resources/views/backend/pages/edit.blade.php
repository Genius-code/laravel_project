@extends('backend.layout.app')
@section('title')
    Edit | Pages
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar_admin')
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Edit Pages
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Edit Pages</h5>
                        <p class="card-text">You can edit your Page as you like at table below.</p>
                        <a href="{{route('pages.index')}}" class="btn btn-primary">View All Pages</a>
                    </div>
                </div>
                <!--Card Services -->
                @if(session('update'))
                    <div class="alert alert-success text-center">{{session('update')}}</div>
                @endif
                <!-- Start Form Create Services -->
                <form method="post" action="{{route('pages.update',['page' => $page->id])}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Page name" value="{{$page->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" placeholder="Page Link" value="{{$page->link}}">
                    </div>
                    @error('link')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Order :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="order" placeholder="Page order" value="{{$page->order}}">
                    </div>
                    @error('order')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option value="select">Select</option>
                            <option value="on"@if($page->status === 'on') selected @else '' @endif >On</option>
                            <option value="off"@if($page->status === 'off') selected @else '' @endif >Off</option>
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
