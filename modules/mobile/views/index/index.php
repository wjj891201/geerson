<?php

use yii\helpers\Url;
use app\libs\Image;
use app\models\Advert;

$this->title = $this->params['config']['sitename'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['config']['keyword']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['config']['description']], 'description');
?>
<?php foreach ($banner as $key => $vo): ?>
    <div class="banner">
        <div class="banner-text"></div>
        <div class="banner-img"><img src="<?= $vo['filename'] ?>" width="100%" alt=""></div>
    </div>
<?php endforeach; ?>
