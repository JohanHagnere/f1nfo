<section class="driversList">
    <h2>List of drivers for the 2023 season</h2>
    <table>
        <thead>
            <th>Name</th>
            <th>Number</th>
            <th>Nationality</th>
            <th>Date of birth</th>
        </thead>
        <tbody>
            <?php
            $driversData = getData("http://ergast.com/api/f1/current/drivers.json");
            $drivers = $driversData['MRData']['DriverTable']['Drivers'];
            foreach ($drivers as $driver) {
            ?>
                <tr>
                    <td><?= $driver['givenName'] . " " . $driver['familyName']; ?></td>
                    <td><?= $driver['permanentNumber']; ?></td>
                    <td><?= $driver['nationality']; ?></td>
                    <td><?= $driver['dateOfBirth']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>