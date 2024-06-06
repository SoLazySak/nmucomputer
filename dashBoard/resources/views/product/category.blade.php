@extends('layouts.tamplete')
@section('pageHeader')
    បន្ថែមទំនិញថ្មី
@endsection
@section('content')
    <form method="POST" action="{{ route('storeCate') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="prodCate">ប្រភេទទំនិញ</label>
                <input type="text" class="form-control" id="prodCate" name="prodCate" placeholder="សូមបញ្ជូលប្រភេទទំនិញ...">
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
                                <th>ប្រភេទ</th>
                                <th>ថ្ងៃបញ្ជូល</th>
                                <th>ថ្ងៃកែប្រែ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{$category->prodCate}}</td>
                             <td>{{$category->created_at_formatted}}</td>
                             <td>{{$category->updated_at_formatted}}</td>
                         </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
