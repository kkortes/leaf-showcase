<?
include "base.php";
?>
<div class="nest">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Tabs
      </h1>

      <h2>Usage</h2>
      .tabs > .crow.fly.no-gutter > div > a.button.tab-link

      <h2>Consider using</h2>
      .active (for active state)<br />
      .text-{color}<br />
      .bg-{color}
      
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
     
      <div class="tabs bg-grey bg-minus-3">
				<div class="crow fly no-gutter down">
					<?
					foreach(array('Home', 'Page', '<i class="icon icon-leaf"></i>') as $text) {
					?>
					<div>
						<a href="#" class="tab-link button text-black"><?=$text?></a>
					</div>
					<? } ?>
				</div>
			</div>

    </div>
  </div>
    <h2>Raw output, various sizes</h2>
</div>
<?=$component?>