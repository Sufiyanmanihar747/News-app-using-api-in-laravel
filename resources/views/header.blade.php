<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>New paper</title>
  <style>
    .btn {
      --color: #560bad;
      position: relative;
      overflow: hidden;
      border: 2px solid var(--color);
      transition: color .5s;
      z-index: 1;
      font-size: 17px;
      border-radius: 6px;
      font-weight: 500;
      color: var(--color);
    }

    .btn:before {
      content: "";
      position: absolute;
      z-index: -1;
      background: var(--color);
      height: 150px;
      width: 200px;
      border-radius: 50%;
    }

    .btn:hover {
      color: #fff;
    }

    .btn:before {
      top: 100%;
      left: 100%;
      transition: all .7s;
    }

    .btn:hover:before {
      top: -30px;
      left: -30px;
    }

    .btn:active:before {
      background: #3a0ca3;
      transition: background 0s;
    }
  </style>
</head>

<body style="background-color: #d9d9d9;">
  <nav class="navbar navbar-expand-lg position-fixed w-100 px-5"
    style="top:0; z-index: 100;backdrop-filter: blur(10px);background-color: #ffffff63;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Newsapp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['request' => 'india']) }}"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['request' => 'technology']) }}"><b>Technology</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['request' => 'cricket']) }}"><b>Cricket</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['request' => 'politics']) }}"><b>Politics</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['request' => 'programming']) }}"><b>Programming</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <b>Country</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('news.country', ['country' => 'in']) }}">India</a>
              <a class="dropdown-item" href="{{ route('news.country', ['country' => 'ch']) }}">China</a>
              <a class="dropdown-item" href="{{ route('news.country', ['country' => 'us']) }}">America</a>
            </div>
          </li>
        </ul>
        <form class="d-flex" role="search" method="GET" action="{{ route('news.search') }}">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
