@extends('layouts.tamplete')
@section('pageHeader')
<div class="row mb-2">
<div class="col-sm-6">
    បញ្ជីការបញ្ជាទិញ
</div>
</div>

@endsection
@section('content')

<div class="col-12">
    <div class="card">
    <div class="card-header">
    <div class="card-tools">
    <div class="input-group input-group-sm" style="width: 150px;">
    <input type="text" name="table_search" class="form-control float-right" placeholder="ស្វែករក...">
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
    <th>លរ</th>
    <th>លេខប្រតិបត្តិការ</th>
    <th>តម្លៃសរុប</th>
    <th>ស្ថានភាព</th>
    <th>មុខងារ</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>183</td>
    <td>John Doe</td>
    <td>500</td>
    <td><span class="badge badge-danger">pending</span></td>
    <td>
        <a href="#" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
        <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
        <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
    </td>
    </tr>


    </tbody>
    </table>
    </div>
    
    </div>
    
    </div>

@endsection