<section class="constructorsList">
    <h2>List of constructors for the 2023 season</h2>
    <table>
        <thead>
            <th>Name</th>
            <th>Nationality</th>
        </thead>
        <tbody>
            <?php
            $constructorsData = getData("http://ergast.com/api/f1/current/constructors.json");
            $constructors = $constructorsData['MRData']['ConstructorTable']['Constructors'];
            foreach ($constructors as $constructor) {
            ?>
                <tr>
                    <td><?= $constructor['name']; ?></td>
                    <td><?= $constructor['nationality']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>