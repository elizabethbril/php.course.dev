<?php

function sayHello($name = false) {

	if ($name) {
		echo "Hello {$name}!";
	}
}

//seyHello('Pupkin');



// Обращение к функции через переменную
$func = "sayHello";
$func("Guest"); // Hello, Guest!