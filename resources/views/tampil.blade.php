@extends('template')

@section('main')
<h2>Data Siswa</h2>
<a href="{{route('siswa.create')}}" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama </th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
         <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nis}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
           {{-- <td><a href="{{url('siswa/'.$item->id.'/edit')}}"></a></td> //ini kalo menggunakan php pada biasanya--}}
            <td><a href="{{route('siswa.edit', $item->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{route('siswa.destroy', $item->id)}}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
          </tr>
        @endforeach

    </tbody>
  </table>
@endsection
