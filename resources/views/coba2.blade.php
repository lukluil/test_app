@extends('template')

@section('main')
<h2>Ini Adalah Gambar Ikan</h2>
@for ($i=1; $i<=3; $i++)
 <img src="{{ asset ('img/ikan.jpg')}}" width="50%" alt="">
@endfor
@endsection


