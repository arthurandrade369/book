<html>

<body>

    <pre>
<?php
require_once("./people.php");
require_once("./book.php");

$p[0] = new People("João", 22, "M");

$l[0] = new Book("O Andar do Bebado", "Leonard Mlodinow", 108, $p[0]);

print_r($l[0]);
?></pre>

</body>

</html>