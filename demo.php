
<?php 

$name = $_POST['name'];

function display_input($name){
$number = rand(6,15);
echo "$name " . "$number";
}
display_input($name);

  
?>