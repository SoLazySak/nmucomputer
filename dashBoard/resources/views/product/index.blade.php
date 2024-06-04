@extends('layouts.tamplete')
@section('pageHeader')
<div class="row mb-2">
<div class="col-sm-6">
    ស្តុកទំនិញ
</div>
<div class="col-sm-6 text-end">
    <a href="{{ route('addprod') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> បន្ថែមទំនិញ</a>
</div>
</div>

@endsection
@section('content')

<div class="col-12">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Responsive Hover Table</h3>
    <div class="card-tools">
    <div class="input-group input-group-sm" style="width: 150px;">
    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    <div class="input-group-append">
    <button type="submit" class="btn btn-default">
    <i class="fas fa-search"></i>
    </button>
    </div>
    </div>
    </div>
    </div>
    
    <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
    <thead>
    <tr>
    <th>ID</th>
    <th>User</th>
    <th>Date</th>
    <th>Status</th>
    <th>Reason</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>183</td>
    <td>John Doe</td>
    <td>11-7-2014</td>
    <td><span class="tag tag-success">Approved</span></td>
    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
    </tr>
    <tr>
    <td>219</td>
    <td>Alexander Pierce</td>
    <td>11-7-2014</td>
    <td><span class="tag tag-warning">Pending</span></td>
    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
    </tr>
    <tr>
    <td>657</td>
    <td>Bob Doe</td>
    <td>11-7-2014</td>
    <td><span class="tag tag-primary">Approved</span></td>
    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
    </tr>
    <tr>
    <td>175</td>
    <td>Mike Doe</td>
    <td>11-7-2014</td>
    <td><span class="tag tag-danger">Denied</span></td>
    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
    </tr>
    </tbody>
    </table>
    </div>
    
    </div>
    
    </div>

@endsection