<h1>Admin</h1>
<a href='index.php?page=predikaat'><- terug</a>

        <?php
        $pdo = dbConnect();

        $sql = "SELECT * FROM users";
        $result = $pdo->query($sql);
        $bedrijven = $result->fetchAll(PDO::FETCH_ASSOC);

        ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Bedrijf's naam</th>
                <th>Contactpersoon</th>
                <th>Locatie</th>
                <th>Activiteitsgebied</th>
            </tr>
            <?php foreach ($bedrijven as $date => $value) : ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><a href='index.php?page=admin&id=<?php echo $value['id'] ?>&naam=<?php echo $value['naam'] ?>'><?php echo $value['naam'] ?></a></td>
                    <td><?php echo $value['contactpersoon'] ?></td>
                    <td><?php echo $value['locatie'] ?></td>
                    <td><?php echo $value['activiteit'] ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

        <?php if (isset($_GET['id'])) : ?>

            <?php $id = $_GET['id'];

            $sql = "SELECT * FROM antwoorden WHERE user_id = '$id'";
            $result = $pdo->query($sql);
            $answers = $result->fetchAll(PDO::FETCH_ASSOC); ?>

            <h4>antwoorden predikaat van : <?php echo $_GET['naam'] ?></h4>

            <table>

                <tr>
                    <th>VraagId</th>
                    <th>Antwoord</th>
                    <th>Datum</th>
                </tr>

                <?php foreach ($answers as $data => $value) : ?>

                    <tr>
                        <td><?php echo $value['question_id'] ?></td>
                        <td><?php echo $value['answers'] ?></td>
                        <td><?php echo $value['date'] ?></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        <?php endif;
        ?>
        <h3>Nieuwe vraag toevoegen</h3>
        <form method='post' id="vragenform">

            <label for="naam">Nieuwe Vraag:</label></br>
            <input type="text" name="vraag" class="border rounded-lg p-2 w-64" value='<?php $vraag ?>'>
            <input type=submit value="Enter" class="bg-red-700 text-white p-2 rounded ml-2" name="enter"></br>
            <?php

            function alert($msg)
            {
                ?><script type='text/javascript'>alert('$msg');</script><?php
            }

            function insertVragen($pdo, $vraag)
            {
                $query = "INSERT INTO `questions`(`question`) 
            VALUES ('$vraag')";
                $statement = $pdo->prepare($query);
                $statement->execute();
                alert('vraag is toegevoegd');
            }

            if (isset($_POST['enter'])) {
                $vraag = $_POST['vraag'];
                insertVragen($pdo, $vraag);
            }

            function getVragen()
            {
                $pdo = dbConnect();

                $sql = "SELECT * FROM questions";
                $result = $pdo->query($sql);
                $vragen = $result->fetchAll(PDO::FETCH_ASSOC);

                return $vragen;
            }

            $vragen = getVragen();

            function insertText($vragen)
            {
                foreach ($vragen as $data => $value) : ?>
                    <input type=submit value="Delete Vraag <?php echo $data + 1 ?>" id=<?php echo $data + 1 ?>name="submitdelete">
                    <p>Vraag #<?php echo $data + 1 ?> : <?php echo $value['question'] ?><p>
                <?php endforeach;
            }

            insertText($vragen);
                ?>
        </form>