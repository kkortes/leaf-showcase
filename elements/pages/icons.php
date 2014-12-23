<div class="container">
  <div class="crow up">
    <div class="ws-8">
      <h1>
      Icons
      </h1>

      <h2>Usage</h2>
      .icon.icon-{icon}

      <h2>Consider using</h2>
      .text-color<br />
      .bg-color

      <h2><i class="icon icon-warning"></i> Side note(s)</h2>
      Icons by <a href="http://icomoon.io/" target="_blank">Icomoon</a>. Icomoon is easy to use and setup. In /leaf/assets/fonts you'll find a /icomoon directory. Visit <a href="http://icomoon.io/app/" target="_blank">http://icomoon.io/app/</a>, click "import icons" and choose <i>selection.json</i> from your icomoon directory and all icons will popup. You then can add/remove/edit icons and download a new package with your custom icons. Simply replace the /icomoon directory with your new one.
      <br /><br />
      Leaf CSS Framework uses icon package "Entypo" as its default package.
      <br /><br />
      Credits goes to <a href="http://danielbruce.se" target="_blank">Daniel Bruce</a> for Entypo.
    </div>
    <div class="ws-4">
      <div class="spacer half"></div>
      <div class="label">Example (inspect me):</div>
      <div class="spacer quarter"></div>

      <div class="waves-effect circle bg-white" style="width:45px;">
        <i class="icon icon-cog text-black"></i>
      </div>
    </div>
  </div>
    <h2>Raw output</h2>
</div>
<div>
  <?
  echo $app->root;
    $icons = @file_get_contents($app->root.'bower_components/leaf-css-framework/fonts/icomoon/selection.json');
    $icons = json_decode($icons);
    
    $wrappers = array(
      'circle'
    );

    $colors = array(
      'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'light-blue', 'cyan', 'teal', 'green', 'light-green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'
    );

  ?>
    <div class="crow no-gutter mod-row">
  <?
    $i=0;
    foreach($icons->icons as $icon) {
      $color = $colors[rand(0, count($colors)-1)];
      ?>
      <div class="w-5">
        <div class="tile center bg-<?=$color?> bg-minus-2 base-padding" style="width:100%;">
          <i style="word-break:break-word;">
            <i class="icon icon-<?=$icon->properties->name?>"></i> <?=$icon->properties->name?>
          </i>
        </div>
      </div>
      <?
      $i++;
    }
  ?>
  </div>
</div>