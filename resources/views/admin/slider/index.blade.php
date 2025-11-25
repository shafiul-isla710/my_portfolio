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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
   </div>

@endsection