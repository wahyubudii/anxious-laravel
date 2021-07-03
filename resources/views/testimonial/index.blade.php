@extends('layouts.master')
@section('title', 'Testimonial')
@section('content')
<!-- partial content -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="viewport-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb has-arrow">
                    <li class="breadcrumb-item">
                        <a href="auths.admin">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
        <div class="content-viewport">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        <div class="grid-header">
                            <div class="d-flex justify-content-between">
                                <h3>Data table of Testimonial</h3>
                                <a href="{{ route('testimonial.create') }}" class="btn btn-sm btn-success">Create</a>
                            </div>
                        </div>
                        <div class="item-wrapper">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Schools</th>
                                            <th>Comments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td style="width: 1%;">{{$loop->iteration}}</td>
                                            <td style="width: 19%;">{{$testimonial->name}}</td>
                                            <td style="width: 20%;">{{$testimonial->schools}}</td>
                                            <td style="width:40%; white-space: initial;">{{$testimonial->comments}}</td>
                                            <td class="actions" style="width: 15%;">
                                                <a href="{{ route('testimonial.edit', [$testimonial->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                                <form action="{{ route('testimonial.destroy', [$testimonial->id]) }}" method="POST">@method('delete')@csrf<button type="submit" class="btn btn-sm btn-danger">Delete</form>
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
        </div>
    </div>
</div>
@endsection