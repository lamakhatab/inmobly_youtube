@extends('master')

@section('content')
<div class="container">
    <table class="table mt-4 table-responsive table-hover">
        <thead>
            <tr class="row">
              <th class="col-3"></th>
              <th class="col-4">Title</th>
              <th class="col-3">Publish Date</th>
              <th class="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr class="row mt-3">
            @foreach($videoLists->items as $key => $item)
              <th class="col-3 mt-2"><img src="{{ $item->snippet->thumbnails->medium->url }}" class="img" style="width:120px;height:60px;" alt="img" srcset=""></th>
              <td class="col-4 mt-2">{{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}</td>
              <td class="col-3 mt-2">{{ date('d M Y', strtotime($item->snippet->publishTime)) }}</td>
              <td class="col mt-2"><a type="button" class="btn btn-outline-danger" href="{{ route('details', $item->id->videoId) }}">Details</a></td>
            @endforeach
            </tr>
          </tbody>

    </table>
    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link btn btn-secondary"  href="#" aria-label="Previous">
                  <span aria-hidden="true">	&lt;</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link btn btn-secondary" href="#" aria-label="Next">
                  <span aria-hidden="true">&gt;</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>
</div>
@endsection
