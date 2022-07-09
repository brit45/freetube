<h1>bienvenue sur home</h1>

<div class="container">
    <?php foreach($articles as $k=>$v): ?>
        <div class="card text-center" style="width: 18rem;">
            <img src="<?= $v['img'] ?>">
            <div class="card-body ">
                <div class="card-title">
                    <h2><?= $v['label'] ?></h2>
                </div>
                <div class="card-text">
                    <p>Price : <?= $v['price']?>€ | <?= $v['pound']?> Kg</p>
                    <a href="/home" class="btn btn-primary">Ajouté au panier</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>