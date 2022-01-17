<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Belajar Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === 'Home' ? 'active' : '') }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === 'About' ? 'active' : '') }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === 'Blogs' ? 'active' : '') }}" href="/blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === 'Blog Categories' ? 'active' : '') }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === 'Authors' ? 'active' : '') }}" href="/authors">Authors</a>
                </li>
            </ul>
        </div>
    </div>
</nav>