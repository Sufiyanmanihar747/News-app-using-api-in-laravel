@extends('header')

@section('content')
  <div class="container-fluid mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="card shadow-lg mt-5">
          <div class="card-header">
            <a href="{{ url()->previous() }}"><b>Back</b></a>
          </div>
          {{-- @dump($article) --}}
          <div class="card-body p-4">
            <h4 class="card-title">{{ $article['title'] ?? 'Not available' }}</h4>
            <div class="row my-0">
              <div class="col-lg-12">
                <img class="card-img-top w-100 hover-zoom rounded" src="{{ $article['urlToImage'] ?? 'Not available' }}"
                  alt="Card image cap">
              </div>
              <div class="col-lg-12 mt-3 d-flex justify-content-around">
                <div class="mb-lg-4 mt-lg-3">
                  <p class="card-text"><strong>Source:</strong> {{ $article['source']['name'] ?? 'Not available' }}</p>
                  <p class="card-text"><strong>Author:</strong> {{ $article['author'] ?? 'Not available' }}</p>
                </div>
                <div class="mb-lg-4 mt-lg-3">
                  <p class="card-text"><strong>PublishedAt:</strong> {{ $article['publishedAt'] ?? 'Not available' }}</p>
                </div>
              </div>
            </div>
            <div class="mt-3 mx-5">
              <p class="card-text"><strong>Description:</strong> {{ $article['description'] ?? 'Not available' }}</p>
              <p class="card-text"><strong>Content:</strong> {{ $article['content'] ?? 'Not available' }}</p>
              <div>
                <a href="{{ $article['url'] ?? 'Not available' }}" target="_blank" class="btn">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
