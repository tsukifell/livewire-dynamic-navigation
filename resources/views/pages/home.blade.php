@extends('layouts.master')
@section('content')
    @livewire('home-content-section', ['home' => $home])
@endsection
