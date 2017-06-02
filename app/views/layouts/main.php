<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Шаблон MAIN | <?= $title?></title>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>

</head>
<body>
<div class="container">
    <?php if (!empty($menu)):?>
        <?php foreach ($menu as $item):?>
            <ul class="nav navbar-nav nav-tabs">
                <li> <a href="<?= $item['id']?>"><?= $item['title']?></a></li>
            </ul>
        <?php endforeach;?>
    <?php endif;?>
<?= $content;?>
<?//= debug(\vendor\core\Db::$countSql)?>
<?//= debug(\vendor\core\Db::$queries)?>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>