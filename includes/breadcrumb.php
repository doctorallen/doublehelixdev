<?php
//breadcrumb navigation for inner pages
$url = urldecode($_SERVER['REQUEST_URI']);
$url = explode( '/', $url );
?>
<ul class="breadcrumb">
	<li><a href="http://doublehelixdev.com/<?php echo $url[1]; ?>"><?php echo $url[1] ?></a><span class="divider">/</span></li>
	<li class="active"><?php echo $url[2] ?></a></li>
</ul>
