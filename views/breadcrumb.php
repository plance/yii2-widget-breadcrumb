<?php
use yii\helpers\Html;
?>
<?php if(sizeof($breadcrumbs) > 0): ?>
<ol class="breadcrumb">
	<?php foreach($breadcrumbs as $a): ?>
	<li>
		<?php
			if(isset($a['url'])):
				echo Html::a($a['title'], $a['url']);
			else:
				echo $a['title'];
			endif;
		?>
	</li>
	<?php endforeach; ?>
</ol>
<?php endif; ?>
