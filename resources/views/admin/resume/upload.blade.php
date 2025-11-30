@extends('admin.admin-layout.master')

@push('styles')
    <style>
        #form-card {
            margin-top: 50px;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush

@section('content')
    <div class="" id="form-card">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('resume-upload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.resume.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection