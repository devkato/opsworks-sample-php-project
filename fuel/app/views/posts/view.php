<h2>Viewing <span class='muted'>#<?php echo $post->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $post->title; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $post->body; ?></p>

<?php echo Html::anchor('posts/edit/'.$post->id, 'Edit'); ?> |
<?php echo Html::anchor('posts', 'Back'); ?>