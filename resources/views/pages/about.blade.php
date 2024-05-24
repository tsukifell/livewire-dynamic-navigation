@extends('layouts.master')
@section('content')
    @livewire('about-content-section', ['about' => $about])
@endsection
