@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form>
                    <div class="row pt-3 pl-3">
                        <div class="form-group col-md-10">
                            <input type="text" name="search" id="" value="{{ $searchRequest }}" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Abstract</th>
                            <th>Keywords</th>
                            <th>Authors</th>
                            <th>Weight</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$content as $res)
                            <tr>
                                <td>{{ @$res->title }}</td>
                                <td>{{ @$res->abstract }}</td>
                                <td>{{ implode(',', @$res->keywords) }}</td>
                                <td>{{ implode(',', @$res->authors) }}</td>
                                <td>{{ @$res->weight }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
