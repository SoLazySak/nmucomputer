@extends('layouts.tamplete')
@section('pageHeader')
    បន្ថែមទំនិញថ្មី
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">សូមបញ្ជូលទំនិញ</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="prodName">ឈ្មោះទំនិញ</label>
                                <input type="text" class="form-control" id="prodName"
                                    placeholder="សូមបញ្ជូលឈ្មោះទំនិញ...">
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="prodPrice">តម្លៃ</label>
                                    <input type="text" class="form-control" id="prodPrice"
                                        placeholder="សូមបញ្ជូលឈ្មោះតម្លៃ...">
                                </div>
                                <div class="form-group col-4">
                                    <label for="categId">ប្រភេទទំនិញ <a class="p-2" href="{{ route('addCate') }}" >+</a></label>
                                    <select class="form-control" name="categId" id="categId">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="brandId">ម៉ាកយីហោ <a class="p-2" href="{{ route('addBrand') }}" >+</a></label>
                                    <select class="form-control" name="brandId" id="brandId">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="prodStock">បរិមាណក្នុងស្តុក</label>
                                    <input type="text" class="form-control" id="prodStock"
                                        placeholder="សូមបញ្ជូលចំនួនស្តុក...">
                                </div>
                                <div class="form-group col-4">
                                    <label for="rateId">វាយតម្លៃ</label>
                                    <select class="form-control" name="rateId" id="rateId">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>ព័ត៌មានលំអិត</label>
                                    <textarea class="form-control" rows="3" placeholder="សូមបញ្ជូលព័ត៌មានលំអិត"></textarea>
                                </div>
                            </div>
                        </div>
                </div>


            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
@endsection
