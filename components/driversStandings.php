<section class="driversStandings">
    <h2>Current drivers' standings</h2>
    <table>
        <thead>
            <th>Position</th>
            <th>Driver</th>
            <th>Constructor</th>
            <th>Points</th>
        </thead>
        <tbody>
            <?php
            $championshipDriverData = getData("http://ergast.com/api/f1/current/driverStandings.json");
            $driverStanding = $championshipDriverData['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'];
            foreach ($driverStanding as $driver) {
            ?>
                <tr>
                    <td><?= $driver['position']; ?></td>
                    <td><?= $driver['Driver']["givenName"] . " " . $driver['Driver']['familyName']; ?></td>
                    <td><?= $driver['Constructors'][0]['name']; ?></td>
                    <td><?= $driver['points']; ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</section>