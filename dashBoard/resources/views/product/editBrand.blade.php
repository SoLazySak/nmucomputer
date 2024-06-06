@extends('layouts.tamplete')
@section('pageHeader')
    កែទំនិញថ្មី
@endsection
@section('content')
<form method="POST" action="{{ route('updateBrand',$brand->id) }}">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="prodBrand">ឈ្មោះយីហោ</label>
            <input value="{{$brand->prodBrand}}" type="text" class="form-control" id="prodBrand" name="prodBrand" placeholder="សូមបញ្ជូលឈ្មោះយីហោ...">

        </div>
        <button type="submit" class="btn btn-primary btn-sm">បន្ថែម</button>
    </div>
</form>

@endsection
