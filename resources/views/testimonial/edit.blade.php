@extends('layouts.master')
@section('title', 'Testimonial')
@section('content')
<form action="{{ route('testimonial.update', [$testimonials->id]) }}" method="POST">
    @CSRF
    @method('put')
    <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
            <div class="content-viewport">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid">
                            <p class="grid-header">Edit Data</p>
                            <div class="grid-body">
                                <div class="item-wrapper">
                                    <div class="row mb-3">
                                        <div class="col-md-8 mx-auto">
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="nama">Nama</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Testimonial Terbaru" value="{{$testimonials->name}}">
                                                    <small class="text-danger">@error('nama') {{$message}}@enderror</small>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="arabic">Schools</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" name="schools" class="form-control @error('schools') is-invalid @enderror" placeholder="Masukkan Nama Universitas Terbaru" value="{{$testimonials->schools}}">
                                                    <small class="text-danger">@error('arabic') {{$message}}@enderror</small>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-md-3 showcase_text_area">
                                                    <label for="arti">Comments</label>
                                                </div>
                                                <div class="col-md-9 showcase_content_area">
                                                    <input type="text" name="comments" class="form-control @error('comments') is-invalid @enderror" placeholder="Masukkan Komen Terbaru" value="{{$testimonials->comments}}">
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