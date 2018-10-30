<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            [
				'label' => 'Image',
				'format' => 'raw',
				'value' => function($data) {
						return Html::a(Html::img(Yii::$app->params['imgUrl'] . $data->image, ['style' => 'width:200px; height: 200px']), ['/product/view', 'id' => $data->id]);
				}
			],
			
            [
				'attribute' => 'name',
				'label' => 'Name',
				'format' => 'raw',
				'value' => function($data) {
						return Html::a($data->name, ['/product/view', 'id' => $data->id]);
				}
			],
            'price',
            [
				'header' => '',
				'label' => 'Actions',
				'format' => 'raw',
				'value' => function($data) {
					$links = '';
					$links .= '&nbsp;&nbsp;&nbsp;';
					$links .= '<a href="' . \Yii::$app->getUrlManager()->createUrl(['product/update', 'id' => $data->id]) . '">edit</a>';
					$links .= '&nbsp;&nbsp;&nbsp;';
					$links .=  Html::a('delete', ['delete', 'id' => $data->id], [
						'data' => [
							'confirm' => 'Are you sure you want to delete this product?',
							'method' => 'post',
						],
					]);
					return $links;
				}
			],

        ],
    ]); ?>

</div>
