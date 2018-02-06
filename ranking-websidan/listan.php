<?php include 'index.php';?>
<pre>
<?php

$list = array("1. SZA,The Weekend","2. Bruno Mars, That's What I Like","4. Childish Gambino, Redbone","3. Remy Ma, Shether","6. Dua Lipa, New Rules","5. Cardi B, Bodak Yellow (Money Moves)");
$list = sortMyArray($list);
foreach($list as $value){
    echo "<pre><h3>$value</h3></pre>";
}





?>

<form  action="listan.php" metod="get">
<?php if (isset($_GET['name'])) {echo "Thanks ". $_GET['name'].",you are registerd for weekly newsletter";}?>
<h3>Register for weekly email newsletter</h3>
Namn:        <input type="text"   name="name"/><br/>
Email:       <input type="text"  name="email"/><br/>
<input name="id" type="hidden" value="<?=$_GET['id'];?>" />
<input type="submit"/>
</form>
</pre>




