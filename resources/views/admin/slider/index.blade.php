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
            <div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($sliders))
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
                            <td>
                                <div>
                                    <a class="btn btn-primary btn-sm" href="{{ route('slider.edit', $slider->id) }}">Edit</a>
                                    <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this slider?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
   </div>

@endsection