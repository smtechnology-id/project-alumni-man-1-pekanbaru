@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Alumni</h4>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.export-data-alumni') }}" class="btn btn-primary mb-3" style="background-color: #209E62; border: none; color: white;">Download Data (Excel)</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Lulus</th>
                                <th>Domisili</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumni as $item)
                            <tr>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tahun_lulus }}</td>
                                <td>{{ $item->provinsi }}-{{ $item->kabupaten }}-{{ $item->kecamatan }}-{{ $item->desa
                                    }}
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detailModal{{ $item->id }}">
                                        <i class="material-icons">
                                            visibility
                                        </i>
                                    </button>
                                    <a href="{{ route('admin.delete-data-alumni', $item->id) }}" class="btn btn-danger">
                                        <i class="material-icons">
                                            delete
                                        </i>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="detailModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="detailModalLabel">Detail Alumni</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>:</td>
                                                            <td>{{ $item->nama_lengkap }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Kelamin</td>
                                                            <td>:</td>
                                                            <td>{{ $item->jenis_kelamin }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Lulus</td>
                                                            <td>:</td>
                                                            <td>{{ $item->tahun_lulus }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Domisili</td>
                                                            <td>:</td>
                                                            <td>{{ $item->provinsi }}-{{ $item->kabupaten }}-{{
                                                                $item->kecamatan }}-{{ $item->desa }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor Telepon</td>
                                                            <td>:</td>
                                                            <td>{{ $item->no_hp }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facebook</td>
                                                            <td>:</td>
                                                            <td>{{ $item->facebook }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Instagram</td>
                                                            <td>:</td>
                                                            <td>{{ $item->instagram }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pendidikan Terakhir</td>
                                                            <td>:</td>
                                                            <td>{{ $item->pendidikan_terakhir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kuliah</td>
                                                            <td>:</td>
                                                            <td>{{ $item->kuliah }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bekerja</td>
                                                            <td>:</td>
                                                            <td>{{ $item->bekerja }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Berkeluarga</td>
                                                            <td>:</td>
                                                            <td>{{ $item->berkeluarga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Menganggur</td>
                                                            <td>:</td>
                                                            <td>{{ $item->menganggur }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Perguruan Tinggi</td>
                                                            <td>:</td>
                                                            <td>{{ $item->jenis_perguruan_tinggi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Masuk</td>
                                                            <td>:</td>
                                                            <td>{{ $item->tahun_masuk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Perguruan Tinggi</td>
                                                            <td>:</td>
                                                            <td>{{ $item->nama_perguruan_tinggi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Program Studi</td>
                                                            <td>:</td>
                                                            <td>{{ $item->program_studi }}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection