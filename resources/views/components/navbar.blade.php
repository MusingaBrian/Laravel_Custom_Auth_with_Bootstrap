<header>
    <div class="conatiner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('welcome') }}"> {{ config('app.name') }}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
</header>
