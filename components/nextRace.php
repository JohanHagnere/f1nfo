<?php

$url = "http://ergast.com/api/f1/current.json";
$data = getData($url);
// Définir la date future
$gp = $data['MRData']['RaceTable']['Races'][3]['raceName'];
$date = $data['MRData']['RaceTable']['Races'][3]['date'];
$time = $data['MRData']['RaceTable']['Races'][3]['time'];
$future_date = strtotime($date . $time);

// Calculer la différence entre la date future et la date actuelle
$time_diff = $future_date - time();

// Calculer les jours, heures, minutes et secondes restantes
$days = floor($time_diff / (60 * 60 * 24));
$hours = floor(($time_diff % (60 * 60 * 24)) / (60 * 60));
$minutes = floor(($time_diff % (60 * 60)) / 60);
$seconds = $time_diff % 60;

// Afficher le compte à rebours
// echo "Il reste $days jours, $hours heures, $minutes minutes et $seconds secondes avant la date future.";
?>
<section class="timer">
    <p>Next race:</p>
    <img src="https://flagcdn.com/160x120/az.png" width="160" height="120" alt="<?= $data['MRData']['RaceTable']['Races'][3]['Circuit']['Location']['country'] ?>" id="flag">
    <h3><?= $gp ?></h3>
    <span>In <?= $days ?> days.</span>
</section>