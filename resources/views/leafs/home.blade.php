@extends('layouts.app_layouts')                
@section('content')
    <main>
        <div class="container-fluid px-">
            <h1 class="mt-4">Home</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
            <div class="row">
                <div class="form-control col-md-3 mt-3">
                    <h3>Photo</h3>
                    <img style="height: 30vh" src="{{ url($data->bc_photo) }}" class="img-thumbnail">
                    <input type="file" id="bc_photo" name="bc_photo">
                </div>
                <div class="form-control col-md-4 mt-3">
                    <div>
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">   
                    </div>
                    <div>
                        <label for="sub_title">Sub Title</label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$data->sub_title}}">   
                    </div>
                    <div>
                        <h4>Upload Sketch</h4>
                        <input type="file" id="sketch" name="sketch">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mb-5">
        
        </div>
    </form>
    </main>
@endsection