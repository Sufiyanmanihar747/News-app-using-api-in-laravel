@extends('header')

@section('content')
  <div class="container d-flex mb-4" style="margin-top: 5rem!important">
    <div class="row  justify-content-center align-items-center" style="gap: 16px">
      {{-- @dd($articles['articles'][0]) --}}
      {{-- @dd($articles['articles']) --}}
      @foreach ($articles['articles'] as $article)
        {{-- @dd($article) --}}
        <div class="card mt-3 shadow-lg custom-card px-0" style="">
          <img class="card-img-top" style="height: 200px;"
            src="{{ $article['urlToImage'] ?? 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png' }}"
            alt="Card image cap">
          <div class="card-body">
            <p class="card-text d-inline-block text-truncate" style="max-width: 300px;"><strong>Title:</strong>
              {{ $article['title'] }}</p>
            <p class="card-text"><strong>PublishedAt:</strong> {{ $article['publishedAt'] }}</p>
            <a href="{{ route('news.show', $article) }}" class="btn">Go to show</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  </div>
@endsection
