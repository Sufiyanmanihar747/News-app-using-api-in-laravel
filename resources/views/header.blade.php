<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .custom-card {
      width: 22rem;
      border-radius: 9px;
      background: #f8f9fa;
      box-shadow: 15px 15px 30px #a1a1a1, -15px -15px 30px #ffffff;
    }
  </style>
</head>

<body style="background-color: #d9d9d9;">
  <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100 px-4 py-0"
    style="top: 0; z-index: 100; backdrop-filter: blur(10px); background-color: #ffffff63;">
    <div class="container-fluid p-0">
      <a class="navbar-brand" href="{{ route('news.country') }}">
        <img src="https://themayanagari.com/wp-content/uploads/2021/05/Breaking-News-Png-Image-2-768x478.jpg.webp"
          style="width: 100px; height: auto; margin: 0 40px;" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center" style="gap: 32px;">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.country', ['country' => 'in']) }}"><b>HOME</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.category', ['category' => 'technology']) }}"><b>TECHNOLOGY</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.category', ['category' => 'cricket']) }}"><b>CRICKET</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.category', ['category' => 'politics']) }}"><b>POLITICS</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
              href="{{ route('news.category', ['category' => 'programming']) }}"><b>PROGRAMMING</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>COUNTRY</b>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
