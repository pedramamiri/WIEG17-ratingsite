<?php include 'index.php';?>
<pre>
<?php
$key = $_GET['key'];  
echo "<h3>$key</h3><br/>";
print_r($detail[$_GET['key']]);
?>
</pre>