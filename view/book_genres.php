<?php include 'include/layout.php';?>

<?php include 'include/header.php'?>

<div class="container pt-md-5">
    <form action="#" method="post">
        <div class="form-group">
            <label for="genre">Жанр книги</label>
            <input type="text" name="genre" placeholder="Введіть назву жанру книги" id="genre" class="form-control">
        </div>

        <button type="button" class="btn btn-success">Додати</button>
        <button type="button" class="btn btn-info">Редагувати</button>
    </form>
</div>

<?php include 'include/footer.php'?>
