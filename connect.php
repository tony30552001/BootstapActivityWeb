<?php

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $facebook = $_POST['facebook'];	
		$line = $_POST['suggestion'];
}
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
		$txt = "Name：".$_POST['name'];
		fwrite($myfile, $txt.PHP_EOL);
		$txt = "FB     ：".$_POST['facebook'];
		fwrite($myfile, $txt.PHP_EOL) ;
		$txt = "建議 ：".$_POST['suggestion']; 
		fwrite($myfile , $txt.PHP_EOL.PHP_EOL);
		fclose($myfile);

     //header("Location:../Activity/connect.php?msg=感謝您的加入>.^");	
	 echo "<script>alert('感謝您的加入,祝您有個美好的一天 >.^');location.href='Xmas.html'</script>"; 
	
?>
