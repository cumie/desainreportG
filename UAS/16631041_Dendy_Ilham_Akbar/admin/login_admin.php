<!DOCTYPE html>
<html>
<head>
    <title>inkom.co.id</title>
    <script language="javascript">
function validasi(form){
    if (form.user.value=="") {
        alert("silahkan masukkan username anda");
        form.user.focus();
        return(false);
    }
    if (form.pass.value=="") {
        alert("silahkan masukkan password anda");
        form.user.focus();
        return(false);
    }
    return (true);
}
</script>
</head>
<body>

<?php
include("../masterpages/header.php");
?>
<form name="form_login" method="post" action="../config/cek_login_admin.php" onsubmit="return validasi(this)">
<div class="container">
    <div class="col-sm-12"  style=" padding:15px;">
        <div class="col-sm-4" ></div>
        <div class="col-sm-4" >
            <div class="panel panel-default">
                <div class="panel-body"><center><h2>Login Admin</h2></center></div>
                <hr>
                <div class="panel-body">
                    <input id="user" name="user" type="text" class="form-control" placeholder="Username"><br>
                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Password"><br>
                    <div class="form-group">
		    <button id="Submit" name="Submit" type="submit" class="btn btn-info btn-lg btn-block">Sign In</button>
		    </div>
                </div>
            <?php
            if(isset($_REQUEST['act'])=='no')
            echo "<label style='color:red'>
            username dan Password Salah !!!!!!!! </label>";
        ?>    
            </div>
            
        </div>
        <div class="col-sm-4" ></div>
        </div>
    </div>
</div>
</form>
<?php
include("../masterpages/footer.php");
?>

</body>
</html>
