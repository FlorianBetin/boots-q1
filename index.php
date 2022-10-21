<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<header>

    <nav class="navbar navbar-dark navbar-expand-xl bg-primary">
        <div class="d-flex justify-content-end">
            <a class="navbar-brand" href="#">Discovering Bootstap 5.1 </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catégories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Photos</a></li>
                            <li><a class="dropdown-item" href="#">Articles</a></li>
                            <li><a class="dropdown-item" href="#">Projects</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<body>

    <h1 class="fs-1">Journey into Bootstrap classes</h1>

    <section class="container" id="section1" >
        <div class="row gx-3 gy-3">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow p" style="width: 18rem;">
                    <img src="/src/pexels-quang-nguyen-vinh-2161499 (1).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Visit Components Lake</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow p" style="width: 18rem;">
                    <img src="/src/pexels-pixabay-460621 (1).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Facing Cascade Style Sheet</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-md-6 col-sm-12 col-md-6 col-sm-12">
                <div class="card shadow p" style="width: 18rem;">
                    <img src="/src/pexels-dom-gould-325807.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Contemplate Form Inputs river</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-md-6 col-sm-12">
                <div class="card shadow p" style="width: 18rem;">
                    <img src="/src/pexels-adhitya-andanu-1539098.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Enjoy Responsive Layout land</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="divbottom">

<h2 class="fs-2">The CSS frameworks are very usefull</h2>
<p class="text-center">Learning them comes with practice</p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</section>
<footer class="bg-primary sticky-footer"> (c) 2022 wilders|images <a class="text-white" href="https://www.pexels.com/fr-fr/">@pexel </a></footer>

</html>