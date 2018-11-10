@extends('layout.main')
@section('title' , 'create data prodi')
@section('content')
    
    {!! Form::open(['action' => 'ProdiController@store' , 'method'=>'POST' , 'class'=>'bg-white p-5'])!!}
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>Create Data Prodi</h5>
            </div>
        </div>
       <div class="row form-group">
        <div class="col-sm-12 col-md-2">
            {!! Form::label('prodi' , 'Nama prodi') !!}
        </div>
        <div class="col-sm-12 col-md-8">
            {!! Form::text('nama_prodi','', ['class'=>'form-control mb-3']) !!}
        </div>
        <div class="col-sm-12 text-sm-center col-md-2">
            {!! Form::submit('save' , ['class'=>'btn btn-md btn-table btn-success'])!!}
        </div>
       </div>

    {!! Form::close() !!}
    
@endsection