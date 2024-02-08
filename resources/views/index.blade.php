@extends('header')

@section('content')
  <div class="container d-flex mt-5 mb-4">
    <div class="row  justify-content-center align-items-center" style="gap: 16px">
      {{-- @dump($articles) --}}
      {{-- @dd($articles['articles']) --}}
      @foreach ($articles['articles'] as $article)
        {{-- @dd($article) --}}
        <div class="card mt-3 shadow-lg"
          style="width: 22rem;border-radius: 9px;background: #f8f9fa;box-shadow:  15px 15px 30px #a1a1a1,-15px -15px 30px #ffffff;">
          <img class="card-img-top" style="height: 200px;"
            src="{{ $article['urlToImage'] ?? 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png' }}"
            alt="Card image cap">
          <div class="card-body">
            <p class="card-text d-inline-block text-truncate" style="max-width: 300px;"><strong>Title:</strong>
              {{ $article['title'] }}</p>
            <p class="card-text"><strong>PublishedAt:</strong> {{ $article['publishedAt'] }}</p>
            <a href="{{ route('news.show', $article['title']) }}" class="btn">Go to show</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  </div>
@endsection
