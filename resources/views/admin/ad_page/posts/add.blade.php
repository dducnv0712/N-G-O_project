
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
                <h5 class="card-title">Basic form</h5>
                <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea</label>
                        <textarea id="summernote">

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">File input</label>
                        <input type="file">
                        <small class="form-text text-muted">Example block-level help text here.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-check m-0">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Check me out</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

