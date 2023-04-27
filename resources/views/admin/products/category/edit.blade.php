@extends('admin.layout.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <div class="d-flex justify-content-between align-items-center">
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Home /</span>Add Category
    </h4>
    <div class="add-button">
      <a href="/admin/categories" class="form-control btn btn-primary">Back < </a>
    </div>
  </div>

  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Add category details</h5>
          <small class="text-danger float-end">Fields with (*) is required</small>
        </div>
        <div class="card-body">
          <form action="send-message" method="post">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Category Name <strong class="text-danger">*</strong> </label>
              <input type="text" class="form-control" name="category_name" id="basic-default-fullname" placeholder="John Doe">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Category Code <strong class="text-danger">*</strong> </label>
              <input type="text" class="form-control" name="category_code" id="basic-default-fullname" placeholder="John Doe">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Parent Category</label>
              <select type="text" class="form-control" name="primary_category_id">
                <option value="">Select if any</option>
                <option value="">Cloths</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Category Icon (optional)</label>
              <input type="file" class="form-control" name="category_icon">
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Description (optional)</label>
              <textarea id="basic-default-message" name="category_icon" class="form-control" name="message" placeholder="Some description about the category"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit and add next</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>

@endsection