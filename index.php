<?php
include('./components/head.php'); ?>

<body>
    <?php include('./components/nav.php'); ?>
    <main>
        <h1>F1nfo</h1>
        <p>Results of the last race</p>
        <section class="content">
            <?php
            require_once('./inc/connect_api.php');
            include('./components/lastRaceResults.php');
            // include('./components/driversStandings.php');
            include('./components/nextRace.php');
            ?>

        </section>
    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>