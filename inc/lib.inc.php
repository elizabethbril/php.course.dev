<?php

function drowTable($cols, $rows, $color) {

	if (!$cols || !$rows || !$color) {
		return;
	}
	?>
	<table border='1' width="200">
		<?php
		for ($r = 1; $r <= $rows; $r++) {
			?>
			<tr>
				<?php
				for ($c = 1; $c <= $cols; $c++) {
					if ($r === 1 || $c === 1) {
						$class = 'th';
						$bg = $color;
					} else {
						$class = '';
						$bg = '#fff';
					}
					?>
					<td style="background-color: <?php echo $bg; ?>;" class="<?php echo $class; ?>">
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