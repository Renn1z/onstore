<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'PAGE' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>

    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Onstore</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catalog
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sport</a></li>
                                    <li><a class="dropdown-item" href="#">Electronics</a></li>
                                    <li><a class="dropdown-item" href="#">Apparel</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="favorites.php">Favorites</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Basket</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                        </ul>
                       

                    </div>
                </div>
            </nav>
        </header>

        <main class="main py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php foreach ($products as $product) : ?>
                            <div class="card md-3">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="post/<?= $product['slug'] ?>"><?= $product['title'] ?></a></h5>
                                    <p class="card-text"><?= $product['desc'] ?></p>
                                    <a href="post/<?= $product['slug'] ?>">Go somewhere</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>

                    <div class="col-md-4">
                        Sidebar
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="p-3 bg-body text-dark text-center">
                &copy; Copyright <?= date('Y')?>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>