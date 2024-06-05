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
    <th>លរ</th>
    <th>ប្រភេទទំនិញ</th>
    <th>យីហោ</th>
    <th>ឈ្មោះទំនិញ</th>
    <th>តម្លៃឯកតា</th>
    <th>ចំនួនក្នុងស្តុក</th>
    <th>ស្ថានភាព</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
<<<<<<< Updated upstream
        <td>1</td>
        <td>{{$product->category}}</td>
        <td>{{$product->brand}}</td>
        <td>{{$product->prodName}}</td>
        <td>{{$product->prodPrice}}</td>
        <td>5 គ្រឿង</td>
=======
        <td>{{$loop->iteration}}</td>
        <td>{{$product->category->prodCate}}</td>
        <td>{{$product->brand->prodBrand}}</td>
        <td>{{$product->prod_name}}</td>
        <td>{{$product->prod_price}}</td>
        <td>{{$product->stock}}</td>
        {{-- <td>{{$product->status}}</td> --}}
>>>>>>> Stashed changes
        <td><span class="badge badge-success">កំពុងដំណើរការ</span></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    
    </div>
    
    </div>

@endsection