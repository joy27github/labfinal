<!-- if(isset($_POST["submit"])){

$_SESSION['submit'] = $_POST['submit'];     
$name = $_POST["name"];
$age = $_POST["age"];
$section = $_POST["section"];

$sql = "insert into student (name, age, section)
values ('$name', '$age', '$section')";

$data = mysqli_query($conn, $sql);

if($data){
    echo "Data is successfully Inserted";
}
else
{
    echo "Failed to inserted";
}


} -->

<?php

$color = array('white', 'gold')

?>
<html>
<p>
<ol type="A">
<li>
  <?php
  echo implode(" ",$color);
  ?>
</li>
<li>
  <?php
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $color) . '</li>';
    echo '</ul>';
?>
</li>

</ol> 

</p>



</html>


