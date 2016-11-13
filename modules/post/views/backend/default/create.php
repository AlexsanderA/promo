<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\post\models\backend\Post */

$this->title = 'Создание';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


