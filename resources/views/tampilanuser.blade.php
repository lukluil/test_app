@extends('template')

@section('main')
    <h2>Hello {{Auth::user()->name}}</h2>
    <p>Ini halaman User</p>
@endsection
