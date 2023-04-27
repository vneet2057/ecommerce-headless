@extends('admin.layout.main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Categories
        </h4>
        <div class="add-button">
            <a href="/admin/create-category" class="form-control btn btn-primary">Add Category +</a>
        </div>
    </div>




    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Categories</h4>
            <div class="search-container">
                <input type="text" id="search-input" class="form-control" placeholder="Search...">
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Product 3</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>

                        <td><a href="#" class="btn btn-primary btn-sm ms-2">Edit</a><button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#modalCenter">Delete</button></td>

                        <!-- modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Are you sure youn want to delete this item?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Yes</button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            No
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal ends -->

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    // Get the search input element
    const searchInput = document.querySelector('#search-input');

    // Add an event listener to the search input
    searchInput.addEventListener('keyup', function() {

        // Get the table rows
        const tableRows = document.querySelectorAll('tbody tr');

        // Loop through the table rows
        for (let i = 0; i < tableRows.length; i++) {

            // Get the table data in the current row
            const tableData = tableRows[i].querySelectorAll('td');

            // Set the row display to none by default
            tableRows[i].style.display = 'none';

            // Loop through the table data in the current row
            for (let j = 0; j < tableData.length; j++) {

                // If the table data matches the search input value
                if (tableData[j].textContent.toLowerCase().includes(searchInput.value.toLowerCase())) {

                    // Set the row display to table-row
                    tableRows[i].style.display = 'table-row';

                    // Exit the loop
                    break;

                }

            }

        }

    });
</script>
@endsection