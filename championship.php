<?php
include('./components/head.php');
include('./inc/connect_api.php');

?>

<body>
    <?php include('./components/nav.php'); ?>
    <main class="flex justify-content flex-wrap">
        <?php
        include('./components/driversStandings.php');
        include('./components/constructorStandings.php');
        ?>
    </main>
</body>