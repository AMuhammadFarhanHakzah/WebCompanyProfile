@extends('layouts.template')
@section('judul')
    Update pengumuman
@endsection

@section('main')
    <section class="inner-page mt-4">
        <div class="container">
            @include('errors.message')
            <H2>Update pengumuman</H2>
            <form id="pengumumanForm" action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST"
                onsubmit='return confirmSubmit()'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control"
                                value="{{ $pengumuman->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="konten">konten</label>
                            <textarea type="text" name="konten" class="form-control ckeditor">{{ $pengumuman->konten }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
                        </div>
                        <div class="form-group">
                            <a href="{{route('pengumuman.delete', $pengumuman->id)}}" class="btn btn-danger" style="float:right; margin-right: 1em;">
                                Delete
                            </a>
                        </div>
                        {{-- <div class="form-group">
                            <form action="{{ route('pengumuman.delete', $pengumuman->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    style="float: right;"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data pengumuman ini?')">Delete 
                                </button>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('extrajs')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        function confirmSubmit() {
            var r = confirm('Lanjutkan pengupdate-an data?');

        }
    </script>
@endsection
