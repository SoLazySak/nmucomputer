@extends('layouts.tamplete')
@section('pageHeader')
    កែប្រភេទទំនិញ
@endsection
@section('content')

<form method="POST" action="{{ route('updateCate',$category->id) }}">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="prodCate">ប្រភេទទំនិញ</label>
            <input value="{{$category->prodCate}}" type="text" class="form-control" id="prodCate" name="prodCate" placeholder="សូមបញ្ជូលឈ្មោះយីហោ...">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">កែប្រែ</button>
    </div>
</form>

@endsection
