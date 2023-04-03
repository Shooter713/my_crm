<?php
require_once __DIR__ . '/../Controller/GenreController.php';

use Controller\GenreController;

include 'include/layout.php';
include 'include/header.php';

$genre = GenreController::index();
?>
<div class="container pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="/handler.php" method="post">
                    <div class="form-group">
                        <p class="genre mt-2">Жанр книги</p>
                        <input type="hidden" name="method_name" id="method_name" value="addGenre">
                        <input type="hidden" name="genre_id" id="genre_id">
                        <input type="text" name="name" placeholder="Введіть назву жанру книги" id="genre" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success add-new-genre">Додати</button>
                    <button type="submit" class="btn btn-info">Редагувати</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>Список Жанрів</p>
                <?php foreach ($genre as $gen){ ?>
                    <div class="alert alert-info">
                        <div class="genre-item genre-<?php echo $gen['id']?>">
                            <li><?php echo $gen['id']?> - <?php echo $gen['name']?></li>
                            <button class="btn btn-info mt-3 edit-genre" id="genre_id" data-element-name="<?php echo $gen['name']?>" data-element-id="<?php echo $gen['id']?>">Редагувати</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'?>
