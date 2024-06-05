@extends('layouts.tamplete')
@section('pageHeader')
    បន្ថែមយីហោថ្មី
@endsection
@section('content')
    <form method="POST" action="{{ route('storeBrand') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="prodBrand">ឈ្មោះយីហោ</label>
                <input type="text" class="form-control" id="prodBrand" name="prodBrand" placeholder="សូមបញ្ជូលឈ្មោះយីហោ...">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">បន្ថែម</button>
        </div>
    </form>

    </div>
@endsection
