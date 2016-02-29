<?
// namespace stuff
use \Michelf\Markdown;

// 1. split into sections based by '++'
// 2. trim whitespace
// 3. convert from markdown to html
function process_body($b)
{
	$b_arr = explode("++", $b);
	foreach($b_arr as &$b)
	{
		$b = trim($b);
		$b = Markdown::defaultTransform($b);
	}
	return $b_arr;
}
$oarr = $oo->get($uu->id);
$body = $oarr["body"];
$b_arr = process_body($body);
$marr = $oo->media($uu->id);

if($show_menu)
{
?><section id="body" class="hidden"><?
}
else
{
?><section id="body" class="visible"><?
}
	?><div id="breadcrumbs">
		<ul class="nav-level">
			<li><?
				if(!$uu->id)
				{
				?> Alas, poor Yorick! I knew him, Horatio: a fellow of infinite jest.<a href="/how-to">*&nbsp;</a><?
				}
				else
				{
				?><a href="<? echo $host.$a_url; ?>">Hamlet, Prince of Denmark.</a><?
				}
			?></li>
			<ul class="nav-level">
				<span><? echo $name; ?></span>
			</ul>
		</ul>
	</div><?
for($i = 0; $i < count($b_arr); $i++)
{
	if($i % 2 == 0)
	{
	?><div class="column-container-container"><?
	}
	?><div class="column-container"><? 
		echo $b_arr[$i];
		if($i == 0)
		{
			foreach($marr as $m)
			{
		?><div><img src="<? echo m_url($m);?>" id="fullscreen"></div><?
			}
		}
	?></div><?
	if($i % 2 == 1)
	{
	?></div><?
	}
} 
?></section>

<script type="text/javascript" src="<? echo $host; ?>static/js/screenfull.js"></script>	
<script>
	var e;
	if (e = document.getElementById('fullscreen')) {
		e.addEventListener('click', function () {
			if (screenfull.enabled) {
				screenfull.toggle(e);
			}
		});
	}
</script>
