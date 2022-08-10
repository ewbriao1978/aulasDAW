<html>
<?php 
$my_var = $_POST['my_i'];
echo "Number of iterators: ".htmlspecialchars($my_var) ."<br />"; 

for ($i=0; $i<$my_var; $i++){
   echo "Iteration nº $i <br />";

}

echo "<p> End of script </p>";
?>


</html>