
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
            <tr class="row">
             @foreach($videoLists->items as $key => $item)
              <th class="col-3"><img src="{{ $item->snippet->thumbnails->medium->url }}" class="img" style="width:120px;height:60px;" alt="img" srcset=""></th>
              <td class="col-4">{{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}</td>
              <td class="col-3"> {{ date('d M Y', strtotime($item->snippet->publishTime)) }}</td>
              <td class="col"><a type="button" class="btn btn-outline-danger" href="{{ route('details', $item->id->videoId) }}">Details</a></td>
              @endforeach
            </tr>
          </tbody>

    </table>
    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">	&lt;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&gt;</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>
</div>
@endsection
