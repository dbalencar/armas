<?php
$this->breadcrumbs=array(
	'Armamentos'=>array('admin'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Gerenciar', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Armamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tipos'=>$tipos)); ?>