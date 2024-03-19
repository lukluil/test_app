@extends('template')

@section('main')
<h1>Ini halaman coba</h1>

<?php for ($i=1; $i <=10 ; $i++) { ?>
    <h1>Ini perulangan menggunakan php biasa </h1>
<?php } ?>

@for ($i=1; $i <=10 ; $i++)
    @if ($i % 2)
    <h1>Ini perulangan menggunakan blade </h1>
    @endif
@endfor

@php
    $no = 5;
    echo $no;
@endphp

<img src="{{ asset('img/hinata.png') }}" width="" alt="" srcset="">
@endsection





