<?php

$array = file_get_contents('file.json');

$array = json_decode($array, true);

//var_dump($array);

echo '<table cellpadding="5" cellspacing="0" border="1">';
foreach ($array as $key => $value) {
    echo "<tr><td>" . $value['name'] . "</td><td>" . $value['phone'] . "</td></tr>";
}
echo "</table>";
?>

<!--____________________________________________________________________________________-->

<table cellpadding="5" cellspacing="0" border="1">
    <?php foreach ($array as $key => $value) :?>
        <tr>
            <td><?= $value['name']; ?></td>
            <td><?= $value['phone']; ?></td>
        </tr>
    <?php endforeach;?>
</table>
