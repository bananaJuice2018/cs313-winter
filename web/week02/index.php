<HTML>
<BODY>

<?php 
	session_start();
	$_SESSION["page_index"] = 0;
	require("top_bar.php");
?>

<div class="center" style="height: 80%">
	<img src="assets/plan.jpg" style="width: 40%; object-fit: contain"/>
</div>

<?php require("bottom_bar.php");?>

</BODY>
</HTML>