<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="riizeron">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/main.css">
    <link rel="stylesheet" href="/css/catalog_item.css">
    <title>Home</title>
</head>
<body>
    <header class="site-header sticky-yop py-1 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">  
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <h5>Paketos</h5>    
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="/catalog" class="nav-link px-2 link-dark">Catalog</a></li>
                    <li><a href="/pricing" class="nav-link px-2 link-dark">Pricing</a></li>
                    <li><a href="/FAQs" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
                    <li><a href="/review" class="nav-link px-2 link-dark">Reviews</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="/register" class="btn btn-primary">Sigh-up</a>
                    <!-- <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button> -->
                </div>
            </nav>
        </header>
        <main>
            @yield('main')
        </main>
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
                <small class="d-block mb-3 text-muted">© 2017–2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Cool stuff</a></li>
                        <li><a class="link-secondary" href="#">Random feature</a></li>
                        <li><a class="link-secondary" href="#">Team feature</a></li>
                        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                        <li><a class="link-secondary" href="#">Another one</a></li>
                        <li><a class="link-secondary" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="#">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
                </div>
                <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Business</a></li>
                    <li><a class="link-secondary" href="#">Education</a></li>
                    <li><a class="link-secondary" href="#">Government</a></li>
                    <li><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
                </div>
                <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
                </div>
            </div>
        </footer>
</body>
</html>