<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">WebsiteLogo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link " href="/about">About</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>