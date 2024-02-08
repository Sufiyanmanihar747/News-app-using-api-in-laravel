@extends('header')

@section('content')
  <div class="container-fluid mt-4 mb-4">
    <div class="row">

      <div class="col-lg-8 offset-lg-2">
        <div class="card shadow-lg mt-5">
          <div class="card-header">
            <a href="{{ url()->previous() }}"><b>Back</b></a>
          </div>
          <div class="card-body p-4">
            <h4 class="card-title mb-2">{{ $article['articles'][0]['title'] }}</h4>
            <div class="row my-4">
              <div class="col-lg-6">
                <img class="card-img-top w-100 hover-zoom rounded" src="{{ $article['articles'][0]['urlToImage'] }}"
                  alt="Card image cap">
              </div>
              <div class="col-lg-6 ">
                <div class="mb-lg-4 mt-lg-3">
                  <p class="card-text"><strong>Source:</strong>
                    {{ $article['articles'][0]['source']['name'] }}</p>
                  <p class="card-text"><strong>PublishedAt:</strong>
                    {{ $article['articles'][0]['publishedAt'] }}</p>
                </div>
                <div class="mb-4">
                  <p class="card-text"><strong>Author:</strong>
                    {{ $article['articles'][0]['author'] }}</p>
                </div>
                <div>
                  <a href="{{ $article['articles'][0]['url'] }}" class="btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <p class="card-text"><strong>Content:</strong>
                {{ $article['articles'][0]['content'] }}</p>
              <p class="card-text"><strong>Description:</strong>
                {{ $article['articles'][0]['description'] }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
