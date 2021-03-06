@extends('layout.main')
@section('title' , 'create data mahasiswa')
@section('content')
    
    {!! Form::open(['action' => 'MahasiswaController@store' , 'method'=>'POST' , 'class'=>'bg-white p-5'])!!}
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>Create Data Siswa</h5>
            </div>

        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-3  text-md-center">
                {!!   Form::label('nama', 'Nama' , ['class' => 'col-form-label']);  !!}
            </div>
            <div class="col-sm-12 col-md-9">
                {!! Form::text('nama' , '' , ['class'=>'form-control'] ) !!}
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-3  text-md-center">
                {!!   Form::label('nim', 'Nim' , ['class' => 'col-form-label']);  !!}
            </div>
            <div class="col-sm-12 col-md-3">
                {!! Form::number('nim' , '' , ['class'=>'form-control'] ) !!}
            </div>
            <div class="col-sm-12 col-md-3  text-md-center">
                {!!   Form::label('no_hp', 'No Hp' , ['class' => 'col-form-label']);  !!}
            </div>
            <div class=" col-sm-12 col-md-3">
                {!! Form::number('no_hp' , '' , ['class'=>'form-control'] ) !!}
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-3  text-md-center">
                {!!   Form::label('alamat', 'Alamat' , ['class' => 'col-form-label']);  !!}
            </div>
            <div class="col-sm-12 col-md-9">
                {!! Form::text('alamat' , '' , ['class'=>'form-control'] ) !!}
            </div>
        </div>
        <div class="row form-group text-md-right">
            <div class="col-xs-6 col-md-3 custom-control custom-radio">
                {!!     Form::radio('jenis_kelamin', 'L' , false , ['class'=>'custom-control-input' , 'id'=>'laki-laki']) !!}
                {!!     Form::label('laki-laki', 'Laki Laki' , ['class' => 'col-form-label custom-control-label']);  !!}
              
            </div>
            <div class="col-xs-6 col-md-3 custom-control custom-radio">
                {!!     Form::radio('jenis_kelamin', 'P' , false , ['class'=>'custom-control-input' , 'id'=>'perempuan']) !!}
                {!!     Form::label('perempuan', 'Perempuan' , ['class' => 'col-form-label custom-control-label']);  !!}
                
            </div>
            <div class="col-sm-12  col-md-2">
                {!!   Form::label('prodi', 'Prodi' , ['class' => 'col-form-label']);  !!}
            </div>
            <div class="col-sm-12 col-md-4">
                {!!   Form::select('prodi', $prodis, null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="row form-group text-md-center">
            <div class="col-12">
                {!!  Form::submit('save' , ['class'=> 'btn btn-purple btn-lg btn-submit'])  !!}
            </div>

        </div>
    

    {!! Form::close() !!}
    
@endsection