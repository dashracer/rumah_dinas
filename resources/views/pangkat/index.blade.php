@extends('layouts.admin')

@section('title') Data Pangkat @endsection

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pangkat</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="active">Pangkat</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <a href="{{ url('pangkat/create') }}" class="btn btn-info float-right">Tambah</a>
                <h3 class="box-title m-b-0">Daftar Pangkat</h3>
                <p class="text-muted m-b-30">Data pangkat pegawai BPKAD</p>
                <div class="table-responsive">
                    <table id="table_index" class="display nowrap color-table dark-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th class="text-right">Menu</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th class="text-right">Menu</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if ($list_pangkat->count() > 0)
                        @foreach($list_pangkat as $pangkat)
                            <tr>
                                <td>{{ $pangkat->golongan }}</td>
                                <td>{{ $pangkat->nama }}</td>
                                <td class="text-right">
                                    <a href="{{ url('pangkat/'. $pangkat->id . '/edit') }}" class="btn btn-warning"><i class="ti-pencil"></i> Ubah</a>
                                    <a href="javascript:submit('{{$pangkat->id}}')" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" ><i class="ti-trash"></i> Hapus</a>
                                    {{ Form::open(array('url' => 'pangkat/' . $pangkat->id, 'class' => 'pull-right', 'id' => 'delete'. $pangkat->id)) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                            @else
                        <tr>
                            <td colspan="3" class="text-center text-danger">Belum ada data</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('additional_script')
    <script>
        $('#table_index').DataTable({
            dom: 'Bfrtip'
            
        });

        function submit(id) {
            $('#delete' + id).submit();
        }
    </script>
@stop