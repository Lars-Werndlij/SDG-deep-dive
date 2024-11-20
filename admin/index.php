<?php
$pdo = dbConnect();

function getData($pdo)
{
    $sql = "SELECT * FROM users";
    $result = $pdo->query($sql);
    $bedrijven = $result->fetchAll(PDO::FETCH_ASSOC);
    return $bedrijven;
}

function insertTable($bedrijven)
{
    foreach ($bedrijven as $date => $value) : ?>
        <tr class='border-2 border-black border-solid'>
            <td class='border-2 border-black border-solid'><?php echo $value['id'] ?></td>
            <td class='border-2 border-black border-solid hover:bg-slate-400'><a href='index.php?page=admin&id=<?php echo $value['id'] ?>&naam=<?php echo $value['naam'] ?>'><?php echo $value['naam'] ?></a></td>
            <td class='border-2 border-black border-solid'><?php echo $value['contactpersoon'] ?></td>
            <td class='border-2 border-black border-solid'><?php echo $value['locatie'] ?></td>
            <td class='border-2 border-black border-solid'><?php echo $value['activiteit'] ?></td>
        </tr>
    <?php endforeach;
}


if (isset($_GET['id'])) {
    antwoorden($pdo);
}

function antwoorden($pdo)
{ ?>
    <?php $id = $_GET['id'];

    $sql = "SELECT * FROM antwoorden WHERE user_id = '$id'";
    $result = $pdo->query($sql);
    $answers = $result->fetchAll(PDO::FETCH_ASSOC); ?>

    <h4 class="justify-self-center text-4xl font-bold p-5">antwoorden predikaat van : <?php echo $_GET['naam'] ?></h4>

    <table class="justify-self-center">

        <tr>
            <th>VraagId</th>
            <th>Antwoord</th>
            <th>Datum</th>
        </tr>

        <?php foreach ($answers as $data => $value) : ?>

            <tr>
                <td><?php echo $value['question_id'] ?></td>
                <td class="max-w-7xl"><?php echo $value['answers'] ?></td>
                <td><?php echo $value['date'] ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
<?php
}
?>

<?php

function alert($msg)
{
?><script type='text/javascript'>
        alert($msg);
    </script><?php
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
            { ?>
    <form method='post' id="delvragen">
        <table>

            <tr>
                <th>Vraag</th>
                <th> </th>
            </tr>

            <?php foreach ($vragen as $data => $value) : ?>

                <tr>
                    <td>Vraag #<?php echo $data + 1 ?> : <?php echo $value['question'] ?></td>
                    <!-- <td><button type="submit" name="submitdelete" value="<?php echo $data; ?>" class="text-white bg-[#19486A] p-2">␡</button></td> -->
                </tr>

            <?php endforeach; ?>

        </table>
    </form>
<?php
            }
?>