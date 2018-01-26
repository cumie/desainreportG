<?php
session_start();
session_destroy();
echo "
	<script>
		alert('Anda Berhasil Logout')
	</script>
";
header("location:login.php");
?>