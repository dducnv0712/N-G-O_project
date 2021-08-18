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

                        <li class="breadcrumb-item"><a href="{{url('/admin/posts/add')}}">New Post</a></li>
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
                    <th>Id</th>
                    <th>Id_cus</th>
                    <th>Given_name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Contribute_amount</th>
                    <th>Country</th>
                    <th>Id_post</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>

                </tr>
                </thead>
                <tbody>
                @foreach($contribute as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->id_cus}}</td>
                        <td>{{$item->given_name}}</td>
                        <td>{{$item->surname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->contribute_amount}}</td>
                        <td>{{$item->country}}</td>
                        <td>{{$item->id_post}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection



