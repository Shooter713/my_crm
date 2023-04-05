<?php
require_once __DIR__ . '/../../Controller/ListController.php';

use Controller\ListController;

$lists = ListController::index();
?>
<p>Список книг</p>
<?php foreach ($lists as $list){?>
    <div class="alert <?php if ($list['date_return'] == null){echo 'alert-danger';}else{echo 'alert-success';}?>">
        <div>
            <li>Видано - <?php echo $list['user_name']?></li>
            <li>Назва книги - <?php echo $list['book_name']?></li>
            <?php if ($list['date_return']){ ?>
                <li>Дата повернення - <?php echo $list['date_return']?></li>
            <?php }else{ ?>
                <li>Дата видачі - <?php echo $list['date_issue']?></li>
            <?php } ?>
        </div>
    </div>
<?php } ?>