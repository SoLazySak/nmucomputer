@extends('layouts.tamplete')
@section('pageHeader')
    បន្ថែមយីហោថ្មី
@endsection
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="prodBrand">ឈ្មោះយីហោ</label>
                <input type="text" class="form-control" id="prodBrand" name="prodBrand" placeholder="សូមបញ្ជូលឈ្មោះយីហោ...">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">បន្ថែម</button>
        </div>
    </form>

    <div class="row">
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
                                <th>យីហោ</th>
                                <th>ថ្ងៃបញ្ជូល</th>
                                <th>ថ្ងៃកែប្រែ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td>១២៣</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
