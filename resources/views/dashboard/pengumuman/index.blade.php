@extends('layouts.template')
@section('judul')
    Kelola pengumuman
@endsection

@section('main')
    <section class="inner-page mt-4">
        <div class="container-fluid">
            @include('errors.message')

            <a href="{{ route('pengumuman.create') }}" class="btn btn-success btn-lg">
                Create pengumuman
            </a>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> List Pengumuman </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped" style="width: 100%;">
                                    <thead class="text-center">
                                        <th width="50px">no</th>
                                        <th>Judul</th>
                                        <th>Konten</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($dataPengumuman as $key => $dp)
                                            <tr>
                                                <td width="50px">
                                                    {{ ++$key }}
                                                </td>
                                                <td>
                                                    {{ $dp->judul }}
                                                </td>
                                                <td>
                                                    {{ $dp->konten }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('pengumuman.show', $dp->id) }}"
                                                        class="btn btn-primary mt-4">Edit</a>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
