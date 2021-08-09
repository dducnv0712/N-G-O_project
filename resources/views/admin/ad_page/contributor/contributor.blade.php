@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Analytics</strong> Dashboard</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic Table</h5>
                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th style="width:40%;">Name</th>
                    <th style="width:25%">Phone Number</th>
                    <th class="d-none d-md-table-cell" style="width:25%">Email</th>
                    <th style="width:25%">Address</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>864-348-0485</td>
                    <td class="d-none d-md-table-cell">June 21, 1961</td>
                    <td>ngoviethoang@gmail</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>William Harris</td>
                    <td>914-939-2458</td>
                    <td class="d-none d-md-table-cell">May 15, 1948</td>
                    <td>ngoviethoang@gmail</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Sharon Lessman</td>
                    <td>704-993-5435</td>
                    <td class="d-none d-md-table-cell">September 14, 1965</td>
                    <td>ngoviethoang@gmail</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Christina Mason</td>
                    <td>765-382-8195</td>
                    <td class="d-none d-md-table-cell">April 2, 1971</td>
                    <td>ngoviethoang@gmail</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Robin Schneiders</td>
                    <td>202-672-1407</td>
                    <td class="d-none d-md-table-cell">October 12, 1966</td>
                    <td>ngoviethoang@gmail</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection

