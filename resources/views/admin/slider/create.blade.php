@extends('admin.admin-layout.master')

@push('styles')
  <style>
    #form-card {
      margin-top: 80px;
    }
  </style>
@endpush

@section('content')

    <div class="container" id="form-card">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.slider.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection