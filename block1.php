<?php
print 'How are you?</br>';
print 'I\'m fine.</br>';

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

/*Видоизмените программу из предыдущего упражнения, чтобы вывести счет в отформатирован-
ном виде. В частности, выведите сначала цену и количество каждого блюда вместе с общей
стоимостью трапезы, а затем общую стоимость еды и напитков как без учета, так и с учетом
налога на добавленную стоимость и чаевых. Непременно выровняйте цены в выводимом счете
по вертикали.  */

printf("</br>%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger',
$hamburger, 2 * $hamburger);
printf("</br>%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake',
$shake, $hamburger);
printf("</br>%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola',
$cola, $cola);
printf("</br>%25s: \$%5.2f\n", 'Food Total', $food);
printf("</br>%25s: \$%5.2f\n", 'Food and Tax Total', $food + $tax);
printf("</br>%25s: \$%5.2f\n", 'Food, Tax, and Tip Total', $total);
/*Напишите на РНР программу, задающую имя в переменной $first_name и фамилию в пе-
ременной $last_name. Выведите символьную строку, содержащую имя и фамилию, разделив
их пробелом. Кроме того, выведите длину этой символьной строки.*/
$first_name="name";
$last_name="surname";
$len = strlen($first_name.' '.$last_name);
print $first_name.' '.$last_name.' '.$len;

/*Напишите на РНР программу, в которой применяются составные операции инкрементирования
(++) и умножения с присваиванием (*=), для вывода чисел в пределах от 1 до 5, а также
степеней числа 2 в пределах от 2 (2^1) до 32 (2^5).*/
echo '</br>';
$num1 = 1;
$num2 = 2;
print "$num1, $num2 </br>";
$num1++; $num2*=2;print "$num1, $num2 </br>";
$num1++; $num2*=2;print "$num1, $num2 </br>";
$num1++; $num2*=2;print "$num1, $num2 </br>";
$num1++; $num2*=2;print "$num1, $num2 </br>";

