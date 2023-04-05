<?php
include('./components/head.php'); ?>

<body>
    <?php include('./components/nav.php'); ?>
    <main>
        <h1>F1nfo</h1>
        <h2 class="center-text">Log in</h2>
        <section class="content-form">
            <form action="./inc/login.php" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="Log in">
            </form>

        </section>
    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>