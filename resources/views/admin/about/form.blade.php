
    <div class="row">
         <div class="mb-3 col-md-4">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="formTitle" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->title : old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->designation : old('designation') }}">
            @error('designation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->email : old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->phone : old('phone') }}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->birth_date : old('birth_date') }}">
            @error('birth_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->age : old('age') }}">
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="short_desc" class="form-label">Short Desc</label>
            <textarea class="form-control" name="short_desc" id="formDescription" rows="3" placeholder="Provide a detailed description">{{ isset($about) ? $about->short_desc : old('short_desc') }}</textarea>
            @error('short_desc')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="long_desc" class="form-label">Long Desc</label>
            <textarea class="form-control" name="short_desc" id="formDescription" rows="3" placeholder="Provide a detailed description">{{ isset($about) ? $about->short_desc : old('short_desc') }}</textarea>
            @error('short_desc')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" class="form-control" name="degree" id="degree" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->degree : old('degree') }}">
            @error('degree')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->city : old('city') }}">
            @error('city')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Enter a title for the item" value="{{ isset($about) ? $about->country : old('country') }}">
            @error('country')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-md-4">
            @php
                // $freelances = \App\Http\Models\About::freelance();
                 $freelances = \App\Models\About::freelance();
            @endphp

            <label for="freelance" class="form-label">Freelance</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Choose...</option>
                @foreach($freelances as $freelance)
                    <option value="{{ $freelance}}">{{ $freelance}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 col-md-8">
            <label for="formImage" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
            <div class="form-text">Upload a about Images. (Max size: 5MB)</div>
        </div>
    </div>

    
    <div>
        @if(isset($about))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        <a href="{{ route('about.index') }}" class="btn btn-secondary">Back</a>
    </div>
