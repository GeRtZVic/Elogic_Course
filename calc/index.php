<?php
spl_autoload_register(function($class) {
    $file_name = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) require $file_name;
    else echo "new autoloader failed! with class: " . $file_name;
});
$calcModel = new \Models\CalculatorModel();

echo $calcModel->calcNumbers(4,2,"*")."<br>";
echo $calcModel->calcNumbers(4,2,"-")."<br>";
echo $calcModel->calcNumbers(4,2,"/")."<br>";
echo $calcModel->calcNumbers(4,2,"+")."<br>";