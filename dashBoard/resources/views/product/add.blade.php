@extends('layouts.tamplete')
@section('pageHeader')
    បន្ថែមទំនិញថ្មី
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">សូមបញ្ជូលទំនិញ</h3>
                    </div>
                    <form action="{{ route('storeprod') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="prodName">ឈ្មោះទំនិញ</label>
                                <input type="text" class="form-control" id="prodName" name="prodName"
                                    placeholder="សូមបញ្ជូលឈ្មោះទំនិញ...">
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="prodPrice">តម្លៃ</label>
                                    <input type="text" class="form-control" id="prodPrice" name="prodPrice"
                                        placeholder="សូមបញ្ជូលតម្លៃ...">
                                </div>
                                <div class="form-group col-4">
                                    <label for="categId">ប្រភេទទំនិញ <a class="p-2" href="{{ route('addCate') }}">+</a></label>
                                    <select class="form-control" name="categId" id="categId">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->prodCate }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="brandId">ម៉ាកយីហោ <a class="p-2" href="{{ route('addBrand') }}">+</a></label>
                                    <select class="form-control" name="brandId" id="brandId">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->prodBrand }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="prodStock">បរិមាណក្នុងស្តុក</label>
                                    <input type="text" class="form-control" id="prodStock" name="prodStock"
                                        placeholder="សូមបញ្ជូលចំនួនស្តុក...">
                                </div>
                                <div class="form-group col-4">
                                    <label for="rateId">វាយតម្លៃ</label>
                                    <select class="form-control" name="rateId" id="rateId">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="prodImage">រូបភាព</label>
                                    <input type="file" class="form-control" id="prodImage" name="prodImage"
                                        placeholder="សូមបញ្ជូលរូបភាព...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>ព័ត៌មានលំអិត</label>
                                    <textarea class="form-control" rows="3" name="prodDetails" placeholder="សូមបញ្ជូលព័ត៌មានលំអិត"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
