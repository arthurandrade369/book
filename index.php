<html>

<body>

    <pre>
<?php
require_once("./people.php");
require_once("./book.php");

$p[0] = new People("João", 22, "M");

$l[0] = new Book("O Andar do Bebado", "Leonard Mlodinow", 108, $p[0]);

$l[1] = new Book("Rapido e Devagar","Daniel Kahneman", 150, $p[0]);

print_r($l[0]);
print_r($l[1]);

$l[0] -> browse(54);
$l[0] -> details();

?></pre>

</body>

</html>