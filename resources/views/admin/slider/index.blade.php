@extends('admin.admin-layout.master')

@section('content')

      {{-- <div class="container">
         <form action="">
            <div class="row">
               <div class="col-12">
                  <h1 class="text-center">Slider List</h1>
               </div>
               <div class="col-md-6">
                  <label for="title"></label>
               </div>
            </div>
         </form>
      </div> --}}

   <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Slider List</h1>
            <a class="btn btn-success" href="{{ route('slider.create') }}">Add Slider</a>
        </div>

         <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
               @foreach($sliders as $slider)
                <tr>
                  {{-- @dd($slider->image) --}}
                    <th>
                        <img src="{{ 'storage/'. $slider->image }}" style="width: 50px; height: 50px; border-radius: 80%;" alt="">
                    </th>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->short_desc }}</td>
                    <td>
                        @if($slider->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
   </div>

@endsection