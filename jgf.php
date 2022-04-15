<?php
	$k = 0;
	if ($_POST['q1']==1) {
		$k = $k + 1;
	}
	if ($_POST['q2']==2) {
		$k = $k + 1;
	}
	if ($_POST['q3']==1) {
		$k = $k + 1;
	}
	if ($_POST['q4']==4) {
		$k = $k + 1;
	}
	if ($_POST['q5']==2) {
		$k = $k + 1;
	}
	if ($_POST['q6']==3) {
		$k = $k + 1;
	}
	if ($_POST['q7']==1) {
		$k = $k + 1;
	}
	if ($_POST['q8']==1) {
		$k = $k + 1;
	}
	if ($_POST['q9']==2) {
		$k = $k + 1;
	}
	if ($_POST['q10']==2) {
		$k = $k + 1;
	}
	header("Location: win.php?lol=$k");
 ?>