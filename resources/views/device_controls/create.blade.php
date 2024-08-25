@extends('layouts/layoutMaster')

@section('title', 'Lista de Objetos IOT')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
@endsection

@section('content')


    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">IOT /</span> Crear control del dispositivo
            </h4>

            <!-- Invoice List Widget -->

            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h3 class="mb-1">24</h3>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-user bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h3 class="mb-1">165</h3>
                                        <p class="mb-0">Invoices</p>
                                    </div>
                                    <div class="avatar me-lg-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-file bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                    <div>
                                        <h3 class="mb-1">$2.46k</h3>
                                        <p class="mb-0">Paid</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-check-double bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="mb-1">$876</h3>
                                        <p class="mb-0">Unpaid</p>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-error-circle bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice List Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row mx-1">
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                                <div
                                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
                                    <div class="dt-buttons">
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                        Crear variable de control
                                      </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-3">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"
                                            class="form-control" placeholder="Search Invoice"
                                            aria-controls="DataTables_Table_0"></label></div>
                                <div class="invoice_status mb-3 mb-md-0"><select id="UserRole" class="form-select">
                                        <option value=""> Select Status </option>
                                        <option value="Downloaded" class="text-capitalize">Downloaded</option>
                                        <option value="Draft" class="text-capitalize">Draft</option>
                                        <option value="Paid" class="text-capitalize">Paid</option>
                                        <option value="Partial Payment" class="text-capitalize">Partial Payment</option>
                                        <option value="Past Due" class="text-capitalize">Past Due</option>
                                        <option value="Sent" class="text-capitalize">Sent</option>
                                    </select></div>
                            </div>
                        </div>
                        <table class="invoice-list-table table border-top dataTable no-footer dtr-column"
                            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1347px;">
                            <thead>
                                <tr>
                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 103px;"
                                        aria-label="#ID: activate to sort column ascending" aria-sort="descending">#ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 76px;"
                                        aria-label=": activate to sort column ascending"><i class="bx bx-trending-up"></i>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 349px;"
                                        aria-label="Client: activate to sort column ascending">Client</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 100px;"
                                        aria-label="Total: activate to sort column ascending">Total</th>
                                    <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 172px;"
                                        aria-label="Issued Date: activate to sort column ascending">Issued Date</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 129px;"
                                        aria-label="Balance">Balance</th>
                                    <th class="cell-fit sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 80px;" aria-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4748</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Downloaded<br> Balance: 0<br> Due Date: 06/07/2020</span>"
                                            data-bs-original-title="<span>Downloaded<br> Balance: 0<br> Due Date: 06/07/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30"><i
                                                    class="bx bx-down-arrow-circle bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><span
                                                        class="avatar-initial rounded-circle bg-label-dark">RG</span></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Ruddie
                                                        Gabb</span></a><small class="text-truncate text-muted">UI/UX Design
                                                    &amp; Development</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">5591</span>$5591</td>
                                    <td><span class="d-none">20200607</span>07 Jun 2020</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4743</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Downloaded<br> Balance: $731<br> Due Date: 12/15/2020</span>"
                                            data-bs-original-title="<span>Downloaded<br> Balance: $731<br> Due Date: 12/15/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30"><i
                                                    class="bx bx-down-arrow-circle bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/9.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Britteny
                                                        Barham</span></a><small class="text-truncate text-muted">UI/UX
                                                    Design &amp; Development</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">3668</span>$3668</td>
                                    <td><span class="d-none">20201215</span>15 Dec 2020</td>
                                    <td><span class="d-none">$731</span>$731</td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4716</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Partial Payment<br> Balance: 0<br> Due Date: 10/18/2020</span>"
                                            data-bs-original-title="<span>Partial Payment<br> Balance: 0<br> Due Date: 10/18/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30"><i
                                                    class="bx bx-adjust bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/3.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Ninette
                                                        Forde</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">2872</span>$2872</td>
                                    <td><span class="d-none">20201018</span>18 Oct 2020</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4687</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Paid<br> Balance: -$205<br> Due Date: 02/10/2021</span>"
                                            data-bs-original-title="<span>Paid<br> Balance: -$205<br> Due Date: 02/10/2021</span>"><span
                                                class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30"><i
                                                    class="bx bx-pie-chart-alt bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/9.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Peggy
                                                        Viccary</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">4309</span>$4309</td>
                                    <td><span class="d-none">20210210</span>10 Feb 2021</td>
                                    <td><span class="d-none">-$205</span>-$205</td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4683</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Downloaded<br> Balance: 0<br> Due Date: 12/08/2020</span>"
                                            data-bs-original-title="<span>Downloaded<br> Balance: 0<br> Due Date: 12/08/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30"><i
                                                    class="bx bx-down-arrow-circle bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Isidor
                                                        Navarro</span></a><small class="text-truncate text-muted">Software
                                                    Development</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">2060</span>$2060</td>
                                    <td><span class="d-none">20201208</span>08 Dec 2020</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4677</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Paid<br> Balance: 0<br> Due Date: 05/22/2020</span>"
                                            data-bs-original-title="<span>Paid<br> Balance: 0<br> Due Date: 05/22/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30"><i
                                                    class="bx bx-pie-chart-alt bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/2.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Syman
                                                        Asbery</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">3503</span>$3503</td>
                                    <td><span class="d-none">20200522</span>22 May 2020</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4651</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Draft<br> Balance: 0<br> Due Date: 10/22/2020</span>"
                                            data-bs-original-title="<span>Draft<br> Balance: 0<br> Due Date: 10/22/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30"><i
                                                    class="bx bxs-save bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Jennica
                                                        Aronov</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">2783</span>$2783</td>
                                    <td><span class="d-none">20201022</span>22 Oct 2020</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4632</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Draft<br> Balance: 0<br> Due Date: 03/06/2021</span>"
                                            data-bs-original-title="<span>Draft<br> Balance: 0<br> Due Date: 03/06/2021</span>"><span
                                                class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30"><i
                                                    class="bx bxs-save bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><span
                                                        class="avatar-initial rounded-circle bg-label-danger">EG</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Eadith
                                                        Garshore</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">5565</span>$5565</td>
                                    <td><span class="d-none">20210306</span>06 Mar 2021</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4593</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Draft<br> Balance: $361<br> Due Date: 03/02/2021</span>"
                                            data-bs-original-title="<span>Draft<br> Balance: $361<br> Due Date: 03/02/2021</span>"><span
                                                class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30"><i
                                                    class="bx bxs-save bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><span
                                                        class="avatar-initial rounded-circle bg-label-primary">DD</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Darwin
                                                        Dory</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">3325</span>$3325</td>
                                    <td><span class="d-none">20210302</span>02 Mar 2021</td>
                                    <td><span class="d-none">$361</span>$361</td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="sorting_1"><a href="app-invoice-preview.html">#4582</a></td>
                                    <td><span data-bs-toggle="tooltip" data-bs-html="true"
                                            aria-label="<span>Downloaded<br> Balance: $883<br> Due Date: 04/12/2020</span>"
                                            data-bs-original-title="<span>Downloaded<br> Balance: $883<br> Due Date: 04/12/2020</span>"><span
                                                class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30"><i
                                                    class="bx bx-down-arrow-circle bx-xs"></i></span></span></td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img
                                                        src="../../assets/img/avatars/9.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a href="pages-profile-user.html"
                                                    class="text-body text-truncate"><span class="fw-medium">Keane
                                                        Barfitt</span></a><small class="text-truncate text-muted">Template
                                                    Customization</small></div>
                                        </div>
                                    </td>
                                    <td><span class="d-none">5612</span>$5612</td>
                                    <td><span class="d-none">20200412</span>12 Apr 2020</td>
                                    <td><span class="d-none">$883</span>$883</td>
                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                                    class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                    class="bx bx-show mx-1"></i></a>
                                            <div class="dropdown"><a href="javascript:;"
                                                    class="btn dropdown-toggle hide-arrow text-body p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                        class="dropdown-item">Download</a><a href="app-invoice-edit.html"
                                                        class="dropdown-item">Edit</a><a href="javascript:;"
                                                        class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div><a href="javascript:;"
                                                        class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mx-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">Showing 21 to 30 of 50 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a
                                                href="#" aria-controls="DataTables_Table_0" role="link"
                                                data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="0"
                                                tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="1"
                                                tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" aria-current="page"
                                                data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="3"
                                                tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="4"
                                                tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                                href="#" aria-controls="DataTables_Table_0" role="link"
                                                data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- / Content -->
    </div>
{{-- llamado del modal --}}
@include('device_controls.modals.create_controls', ['id_device' => $id_device])



@endsection




