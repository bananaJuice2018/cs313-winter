<HTML>
<BODY>

<?php 
	session_start();
	$_SESSION["page_index"] = 2;
	require("top_bar.php");
?>

<div class="center" style="height: 80%">
	<img src="assets/coming_soon.jpg" style="width: 25%; object-fit: contain"/>
</div>

<?php require("bottom_bar.php");?>

</BODY>
</HTML>