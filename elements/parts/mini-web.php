<div class="clearfix text-white" style="background:#fafafa;">
	<div class="bg-blue clearfix">
		<div class="pull-right" style="padding:5px 10px;">
			<i class="icon icon-signal"></i>&nbsp;&nbsp;<i class="icon icon-screen desktop-nav"></i><i class="icon icon-bolt show-on-tablet"></i><i class="icon icon-mobile show-on-mobile"></i>&nbsp;&nbsp;<?=date('H:i')?>
		</div>
	</div>
	<div class="bg-blue bg-minus-2 base-padding clearfix">
		<div class="relative pull-left" style="padding-top:4px;">
			<i class="icon icon-list2 text-white" style="font-size:24px;line-height:24px;"></i>
			<div class="drop down left bg-white card" style="width:200px;">
				<ul class="unstyled">
					<li>
						<a href="#" class="list-item">LINK ONE</a>
					</li>
					<li>
						<a href="#" class="list-item">LINK TWO</a>
					</li>
					<li>
						<a href="#" class="list-item">LINK THREE</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="text" style="padding-left:25px;">
			<h2 style="margin:0 0 2px 0;">Nature Images</h2>
		</div>
	</div>

	<?
	$examples = array('nature', 'forest', 'woods', 'backyard', 'heaven', 'sea', 'cliff');
	?>

	<div class="base-padding" style="padding-right:0;">
		<? foreach($examples as $ex) { ?>
		<div class="tile bg-white pull-left text-grey text-plus-3" style="margin:0 8px 8px 0;">
			<div class="image" style="max-height:100px;overflow:hidden;">
				<img src="http://<?=$ex?>.jpg.to" />
			</div>
			<div class="text base-padding">
				Image of <?=ucfirst($ex)?><br /><br />
				<a href="#" class="button text text-grey text-plus-3">Share</a>
				<a href="#" class="button text text-orange">Open map</a>
			</div>
		</div>
		<? } ?>
	</div>
</div>