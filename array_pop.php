<pre>
<?php

$fruits = array('orange', 'apple', 'mango');
print_r($fruits);

$a = array_pop($fruits); //cutting the last one
echo $a;
echo "<br>";

print_r($fruits);

echo "<hr>";


$fruits1 = array('orange', 'apple', 'mango');
print_r($fruits1);

$b = array_push($fruits1, 'banana');
echo "<br>";

print_r($fruits1);

$c = array_shift($fruits1);
print_r($fruits1);
echo "<hr>";

$a = array_unshift($fruits1, 'orange');
print_r($fruits1);

?>
</pre>