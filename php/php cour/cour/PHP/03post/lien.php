<?php
print "<pre>";
print_r($_GET);
print "</pre>";
include_once "fonction.inc.php";
if(isset($_GET['fruit'])){
echo calcul($_GET['fruit'],1000);
}
?>



<a href="lien.php?fruit=bananes">bananes</a>
<a href="lien.php?fruit=poires">poires</a>
<a href="lien.php?fruit=cerise">cerise</a>
<a href="lien.php?fruit=pommes">pommes</a>