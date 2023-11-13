<?php require VIEWS . 'incs/header.php' ?>

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

            <?php require 'incs/sidebar.php' ?>
        </div>
    </div>  
</main>

<?php require VIEWS . 'incs/footer.php' ?>

        