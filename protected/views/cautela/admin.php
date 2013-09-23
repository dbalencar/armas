<?php
$this->breadcrumbs=array(
	'Cautelas'=>array('admin'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Registrar', 'url'=>array('create')),
	array('label'=>'Rel. Vigentes', 'url'=>array('RelCautelasVigentes')),
	array('label'=>'Rel. Baixadas', 'url'=>array('RelCautelasBaixadas')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cautela-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Cautelas</h1>

<p>
Você pode opcionalmente utilizar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um de seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cautela-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'servidorMat',
		'servidorNome',
		'armaPat',
		'municaoLote',
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
