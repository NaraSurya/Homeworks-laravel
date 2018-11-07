@extends('layout.main')
@section('title','Prodi')

@section('content')
    <div class="row mb-3">
        <div class="col-3 pt-1">
            <h6 class="font-roboto">Data Prodi</h6>
        </div>
        <div class="col-9 text-right ">
            <a class="btn btn-sm btn-purple " style="width : 100px !important" href="prodi/create">create</a>
        </div>
    </div>
    
    <table class="table bg-white">
        @foreach ($prodis as $prodi)
            <tr>
                
                <td> {{ $prodi->nama_prodi }}  </td>
                <td class="text-right d-flex flex-row-reverse ">
                    {!! Form::open(['action' => ['ProdiController@destroy' , $prodi->id] , 'method' => 'delete']) !!}
                        {!! Form::submit('delete' , ['class' => 'btn btn-sm btn-danger btn-table mx-3']); !!}
                    {!! Form::close() !!}
                    <a class="btn btn-sm btn-success btn-table mx-3" href="prodi/{{$prodi->id}}/edit">edit</a>
                    <a href="prodi/{{$prodi->id}}" class="btn btn-sm btn-primary btn-table mx-3">view</a> 
                   
                </td>
            </tr> 
        @endforeach
    </table>
   
@endsection
