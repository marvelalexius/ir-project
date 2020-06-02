@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Dashboard</div>

              <div class="card-body row">
                <div class="col-md-12 mt-2">
                  @if (isset($journal))
                      <form action="{{ route('journals.update', $journal->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                  @else
                    <form action="{{ route('journals.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                  @endif
                  <form>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">journal Image</label>
                      <input type="file" name="image" class="form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Journal title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter journal name" value="{{ @$journal->title }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Journal abstract</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="abstract">{{ $journal->abstract }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Journal keywords</label>
                      <input type="text" name="keywords" id="" placeholder="Enter keywords" class="form-control" value="{{ @$journal->keywords }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Journal authors</label>
                      <input type="text" name="authors" id="" placeholder="Enter authors" class="form-control" value="{{ @$journal->authors }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
