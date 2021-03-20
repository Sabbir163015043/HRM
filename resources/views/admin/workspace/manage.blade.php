@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Category</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Manage category</a>
</div>

<table class="table table-bordered">
    <div class="row">
     <div class="container"> 
        <tr>
           <th>SL No.</th>
           <th>Workspace Name</th>
           <th>Workspace Description</th>
           <th> Status</th>
           <th>Action</th>
       </tr>
    
       @foreach($workspaces as $key => $workspace)
        <tr>
       <td>{{ $loop->iteration }}</td>
        <td>{{ $workspace->name}}</td>
        <td>{{ $workspace->description}}</td>
        <td>{{ $workspace->status == 1 ? 'Published' : 'Unpublished'}}</td>
        <td>
            <a href="{{ route('edit-workspace',[ 'id' => $workspace->id]) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('delete-workspace',[ 'id' => $workspace->id]) }}" class="btn btn-danger" onclick="return confirm('Are your Sure this file delete')">Delete</a>
                
        </td>
        </tr>
       @endforeach
    
     </div>
    </div>
</table>

@endsection