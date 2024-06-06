@extends('layouts.tamplete')
@section('pageHeader')
    កែទំនិញថ្មី
@endsection
@section('content')

<form method="POST" action="{{ route('updateProd',$product->id) }}">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">សូមបញ្ជូលទំនិញ</h3>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="prodName">ឈ្មោះទំនិញ</label>
                                <input type="text" class="form-control" id="prodName" name="prodName"
                                    value="{{$product->prod_name}}">
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="prodPrice">តម្លៃ</label>
                                    <input type="text" class="form-control" id="prodPrice" name="prodPrice"
                                    value="{{$product->prod_price}}">
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
                                    value="{{$product->stock}}">
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
                                    <textarea class="form-control" rows="3" name="prodDetails"  value="{{$product->description}}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
