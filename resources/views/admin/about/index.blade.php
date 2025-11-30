@extends('admin.admin-layout.master')

@section('content')

   <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">about List</h1>
            <a class="btn btn-success" href="{{ route('about.create') }}">Add About</a>
        </div>

         <table class="table table-striped text-center align-middle">
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
                    <th scope="col">Designation</th>
                    <th scope="col">Age</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Freelance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($abouts))
                    @foreach($abouts as $about)
                        <tr>
                        {{-- @dd($about->image) --}}
                            <th>
                                <img src="{{ 'storage/'. $about->image }}" style="width: 50px; height: 50px; border-radius: 80%;" alt="">
                            </th>
                            <td>{{ $about->designation }}</td>
                            <td>{{ $about->age }}</td>
                            <td>{{ $about->birth_date }}</td>
                            <td>{{ $about->phone }}</td>
                            <td>{{ $about->email }}</td>
                            <td>{{ $about->degree }}</td>
                            <td>{{ $about->country }}</td>
                            <td>{{ $about->city }}</td>
                            <td>{{ $about->freelance }}</td>
                            <td>
                                <div>
                                    <a class="btn btn-primary btn-sm" href="{{ route('about.edit', $about->id) }}">Edit</a>
                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this about?')">Delete</button>
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