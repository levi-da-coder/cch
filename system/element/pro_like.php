<?php
$add = ''; 
if($boom['liking'] > 0){
	$add = 'onclick="proLike(' . $boom['user'] . ');"';
}
if($boom['liked'] > 0){
	$liked = 'proliked.svg';
}
else {
	$liked = 'prolike.svg';
}
?>
<div class="tpad5">
	<div class="lite_olay plike_item plikes"  <?php echo $add; ?>>
		<img src="default_images/prolike/<?php echo $liked; ?>"/> <span class="plike_count"><?php echo $boom['total_like']; ?></span>
	</div>
</div>