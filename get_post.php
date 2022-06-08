
<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// isset nélkül első betöltésre rinyál, de amúgy ha kap értéket fasza,csak rinyál az array miatt hogy üres vagy nincs name valami ($_POST['name'])
if (isset($_POST['name'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['name'] . '</h3>';
} ?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>
<?php 
// isset kell, amúgy nem lesz true ha van értékea $_GET-nek
if (isset($_GET['username'])) {
    echo $_GET['username'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad&age=30">Link</a>
<?php 
if (isset($_GET['username']) && isset($_GET['age'])) {
    echo $_GET['username'] . '<br>';
    echo $_GET['age'];
}
?>
<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>

<br><br>
<?php 
if (isset($_POST['submit'])) {
    echo $_POST['name'] . '<br>';
    echo $_POST['password'];
}
?>
<br><br>


<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<div>
  <label>Name: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<label>Age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>

<br><br>

<?php 
if (isset($_GET['username']) && isset($_GET['age'])) {
    echo $_GET['username'] . '<br>';
    echo $_GET['age'];
}
?>
<br><br>