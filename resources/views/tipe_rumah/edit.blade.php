@extends('layouts.admin')
@section('title') Ubah Data Tipe Rumah @endsection
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Tipe Rumah</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('tipe_rumah') }}">Tipe Rumah</a></li>
                <li class="active">Ubah</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Ubah Tipe Rumah</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        {{ Form::model($tipe_rumah, ['route' => ['tipe_rumah.update', $tipe_rumah->id], 'class'=>'form-horizontal form-bordered', 'method' => 'PUT']) }}
                            <div class="form-body">
                                @include('tipe_rumah.form')
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                                <a class="btn btn-default" href="{{ url('tipe_rumah') }}">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection