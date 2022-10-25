<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
  <a class="navbar-brand" href="/">PIYUL BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{ ($title ==="Home")? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link {{ ($title ==="About")? 'active' : '' }}" href="/about">About</a>
      <a class="nav-item nav-link {{ ($title ==="Posts")? 'active' : '' }}" href="/blog">Blog</a>
    </div>
  </div>
</nav>
</div>