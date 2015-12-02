<?php
$newNotificationCount = 0;
return '';
?>
<li class="dropdown" id="header_notification_bar">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<i class="fa fa-warning"></i>
		<?php if(!empty($newNotificationCount)): ?>
			<span class="badge">
				<?php echo $newNotificationCount ?>
			</span>
		<?php endif; ?>
	</a>
	<ul class="dropdown-menu extended notification">
		<?php if(!empty($newNotificationCount)): ?>
			<li>
				<p>
					You have <?php echo $newNotificationCount ?> New Notifications
				</p>
			</li>
		<?php endif; ?>
		<li class="external">
			<a href="#">
				See all notifications <i class="m-icon-swapright"></i>
			</a>
		</li>
	</ul>
</li>