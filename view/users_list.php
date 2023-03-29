<?php include 'include/layout.php';?>

<?php include 'include/header.php'?>

<div class="container-fluid">
    <div class="row pt-md-5">
        <div class="col-md-5">
            <p class="alert-info d-flex p-3 text-blue">Форма видачі</p>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="genre">Жанр книги</label>
                    <input type="text" name="genre" placeholder="Введіть назву жанру книги" id="genre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name_book">Назва книги</label>
                    <input type="text" name="name_book" placeholder="Введіть назву книги" id="name_book" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Кому видано</label>
                    <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Дата видачі</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Додати</button>
            </form>
        </div>
        <div class="col-md-5">
            <p class="alert-info d-flex p-3 text-blue">Форма повернення</p>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="genre">Жанр книги</label>
                    <input type="text" name="genre" placeholder="Введіть назву жанру книги" id="genre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name_book">Назва книги</label>
                    <input type="text" name="name_book" placeholder="Введіть назву книги" id="name_book" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Хто повертає</label>
                    <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Дата видачі</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Додати</button>
            </form>
        </div>
        <div class="col-md-2">
            Список книг
        </div>
    </div>
</div>

<?php include 'include/footer.php'?>
