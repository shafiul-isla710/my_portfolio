
    <div class="row">
         <div class="mb-3 col-md-6">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="formTitle" placeholder="Enter a title for the item" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formDescription" class="form-label">Description</label>
            <textarea class="form-control" id="formDescription" rows="3" placeholder="Provide a detailed description"></textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formImage" class="form-label">Image</label>
            <input class="form-control" type="file" id="formImage" accept="image/*">
            <div class="form-text">Upload a product or item image. (Max size: 5MB)</div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="formStatus" class="form-label">Status</label>
            <select class="form-select" id="formStatus" required>
                <option selected disabled value="">Choose...</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Form</button>
    <button type="reset" class="btn btn-secondary">Back</button>
