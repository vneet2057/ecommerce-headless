@extends('admin.layout.main')
@section('content')





<div class="container-xxl flex-grow-1 container-p-y">

  <!-- toaster  message -->
  @if(session('success'))
  <div id="success-toast" class="bs-toast toast toast-placement-ex m-2 fade bg-primary top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <i class="bx bx-bell me-2"></i>
      <div class="me-auto fw-semibold">Alert</div>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{session('success')}}.</div>
  </div>
  @endif

  @if(session('error'))
  <div id="error-toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <i class="bx bx-bell me-2"></i>
      <div class="me-auto fw-semibold">Bootstrap</div>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{session('error')}}.</div>
  </div>
  @endif

  <script>
    // Get the toast elements by ID
    var successToast = document.getElementById("success-toast");
    var errorToast = document.getElementById("error-toast");

    // Show the toasts
    if (successToast) {
      successToast.classList.add("fade", "show");
    }
    if (errorToast) {
      errorToast.classList.add("fade", "show");
    }

    // Hide the toasts after 5 seconds
    setTimeout(function() {
      if (successToast) {
        successToast.classList.remove("show");
      }
      if (errorToast) {
        errorToast.classList.remove("show");
      }
      // Remove the toasts from the DOM after they have faded out
      setTimeout(function() {
        if (successToast) {
          successToast.remove();
        }
        if (errorToast) {
          errorToast.remove();
        }
      }, 500);
    }, 5000);
  </script>

  <!-- toaster message ends -->


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

          <!-- @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif -->
          <form action="/admin/add-category" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Category Name <strong class="text-danger">*</strong> </label>
              <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" id="basic-default-fullname" placeholder="Clothes">
              @if ($errors->has('category_name'))
              <div class="error-message text-danger">{{ $errors->first('category_name') }}</div>
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Category Code <strong class="text-danger">*</strong> </label>
              <input type="text" class="form-control" name="category_code" value="{{ old('category_code') }}" id="basic-default-fullname" placeholder="CT001">
              @if ($errors->has('category_code'))
              <div class="error-message text-danger">{{ $errors->first('category_code') }}</div>
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Parent Category</label>
              <select type="text" class="form-control" name="primary_category_id">
                <option value="">Select if any</option>
                @foreach($categories as $category)
                <option value="">{{$category->category_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Category Icon (optional)</label>
              <input type="file" class="form-control" value="{{ old('category_icon') }}" name="category_icon">
              @if ($errors->has('category_icon'))
              <div class="error-message text-danger text-danger">{{ $errors->first('category_icon') }}</div>
              @endif
            </div>


            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Description (optional)</label>
              <textarea id="basic-default-message" name="category_description" value="{{ old('category_description') }}" class="form-control" name="message" placeholder="Some description about the category"></textarea>
              @if ($errors->has('category_description'))
              <div class="error-message text-danger">{{ $errors->first('category_description') }}</div>
              @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit and add next</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>

@endsection