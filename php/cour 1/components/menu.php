<?php
$base_url = "/cour%20poleS/php/cour%201";
?>

<nav>
    <ul>
        <li><a href="<?php echo $base_url; ?>/index.php">cour1</a></li>
        <li><a href="<?php echo $base_url; ?>/pages/cour2.php">cour2</a></li>
        <li><a href="<?php echo $base_url; ?>/pages/cour3.php">cour3</a></li>
    </ul>
</nav>


<style>
    ul{
        display: flex;
    }
    li{
        margin: 10px;
        list-style: none;
    }
    a{
        text-decoration: none;
        color: gray;
    }
    a:hover{
        color: black;
    }
    a:visited {
text-decoration: solid;
}
</style>