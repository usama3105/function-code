<?php

function sum(int $a, int $b)
{
    return $a+$b;
}
function multiply(int $a, int $b)
{
    return $a*$b;
}
function sub(int $a, int $b)
{
    if($a>$b){
        return $a-$b;
    }
    else{
        return $b-$a;
    }
}
function Devide(int $a, int $b)
{
    if($a>$b){
        return $a/$b;
    }
    else{
        return $b/$a;
    }
}
function module(int $a, int $b)
{
    if($a>$b){
        return $a%$b;
    }
    else{
        return $b%$a;
    }
}

if($_POST['num1']&& $_POST['num2']&& $_POST['opt']){

    $e=$_POST['num1'];
    $f=$_POST['num2'];
    $g=$_POST['opt'];





}
switch($g){
    case '+':
    echo "Addition is"." ".sum($e,$f);

    break;

    case '-':
    echo "Subtract is"." ".sub($e,$f);

    break;

    case '*':
    echo "Multiplication is"." ".multiply($e,$f);

    break;

    case '/':
    echo "Devision is"." ".Devide($e,$f);

    break;

    case '%':
    echo "Reminder is"." ".module($e,$f);

    break;

    default:
 echo "Invalid";
 break;

}






?>