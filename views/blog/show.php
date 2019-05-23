<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Post</h1>
<ul>
    <?php foreach ($blogs as $blog): ?>
    <li>
        <?= Html::encode("{$blog->title} ({$blog->post})") ?>:
        <?= $blog->title ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>