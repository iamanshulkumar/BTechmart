{{-- -------------------------------------------------🔱HAR HAR MAHADEV🔱--------------------------------------------------------------- --}}
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">BTech Mart</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employee Role Setup</a></li>
                            <li class="breadcrumb-item active">Employee Role Setup</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Employee Role Setup</h4>
                    </div>
                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-md-12">
                                    <label for="exampleInputdate" class="form-label">Role Name</label>
                                    <input type="text" class="form-control search" placeholder="enter role name" />
                                </div>


                                <label for="exampleInputdate" class="form-label">Module Permissions</label>
                                <div class="col-md-6">
                                    <!-- Inline Switches -->
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Dashboard</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Agent Management</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Vendor Management</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Customer Management</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                    <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('failure'))
                    <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Employees Roles</h4>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <div class="row g-4 mb-3">
                                {{-- <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            data-bs-target="#signupModals">
                                            <i class="ri-add-line align-bottom me-1"></i> Add Employee
                                        </button>
                                        <button class="btn btn-soft-danger" onClick="deleteMultiple()">
                                            <i class="ri-delete-bin-2-line"></i>
                                        </button>
                                    </div>
                                </div> --}}
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search..." />
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option" />
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="customer_name">
                                                id
                                            </th>
                                            <th class="sort" data-sort="customer_name">
                                                Role Name
                                            </th>
                                            <th class="sort" data-sort="email">Modules</th>
                                            <th class="sort" data-sort="phone">Created_at</th>
                                            <th class="sort" data-sort="status">
                                                Status
                                            </th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1" />
                                                </div>
                                            </th>
                                            <td class="id" style="display: none">
                                                <a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#VZ2101</a>
                                            </td>
                                            <td class="id">1</td>
                                            <td class="customer_name">Mary Cousar</td>
                                            <td class="email">marycousar@velzon.com</td>
                                            <td class="date">06 Apr, 2021</td>
                                            <td class="status">
                                                <span
                                                    class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                            data-bs-toggle="modal" data-bs-target="#showeditrole">
                                                            Edit
                                                        </button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            id="deletewarning">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1" />
                                                </div>
                                            </th>
                                            <td class="id" style="display: none">
                                                <a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#VZ2101</a>
                                            </td>
                                            <td class="id">2</td>
                                            <td class="customer_name">Mary Cousar</td>
                                            <td class="email">marycousar@velzon.com</td>
                                            <td class="date">06 Apr, 2021</td>
                                            <td class="status">
                                                <span
                                                    class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-success edit-item-btn">
                                                            Edit
                                                        </button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            id="deletewarning">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a"
                                            style="width: 75px; height: 75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">
                                            We've searched more than 150+ Orders We did not
                                            find any orders for you search.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascrpit:void(0);">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascrpit:void(0);">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
    <div id="showeditrole" class="modal fadeInRight" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3 text-center">
                    <h4 class="card-title mb-0 ">BTech Mart</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-success  rounded-0 mb-0">
                    <p class="mb-0 text-center">Edit Employee Role</p>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Role Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <label for="exampleInputdate" class="form-label">Module Permissions</label>
                            <div class="col-md-12 flex-wrap d-flex flex-column gap-2">
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Dashboard</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Agent Management</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Vendor Management</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="inlineswitch">
                                        <label class="form-check-label" for="inlineswitch">Customer Management</label>
                                    </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#updatemodal">Update</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id="topmodal" class="modal zoomIn" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <lord-icon src="https://cdn.lordicon.com/pithnlch.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                    </lord-icon>
                    <div class="mt-4">
                        <h4 class="mb-3">Employee has been added successfully.</h4>
                        <p class="text-muted mb-4">Thanks for visiting BTech Mart..!!</p>
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id="updatemodal" class="modal zoomIn" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <lord-icon src="https://cdn.lordicon.com/pithnlch.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                    </lord-icon>
                    <div class="mt-4">
                        <h4 class="mb-3">Updated Successfully.!!!!</h4>
                        <p class="text-muted mb-4">Thanks for visiting BTech Mart..!!</p>
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("deletewarning").addEventListener("click", function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You want to delete this employee..?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                    cancelButtonClass: "btn btn-danger w-xs mt-2",
                    confirmButtonText: '<a href="#" class="text-white">Yes, delete it!</a>',
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            });
        });
    </script>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</x-app-layout>
