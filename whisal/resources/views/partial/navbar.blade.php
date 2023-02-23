<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/dashboard">Edifarm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($judul === "dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judul === "profile") ? 'active' : '' }}" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judul === "blog") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judul === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>