@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="http:\\" class="btn btn-outline-primary"></a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Master Kegiatan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Informasi</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>maling111</td>
                                <td>malingburung</td>
                                <td>29/04/20</td>
                                <td>transformasi</td>
                                <td>Be Your Self And Never Surrender</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection