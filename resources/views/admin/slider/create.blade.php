@extends('admin.admin-layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.slider.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection