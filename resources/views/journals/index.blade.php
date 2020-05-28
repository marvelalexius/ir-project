@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Dashboard</div>

              <div class="card-body row">
                <div class="col-md-12">
                  <a href="{{ route('journals.create') }}" class="btn btn-primary" role="button">New journal</a>
                </div>
                <div class="col-md-12 mt-2">
                  <table class="table">
                    <thead>
                      <tr>
                        {{-- <th>Journal File</th> --}}
                        <th>Journal Title</th>
                        <th>Journal Abstract</th>
                        <th>Journal Keywords</th>
                        <th>Journal Authors</th>
                        <th>Journal Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($journals as $journal)
                        <tr>
                          {{-- <td><img src="{{ asset('storage/'.$journal->image) }}"></td> --}}
                          <td>{{ $journal->title }}</td>
                          <td>{{ $journal->abstract }}</td>
                          <td>{{ $journal->keywords }}</td>
                          <td>{{ $journal->authors }}</td>
                          <td class="row">
                            <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-warning" role="button">Edit</a>
                            <form action="{{ route('journals.destroy', $journal->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
