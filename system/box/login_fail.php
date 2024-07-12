<?php
require('../config.php');
?>
<div class="centered_element">
	<div class="modal_content">
		<div class="pad15">
			<div class="vpad5">
				<img class="med_icon" src="default_images/icons/warning.svg"/>
			</div>
			<p class="text_large bold vpad10"><?php echo $lang['something_wrong']; ?></p>
			<p><?php echo $lang['login_fail']; ?></p>
		</div>
	</div>
	<div class="modal_control">
		<button class="reg_button cancel_modal theme_btn"><?php echo $lang['ok']; ?></button>
	</div>
</div>