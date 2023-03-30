<?php include 'include/layout.php';?>

<?php include 'include/header.php'?>

<div class="container pt-md-5">
    <div class="row">
        <div class="col-md-8">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Назва книги</label>
                    <input type="text" name="name_book" placeholder="Введіть назву книги" id="name_book" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Автор книги</label>
                    <input type="text" name="name_author" placeholder="Введіть автора" id="name_author" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Жанр книги</label>
                    <input type="text" name="genre" placeholder="Введіть жанр книги" id="genre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Рік книги</label>
                    <input type="text" name="year" placeholder="Введіть рік книги" id="year" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Введіть текст повідомлення</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Введіть текст повідомлення"></textarea>
                </div>

                <button type="button" class="btn btn-success">Додати</button>
                <button type="button" class="btn btn-info">Редагувати</button>
            </form>
        </div>
        <div class="col-md-4">
            <p>Список книг</p>
        </div>
    </div>
</div>
<?php include 'include/footer.php'?>
