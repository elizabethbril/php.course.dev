<?php
/*
  for($i = 1; $i <= 50; $i++){
  echo $i%2 === 0 ? $i . '<br />' : '';
  }
 */

/*
  for ($i = 1; $i < 50; $i++) {
  if ($i % 2 !== 0) {
  echo $i . "<br />";
  }
  }
 */

/*
  $i = 1;
  while ($i <= 10) {
  echo $i++;
  if ($i == 5) {
  break;
  }
  }
 */
/*
  $i = 0;
  while ($i < 9) {
  $i++;
  if ($i == 5) {
  continue;
  }
  echo $i;
  }
 */


/*
$i = 1;
$j = 1;
while ($j <= 10) {
	while ($i <= 10) {
		?>
		<div style="background: red;">
			<?php echo $i++; ?>
		</div>
		<?php
		if ($i == 5) {
			break 2;
		}
	}
	?>
	<div style="background: green;">
		<?php echo $j++; ?>
	</div>
	<?php
	$i = 0;
	$j++;
}
*/