<?php
include('./components/head.php');
include('./inc/connect_api.php');

?>

<body>
    <?php include('./components/nav.php'); ?>
    <main class="flex flex-wrap">
        <?php
        include('./components/driversList.php');
        ?>
    </main>
    <?php include('./components/footer.php'); ?>
</body>