<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">SKY HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tipekamar') ? 'active' : '' }}" href="/tipekamar">Kamar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('fasilitas') ? 'active' : '' }}" href="/fasilitas">Fasilitas</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ auth()->user()->username }} 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @can('admin')
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endcan
                        @can('resepsionis')
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endcan

                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
                      </form>
                    </ul>
                </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
            
        </div>
    </div>
</nav>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>