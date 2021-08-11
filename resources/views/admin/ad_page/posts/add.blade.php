
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
                        <label for="category" class="form-label">Select Category</label>
                        <select id="category" class="form-control">
                            <option>Select Category</option>
                            <option>1</option>
                            <option>1</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Active</label>
                        <select id="category" class="form-control">
                            <option value="1">Appear</option>
                            <option value="2">Hidden</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="donate" class="form-label">Contribution</label>
                        <input class="form-control" type="number" id="donate">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea</label>
                        <textarea id="summernote">

                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

