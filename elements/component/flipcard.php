<?
include "base.php";
?>
<div class="nest">
	<div class="crow up">
		<div class="ws-8">
			<h1>
			Flipcard
			</h1>

			<h2>Usage</h2>
			.flip(&.toggle) > .front .back

			<h2>Consider using</h2>
			.bg-{color}<br />
			.base-padding & .strong-padding<br />
			.card or .tile<br />
			<a href="/grid">.crow</a> inside a .card or .tile

			<h2><i class="icon icon-warning"></i> Side note(s)</h2>
      Add the class .toggle to a .flip-element to trigger the flipping transform animation. In the examples beneath the class is added on hover, and the example to the right on click.
		</div>
		<div class="ws-4 mod-row">
			<div class="spacer half"></div>
			<div class="label">Example (inspect me):</div>
			<div class="spacer quarter"></div>
			<div class="flip onclick">
				<div class="front">
					<div class="card">
						<div class="image">
							<img src="<?=$app->url?>assets/image/dummies/ex1.png" style="width:100%;" />
						</div>
						<div class="strong-padding">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							<br /><br />
							<a href="#" class="button text text-grey text-plus-2">Share</a>
							<a href="#" class="button text text-orange">Learn more</a>
						</div>
					</div>
				</div>
				<div class="back">
					<div class="card">
						<div class="image">
							<img src="<?=$app->url?>assets/image/cows.jpg" style="width:100%;" />
						</div>
						<div class="strong-padding">
							Located two hours south of Sydney in the Southern Highlands of South Wales, ...
							<br /><br />
							<a href="#" class="button text text-grey text-plus-2">Share</a>
							<a href="#" class="button text text-orange">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<h2>Raw output, various sizes</h2>
</div>
<?=$component?>