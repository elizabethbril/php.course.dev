<?php
/*
  $name = "Mike";

  function sayHello(&$name) {
  echo "<h1>Hello, $name!</h1>";
  $name = "Вася";
  }

  sayHello($name);
  echo $name; // ???
 */
/*
  function test() {
  $a = 0;
  echo $a++;
  ?>
  <br />
  <?php
  }

  test(); // 0
  test(); // 0
  test(); // 0
 */

function test() {
	static $a = 0;
	echo $a++;
	?>
	<br />
	<?php
}

test(); // 0
test(); // 1
test(); // 2