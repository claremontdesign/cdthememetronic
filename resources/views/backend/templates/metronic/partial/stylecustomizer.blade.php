<?php
$enable = cd_enable(cd_config('themes.backend.metronic.config.customizer'));
if(empty($enable))
{
	return '';
}
?>
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="theme-panel hidden-xs hidden-sm">
	<div class="toggler">
	</div>
	<div class="toggler-close">
	</div>
	<div class="theme-options">
		<div class="theme-option theme-colors clearfix">
			<span>
				THEME COLOR
			</span>
			<ul>
				<li class="color-black current color-default" data-style="default">
				</li>
				<li class="color-blue" data-style="blue">
				</li>
				<li class="color-brown" data-style="brown">
				</li>
				<li class="color-purple" data-style="purple">
				</li>
				<li class="color-grey" data-style="grey">
				</li>
				<li class="color-white color-light" data-style="light">
				</li>
			</ul>
		</div>
		<div class="theme-option">
			<span>
				Layout
			</span>
			<select class="layout-option form-control input-small">
				<option value="fluid" selected="selected">Fluid</option>
				<option value="boxed">Boxed</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
				Header
			</span>
			<select class="header-option form-control input-small">
				<option value="fixed" selected="selected">Fixed</option>
				<option value="default">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
				Sidebar
			</span>
			<select class="sidebar-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
				Sidebar Position
			</span>
			<select class="sidebar-pos-option form-control input-small">
				<option value="left" selected="selected">Left</option>
				<option value="right">Right</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
				Footer
			</span>
			<select class="footer-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
	</div>
</div>
<!-- END STYLE CUSTOMIZER -->