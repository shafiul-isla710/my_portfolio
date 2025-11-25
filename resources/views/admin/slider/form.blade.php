
    <div class="row">
         <div class="mb-3 col-md-6">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="formTitle" placeholder="Enter a title for the item" value="{{ isset($slider) ? $slider->title : old('title') }}">
        </div>

        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Description</label>
            <textarea class="form-control" name="short_desc" id="formDescription" rows="3" placeholder="Provide a detailed description">
                {{ isset($slider) ? $slider->short_desc : old('short_desc') }}
            </textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formImage" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
            <div class="form-text">Upload a Slider Images. (Max size: 5MB)</div>
        </div>

        @if(isset($slider))
            <div class="mb-3 col-md-6">
                <label for="formStatus" class="form-label">Status</label>
                <select class="form-select" name="status" id="formStatus" required>
                    <option disabled value="">Choose...</option>
                    <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $slider->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        @endif
    </div>

    
    <div>
        @if(isset($slider))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        <a href="{{ route('slider.index') }}" class="btn btn-secondary">Back</a>
    </div>
