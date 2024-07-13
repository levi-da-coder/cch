<?php
require('../config_session.php');

$delay = getDelay();
$friend_list = '';
$online_friend = '';
$offline_friend = '';
$friends = 0;
$lazy_state = 0;
$lazy_min = 20;

$find_friend = $mysqli->query("
	SELECT boom_users.*, boom_friends.* 
	FROM boom_users, boom_friends 
	WHERE hunter = '{$data['user_id']}' AND fstatus = '3' AND target = boom_users.user_id 
	ORDER BY user_name ASC
");

if($find_friend->num_rows > 0){				
	while($find = $find_friend->fetch_assoc()){
		$friends++;
		if($find['last_action'] > getDelay()){
			$online_friend .= createUserListToInvite($find);
		}
	}
}
$glob_friend = $online_friend ;
?>
<div class="modal_content tpad15">
    <div class="ulist_container">
        <div class="ignore_listing">
            <?php if($glob_friend == ''){ ?>
            <div class="boom_keep pad10" id="container_friends">
                <?php echo emptyZone($lang['no_friend']); ?>
            </div>
            <?php } ?>
            <?php if($online_friend != ''){ ?>
            <div class="online_user">
                <?php echo $online_friend; ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>