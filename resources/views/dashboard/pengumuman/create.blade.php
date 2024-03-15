@extends('layouts.template')
@section('judul')
    Create pengumuman
@endsection

@section('main')
    <section class="inner-page mt-4">
        <div class="container">
            @include('errors.message')
            <H2>Create pengumuman</H2>
            <form id="pengumumanForm" action="{{ route('pengumuman.store') }}" method="POST" onsubmit='return confirmSubmit()'>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="{{old('judul')}}">
                        </div>
                        <div class="form-group">
                            <label for="konten">konten</label>
                            <textarea type="text" name="konten" class="form-control ckeditor">{{old('konten')}}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="float: right;">Save</button>
                            </div>
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
                var r = confirm('Lanjutkan penyimpanan data?');
                
            }
        </script>
@endsection
