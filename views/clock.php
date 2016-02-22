<script type="text/javascript" src="<? echo $host; ?>static/js/global.js"></script>
<script type="text/javascript" src="<? echo $host; ?>static/js/clock.js"></script><?
if(!$uu->id)
{
?>
<div id="skull-container" class="v-centre">
	<img id="clock-canvas" class="large skull" src="/media/svg/yorick.svg">
</div><?
}
else
{
?>
	<div id="skull-container" class="lower-right">
		<img id="clock-canvas" class="small skull" src="/media/svg/yorick.svg">
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