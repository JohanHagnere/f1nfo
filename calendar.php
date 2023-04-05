<?php
include('./components/head.php');
include('./inc/connect_api.php');
$url = "http://ergast.com/api/f1/current.json";
$data = getData($url);
// Définir la date future
$gp = $data['MRData']['RaceTable']['Races'][3]['raceName'];
$date = $data['MRData']['RaceTable']['Races'][3]['date'];
$time = $data['MRData']['RaceTable']['Races'][3]['time'];
?>

<body>
    <?php
    include('./components/nav.php');

    ?>
    <main>
        <div class="accordion" id="accordion">
            <?php
            for ($i = 0; $i < count($data['MRData']['RaceTable']['Races']); $i++) {
                $info = $data['MRData']['RaceTable']['Races'][$i];
            ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
                            <?= $info['raceName'] ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>
                                Circuit: <?= $info['Circuit']['circuitName']; ?>
                            </p>
                            <p>Country: <?= $info['Circuit']['Location']['country'] ?></p>
                            <p>Date: <?= $info['date'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
    <?php include('./components/footer.php'); ?>
</body>