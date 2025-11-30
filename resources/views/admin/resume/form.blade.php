
    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="resume" class="form-label">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" name="resume" id="resume" accept=".pdf">
            <div class="form-text">Upload a Resume. (Max size: 5MB)</div>
            @error('resume')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div>
        @if(isset($resume))
            <button type="submit" class="btn btn-primary">Update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        {{-- <a href="" class="btn btn-secondary">Back</a> --}}
    </div>
