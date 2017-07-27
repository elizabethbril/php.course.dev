<!-- Область основного контента -->

<?php 
function clearData($data, $type ='i'){
    {
         return $data*1;
          
    }
    
}
$output ="";
if($_SERVER['REQUEST_METHOD']== "POST"){
    $num1 = clearData($_POST['num1']);
    $num2 = clearData($_POST['num2']);
    $operator = $_POST['operator'];
    $output = "$num1 $operator $num2 = ";
    switch ($operator){
        case '+': $output  .= $num1 + $num2;
            break;
         case '-': $output .= $num1 - $num2;
            break;
         case '*': $output .= $num1 * $num2;
            break;
         case '/': 
             if($num2 == 0) 
                 $output = "Деление на ноль запрещено";
                 else
                     $output .= $num1 / $num2;
            break;
        default: $output = "Неизвестный оператор '$operator'";
    }
}

?>

<form action="<?=$_SERVER['PHP_FILE']?>" method="post">
   
	<label>Число 1:</label>
	<br />
	<input name='num1' type='text' />
	<br />
	<label>Оператор: </label>
	<br />
	<input name='operator' type='text' />
	<br />
	<label>Число 2: </label>
	<br />
        <input name='num2' type='text' />
	<br />
	<br />
      	<input type='submit' value='Считать'>
</form>
<?php 
if($output){
    echo $output;
}
?>
