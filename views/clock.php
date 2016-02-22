<?
$sql = "select id from objects where url='settings'";
$settings_id = $db->query($sql)->fetch_assoc()['id'];
if($settings_id)
{
	$m = $oo->media($settings_id)[0];
	if($m)
		$img = m_url($m);
	else
		$img = "/media/svg/yorick.svg";
}
else
	$img = "/media/svg/yorick.svg";
?><script type="text/javascript" src="<? echo $host; ?>static/js/global.js"></script>
<script type="text/javascript" src="<? echo $host; ?>static/js/clock.js"></script><?
if(!$uu->id)
{
?>
<div id="skull-container" class="v-centre">
	<img id="clock-canvas" class="large skull" src="<? echo $img ?>">
</div><?
}
else
{
?>
	<div id="skull-container" class="lower-right">
		<img id="clock-canvas" class="small skull" src="<? echo $img; ?>">
	</div><?
}
?><script>
var isHidden;
<?
if($show_menu)
{ ?>isHidden = false;<? }
else
{ ?>isHidden = true;<? }
?>
document.getElementById("clock-canvas").addEventListener("click", showHide);
</script>