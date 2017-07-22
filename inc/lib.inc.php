<?php

function drowTable($cols = 10, $rows = 10) {
	$cols = (int) $cols;
	$rows = (int) $rows;
	?>
	<table border='1' width="200">
		<?php
		for ($r = 1; $r <= $rows; $r++) {
			?>
			<tr>
				<?php
				for ($c = 1; $c <= $cols; $c++) {
					$class = ($r === 1 || $c === 1) ? 'th' : '';
					?>
					<td class="<?php echo $class; ?>">
					<?php echo $r * $c; ?>
					</td>
					<?php
				}
				?>
			</tr>
			<?php
		}
		?>
	</table>
	<?php
}

function drawMenu($menu = false, $vertical = true) {

	if (!$menu) {
		return;
	}

	$class = !$vertical ? 'horizontal' : ''
	?>
	<ul class="<?php echo $class; ?>">
		<?php
		foreach ($menu as $item) {
			?>
			<li>
				<a href=<?php echo $item['href']; ?>><?php echo $item["link"] ?></a>
			</li>
			<?php
		}
		?>
	</ul>
	<?php
}
?>