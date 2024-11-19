<h1>Admin</h1>

<a href='index.php?page=predikaat'><- terug</a>

        <?php
        $pdo = dbConnect();

        $sql = "SELECT * FROM users";
        $result = $pdo->query($sql);
        $bedrijven = $result->fetchAll(PDO::FETCH_ASSOC);

        ?>

        <?php foreach ($bedrijven as $date => $value) : ?>

            <table>

                <tr>
                    <th>Id</th>
                    <th>Bedrijf's naam</th>
                    <th>Contactpersoon</th>
                    <th>Locatie</th>
                    <th>Activiteitsgebied</th>
                </tr>

                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><a href='index.php?page=admin&id=<?php echo $value['id'] ?>&naam=<?php echo $value['naam'] ?>'><?php echo $value['naam'] ?></a></td>
                    <td><?php echo $value['contactpersoon'] ?></td>
                    <td><?php echo $value['locatie'] ?></td>
                    <td><?php echo $value['activiteit'] ?></td>
                </tr>

            </table>

        <?php endforeach; ?>

        <?php if (isset($_GET['id'])) {

            $id = $_GET['id'];

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

        <?php } ?>