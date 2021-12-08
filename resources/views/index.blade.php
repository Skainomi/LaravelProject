<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@extends('layouts.app')
@foreach ($data as $index => $item)
<div class="card mb-3" style="max-width: 540px;margin: 100px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{ asset($item->image) }}" style="width: 100%;height:100%;" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->email }}</p>
            <a href="edit-data/{{ $item->id }}" class="btn btn-primary" style="margin-bottom: 30px;">Update</a>
            <form action="/delete" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{ $item->id }}">
                <input type="submit" value="Delete" href="#" class="btn btn-primary">
            </form>
        </div>
        </div>
    </div>
</div>
@endforeach
