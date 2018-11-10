@extends('layout.main')
@section('title','mahasiswa')

@section('content')
    <div class="row mb-3">
        <div class="col-3 pt-1">
            <h6 class="font-roboto">Data Mahasiswa</h6>
        </div>
        <div class="col-9 text-right ">
            <a class="btn btn-sm btn-purple " style="width : 100px !important" href="mahasiswa/create">create</a>
        </div>
    </div>
    
    <table class="table bg-white table-responsive">
        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td> {{ $mahasiswa->nim }}</td>
                <td> {{ $mahasiswa->nama }}  </td>
                <td> {{ $mahasiswa->alamat }}    </td>
                <td> {{ $mahasiswa->no_hp }}   </td>
                <td> 
                    @if ($mahasiswa->jenis_kelamin == 'L')
                        laki laki
                    @else
                        perempuan
                    @endif
                </td>
                <td> {{$mahasiswa->prodi->nama_prodi}}</td>
                <td>
                    <a class="btn btn-sm btn-success btn-table" href="mahasiswa/{{$mahasiswa->id}}/edit">edit</a>
                </td>
                <td>
                    {!! Form::open(['action'=>['MahasiswaController@destroy' , $mahasiswa->id] , 'method' => 'delete']) !!}
                        {!! Form::submit('delete' , ['class' => 'btn btn-sm btn-danger btn-table']); !!}
                    {!! Form::close() !!}
                </td>
            </tr> 
        @endforeach
    </table>
   
@endsection
