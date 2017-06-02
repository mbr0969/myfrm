<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Шаблон Default | <?= $title?></title>
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <script src="/public/js/html5shiv.min.js"></script>
    <script src="/public/js/respond.min.js"></script>

</head>
<div>
<div class="container">
    <?php if (!empty($menu)):?>
    <?php foreach ($menu as $item):?>
        <ul class="nav navbar-nav nav-tabs">
            <li> <a href="<?= $item['id']?>"><?= $item['title']?></a></li>
        </ul>
    <?php endforeach;?>
    <?php endif;?>
</div>
<div class="container"
    <?= $content;?>
</div>

<?//=// debug(\vendor\core\Db::$countSql)?>
<?//=// debug(\vendor\core\Db::$queries)?>

<script src="/public/js/jquery.min.js"></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
