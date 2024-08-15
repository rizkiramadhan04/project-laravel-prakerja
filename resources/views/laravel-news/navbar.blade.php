<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('user.index') }}">Users <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('comment.index') }}">Comments</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Menu Dropdown
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Menu 1</a>
            <a class="dropdown-item" href="#">Menu 2</a>
            <a class="dropdown-item" href="#">Menu 3</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
