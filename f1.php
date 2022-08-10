<html>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
My address is <?php echo $_POST['address']; ?>.

</html>