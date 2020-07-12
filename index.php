<?php
include("../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");
$xoopsOption['show_rblock'] = 1;
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}
?>
<div align="left"><h2><?php echo ''._TEXTFLIP_HEADER.'' ?></h2><br />
<?php echo ''._TEXTFLIP_WHATIS.'' ?><br /><br /></div>
<script type="text/javascript" src="js/fliptext.js"></script>
<div align="center">
<form name="f" action="">
<?php echo''._TEXTFLIP_TYPE.''?><br />
<textarea rows="5" cols="60" name="original" onkeyup="flip()"></textarea><br />
<input type="button" value="<?php echo''._TEXTFLIP_FLIP2.''?>" name="flip_button" onclick="flip();" /><br />
<br /><?php echo ''._TEXTFLIP_FLIP.'' ?><br />
<textarea rows="5" cols="60" onFocus="this.select()" name="flipped"></textarea><br />
<input type="button" value="<?php echo''._TEXTFLIP_HL.''?>" onClick="javascript:f.flipped.focus();this.form.flipped.select();" name="button" /><br /><br />
</form>
</div>  
<!-- AddThis Button BEGIN -->
<div align="center" class="addthis_toolbox addthis_default_style">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4b73f75c64bdc7ea" class="addthis_button_compact">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4b73f75c64bdc7ea"></script>
<!-- AddThis Button END -->
<script type="text/javascript" src="js/url.js"></script>
</div><br /><div align="center"><?php echo ''._TEXTFLIP_BY.'' ?> <a href="http://danordesign.com" target="_blank">Danordesign</a>
</div>
<?php
if(isset($xoTheme) && is_object($xoTheme)) {
$xoTheme->addMeta( 'meta', 'keywords', ''._TEXTFLIP_META_KEYWORDS.'');
$xoTheme->addMeta( 'meta', 'description', ''._TEXTFLIP_META_DESC.'');
$xoopsTpl->assign('xoops_sitename',''._TEXTFLIP_META_TITLE.'');
}
include(XOOPS_ROOT_PATH."/footer.php");
?>