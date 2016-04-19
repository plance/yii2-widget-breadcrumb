<?php if(sizeof($breadcrumbs) > 0): ?>
<ol class="breadcrumb">
	<?php foreach($breadcrumbs as $a): ?>
	<li<?php $a['is_active'] ? ' class="active"' : '' ?>><?php echo $a['title'] ?></li>
	<?php endforeach; ?>
</ol>
<?php endif; ?>