<?
$component = $app->get('components/buttons');
?>
<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Buttons
        <div class="inline-block relative">
          <i class="icon icon-link"></i>
          <div class="drop down-left" style="width:500px;">
            <div class="tile base-padding fill-blue-grey text-white">
              <a href="http://www.google.com/design/spec/components/buttons.html" target="_blank" class="text-white">http://www.google.com/design/spec/components/buttons.html</a>
            </div>
          </div>
        </div>
      </h1>

      <h2>Usage</h2>
      a.button<br />
      a.button.circle<br />
      a.button.flat<br />
      a.button.text<br />
      input.button (submit button)
      

      <h2>Consider using</h2>
      .fill-{color}<br />
      .text-{color}<br />
      &.waves-effect

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      &.waves-effect only works if function initWaves() was called, see <i>scripts.js</i>
      <br /><br />
      <strong>Notice!</strong> Waves is still under development. I won't do a fully functional implementation before the final release.
      <br /><br />
      Limitations right now:<br />
      .circle buttons loses their shadow if .waves-effect is used<br />
      submit buttons can't run the animation<br />
      the effect doesn't trigger on mobiles and tablets
      <br /><br />
      Credits to <a href="http://publicis-indonesia.github.io/Waves/" target="_blank">fians@github</a> for Waves.
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>
      <a href="#" class="button circle fill-cyan">
        <i class="icon icon-plus3 text-white"></i>
      </a>
      <a href="#" class="button waves-button circle fill-cyan waves-effect">
        <i class="icon icon-plus3 text-white"></i>
      </a>
    </div>
  </div>
    <h2>Raw output</h2>
</div>
<?=$component?>