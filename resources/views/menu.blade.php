@extends('layouts.main')

@section('title', 'Menu')

@section('content')
    <div class="container-fluid py-5" style="background-color: #D9D9D9; position: relative; height: 65vh; overflow: hidden;">
        <!-- Right Image (Full-Size Background) -->
        <img src="{{ asset('images/bg-menu-right.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;" alt="Right Background Image">

        <!-- Left Image (On Top of Background) -->
        <img src="{{ asset('images/bg-menu-left.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 40%; height: auto; object-fit: contain; z-index: 2;" alt="Left Overlay Image">
    </div>
@endsection
