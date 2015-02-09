    </div>
    <!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
    <?=$app->get('parts/bot')?>

    <script src="<?=$app->url?>bower_components/jquery/dist/jquery.min.js?v=<?=date('ms')?>"></script>
    <script>window.app_url = '<?=$app->url?>'</script>
    <script>window.app_server_url = '<?=$app->server_url?>'</script>
    <script src="<?=$app->url?>bower_components/leaf-css-framework/js/libs/imagesloaded/imagesloaded.pkgd.min.js?v=<?=date('ms')?>"></script>
    <script src="<?=$app->url?>bower_components/leaf-css-framework/js/libs/hammer.js?v=<?=date('ms')?>"></script>
    <script src="<?=$app->url?>bower_components/leaf-css-framework/js/libs/waves/dist/waves.js?v=<?=date('ms')?>"></script>
    <script src="<?=$app->url?>bower_components/leaf-css-framework/js/script.js?v=<?=date('ms')?>"></script>
    <script src="<?=$app->url?>assets/js/script.js?v=<?=date('ms')?>"></script>
  </body>
</html>