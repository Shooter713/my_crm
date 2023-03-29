<?php include 'include/layout.php';?>

<?php include 'include/header.php'?>

    <div class="container pt-md-5">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Введіть ім'я</label>
                <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Введіть email</label>
                <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Додати</button>
            <button type="button" class="btn btn-info">Редагувати</button>
        </form>
    </div>

<?php include 'include/footer.php'?>

