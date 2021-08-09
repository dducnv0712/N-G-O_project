@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Digital Wallet</strong> </h3>
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
                    <th style="width:30%">Email</th>
                    <th style="width:25%">Phone</th>
                    <th style="width:20%">Contribution from</th>
                    <th class="d-none d-md-table-cell" style="width:25%">Amount of contribution</th>
                    <th style="width:30%">Requirements to use in</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>ngoviethoang007@gmail.com</td>
                    <td class="d-none d-md-table-cell">123456789</td>
                    <td>visa</td>
                    <td>2000$</td>
                    <td>flood relief</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>ngoviethoang007@gmail.com</td>
                    <td class="d-none d-md-table-cell">123456789</td>
                    <td>visa</td>
                    <td>2000$</td>
                    <td>flood relief</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>ngoviethoang007@gmail.com</td>
                    <td class="d-none d-md-table-cell">123456789</td>
                    <td>visa</td>
                    <td>2000$</td>
                    <td>flood relief</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>ngoviethoang007@gmail.com</td>
                    <td class="d-none d-md-table-cell">123456789</td>
                    <td>visa</td>
                    <td>2000$</td>
                    <td>flood relief</td>
                    <td class="table-action">
                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Vanessa Tucker</td>
                    <td>ngoviethoang007@gmail.com</td>
                    <td class="d-none d-md-table-cell">123456789</td>
                    <td>visa</td>
                    <td>2000$</td>
                    <td>flood relief</td>
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


