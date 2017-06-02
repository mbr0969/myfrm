<div class="container">
    <H1 class="text-center">Main::index</H1>

    <?php if (!empty($news)): ?>
        <?php foreach ($news as $new):?>

            <div class="panel panel-default">
                <div class="panel-heading"><?= $new['title']?></div>
                <div class="panel-body">
                    <?= $new['description']?>
                </div>
                <div class="panel-body">
                    <?= $new['link']?>
                </div>
                <div class="panel-body">
                    <?= $new['date']?>
                </div>
            </div>

        <?php endforeach;?>

    <?php endif;?>


</div>


