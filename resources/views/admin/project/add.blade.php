@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Project Member</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Project Member</a>
</div>

<form action="{{ route('new-project') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
            @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
                <div class="form-group row">
                    <label class="control-label col-md-2">Workspace Name</label>
                        <div class="col-md-10">
                            <select class="form-control" name="workspace_id">
                            <option value="">---Select Workspace Name--</option>
                            @foreach($workspaces as $key => $workspace)
                            <option value="{{ $workspace->id }}">{{ $workspace->name }}</option>
                            @endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Created By</label>
                        <div class="col-md-10">
                            <input type="text" name="create" class="form-control"></input>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Start Date</label>
                        <div class="col-md-10">
                            <input type="text" name="start_date" class="form-control"></input>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">End Date</label>
                        <div class="col-md-10">
                            <input type="text" name="end_date" class="form-control"></input>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Project Name</label>
                        <div class="col-md-10">
                            <input type="text" name="project_name" class="form-control"></input>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Project Description</label>
                        <div class="col-md-10">
                            <input type="text" name="description" class="form-control"></input>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Publication Status</label>
                        <div class="col-md-10">
                            <label><input type="radio" name="status" value="1"/>Published</label>
                            <label><input type="radio" name="status" value="0"/>Unpublished</label>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Create New Project">
                        </div>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection