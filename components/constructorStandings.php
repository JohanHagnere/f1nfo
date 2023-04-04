<section class="constructorsStandings">
    <h2>Current constructors' standings</h2>
    <table>
        <thead>
            <th>Position</th>
            <th>Constructor</th>
            <th>Points</th>
        </thead>
        <tbody>
            <?php
            $championshipConstructorData = getData("http://ergast.com/api/f1/current/constructorStandings.json");
            $constructorStandings = $championshipConstructorData['MRData']['StandingsTable']['StandingsLists'][0]['ConstructorStandings'];
            foreach ($constructorStandings as $constructor) {
            ?>
                <tr>
                    <td><?= $constructor['position']; ?></td>
                    <td><?= $constructor['Constructor']['name']; ?></td>
                    <td><?= $constructor['points']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>