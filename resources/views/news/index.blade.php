@extends('layouts.main');
@section('main')
<div class="row mb-2">
@forelse($categorty as $c)
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href=" {{ route('news.show',['id'=> $c['id']]) }} ">{{ $c['title'] }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ $c['author'] }}</div>
              <p class="card-text mb-auto">{{ $c['description'] }}</p>
              <a href=" {{ route('news.show',['id'=> $c['id']]) }} ">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>

@empty
<h2>Новостей нет</h2>
@endforelse
</div>
@endsection
