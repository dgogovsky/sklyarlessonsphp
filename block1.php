<?php
print 'How are you?';
print 'I\'m fine.';

/*Напишите на PHP программу, вычисляющую общую стоимость трапезы в ресторане, состо-
ящей из двух гамбургеров по 4,95 доллара каждый, одного молочно-шоколадного коктейля
за 1,95 доллара и одной порции кока-колы за 0,85 доллара. Ставка налога на добавленную
стоимость составляет 7,5%, а чаевые без вычета налогов — 16%.*/
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2 * $hamburger) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total = $food + $tip + $tax;
print 'The total cost of the meal is $' . $total;