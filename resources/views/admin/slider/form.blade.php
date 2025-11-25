
    <div class="row">
         <div class="mb-3 col-md-6">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="formTitle" placeholder="Enter a title for the item" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Description</label>
            <textarea class="form-control" name="short_desc" id="formDescription" rows="3" placeholder="Provide a detailed description"></textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formImage" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
            <div class="form-text">Upload a Slider Images. (Max size: 5MB)</div>
        </div>

        {{-- <div class="mb-3 col-md-6">
            <label for="formStatus" class="form-label">Status</label>
            <select class="form-select" id="formStatus" required>
                <option selected disabled value="">Choose...</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div> --}}
    </div>

    
    <div>
        <button type="submit" class="btn btn-primary">Submit Form</button>
        <a href="{{ route('slider.index') }}" class="btn btn-secondary">Back</a>
    </div>
