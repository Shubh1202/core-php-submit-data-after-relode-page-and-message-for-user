




<html>
<head>
<?php
$msg="";
if(isset($_REQUEST['submit'])){
$sql=1;
if($sql==1){
$msg = "Successfully Added";
$type = "success";
}else{
$msg = "Something went wrong";
$type = "error";
}
}
?>
</head>
<body>
<?php
if($msg!="")
relode($msg, $type);
?>
<form action="" method="post">
	<input type="submit" name="submit" value="send">
</form>
<?php function relode($msg, $type){ ?>
<script src="sweetalert2@10.js"></script>
<script>
Swal.fire({
  position: 'top-end',
  title: "<?php echo $msg; ?>",
  icon: "<?php echo $type; ?>",
  showConfirmButton: false,
  timer: 1500,
}).then(function() {
    window.top.location = window.top.location
});
</script>
<?php } ?>
</body>
</html>