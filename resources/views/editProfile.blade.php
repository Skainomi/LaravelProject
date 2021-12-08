<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@extends('layouts.app')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="col-md-5 border-right">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile Settings</h4>
            </div>
            <form action="{{route('edit', $id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input name="name" type="text" class="form-control" placeholder="Enter Name" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input name="email" type="email" class="form-control" placeholder="Enter Email" value=""></div>
                    <div class="col-md-12"><label class="labels">Image</label><input name="file" type="file" class="form-control" placeholder="Add Image" value=""></div>
                </div>
            <div class="mt-5 text-center">
                <input type="submit" value="Save Profile" class="btn btn-primary profile-button" type="button">
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
