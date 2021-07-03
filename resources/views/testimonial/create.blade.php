@extends('layouts.master')
@section('title', 'Testimonial')
@section('content')
<form action="{{ route('testimonial.store') }}" method="POST">
    @CSRF
    <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
            <div class="content-viewport">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid">
                            <p class="grid-header">Input Types</p>
                            <div class="grid-body">
                                <div class="item-wrapper">
                                    <div class="row mb-3">
                                        <div class="col-md-8 mx-auto">
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="nama">Nama</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Testimonial">
                                                    <small class="text-danger">@error('nama') {{$message}}@enderror</small>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="arabic">Schools</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" name="schools" class="form-control @error('schools') is-invalid @enderror" placeholder="Masukkan Nama Universitasnya">
                                                    <small class="text-danger">@error('arabic') {{$message}}@enderror</small>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="arti">Comments</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <textarea name="comments" class="form-control @error('comments') is-invalid @enderror" cols="12" rows="5"></textarea>
                                                    <small class="text-danger">@error('arti') {{$message}}@enderror</small>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('testimonial.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                                                <button type="submit" class="m-1 btn btn-success">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection