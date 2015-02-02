<?
include "base.php";
?>
<div class="nest">
	<div class="crow up">
		<div class="ws-8">
			<h1>
			Images
			</h1>

			<h2>Usage</h2>
			.image > img

			<h2>Consider using</h2>
			.overlay<br />
			&.waves-effect

			<h2><i class="icon icon-warning"></i> Side note(s)</h2>
      &.waves-effect only works if function initWaves() was called, see <i>scripts.js</i>
      <br /><br />
      <strong>Notice!</strong> Waves is still under development. I won't do a fully functional implementation before the final release.
      <br /><br />
      Limitations right now:<br />
      the effect doesn't trigger on mobiles and tablets
      <br /><br />
      Credits to <a href="http://publicis-indonesia.github.io/Waves/" target="_blank">fians@github</a> for Waves.
		</div>
		<div class="ws-4">
			<div class="spacer half"></div>
			<div class="label">Example (inspect me):</div>
			<div class="spacer quarter"></div>
			
			<div class="image waves-effect">
				<img src="<?=$app->url?>assets/image/cows.jpg" style="width:100%;" />
				<div class="overlay">
			    <p>Cows running free - <a href="http://college.careofhaus.se" class="small text-grey text-minus-2">photo found here</a>
			    </p>
			  </div>
			</div>
				
		</div>
	</div>
		<h2>Raw output, various sizes</h2>
</div>
<?=$component?>