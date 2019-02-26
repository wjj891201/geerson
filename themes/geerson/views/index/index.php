<?php

use yii\helpers\Url;
use app\libs\Image;
use app\models\Advert;

$this->title = $this->params['config']['sitename'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['config']['keyword']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['config']['description']], 'description');
?>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 800,
            timeout: 5000,
            namespace: "slide"
        });
    });
</script>
<div class="slide_container">
    <ul class="rslides" id="slider">
        <?php foreach ($banner as $key => $vo): ?>
            <li><img src="<?= $vo['filename'] ?>" alt=""></li>	
        <?php endforeach; ?>
    </ul>
</div>
