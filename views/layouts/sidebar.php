<?php
$lists = [
    [
        "module=site&routes=logout",
        "Logout",
    ],
    [
        "module=site&routes=login",
        "login",
    ],
    [
        "module=site&routes=index",
        "Index",
    ],
];
?>
<ul class="nav nav-pills">
<?php foreach($lists as $list): ?>
    <li class="nav-item"><a href="?<?= $list[0] ?>" class="nav-link <?= (strpos("?".$_SERVER['QUERY_STRING'], $list[0]) != false) ? "active" : '' ?>"><?= $list[1] ?></a></li>
<?php endforeach ?>
</ul>