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
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Messenger</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->messenger}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="table-action">
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
