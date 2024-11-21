<?php
function getVragen()
{
    $pdo = dbConnect();

    $sql = "SELECT * FROM questions";
    $result = $pdo->query($sql);
    $vragen = $result->fetchAll(PDO::FETCH_ASSOC);

    return $vragen;
}

function submit($vragen)
{

    $pdo = dbConnect();

    if (isset($_POST['enter'])) {
        $bedrijf = $_POST['naam'];
        $contact = $_POST['contact'];
        $locatie = $_POST['locatie'];
        $activiteit = $_POST['activiteitsgebied'];

        $sql = "SELECT id FROM users WHERE naam = '$bedrijf'";
        $result = $pdo->query($sql);
        $if = $result->fetch();

        if ($if == true) {

            echo "<script> alert('Dit bedrijf heeft al een predikaat ingeleverd');</script>";
        } else {

            if (isset($bedrijf) && isset($activiteit) && isset($locatie) && isset($contact)) {

                $query = "INSERT INTO `users`(`naam`, `contactpersoon`, `locatie`, `activiteit`) 
            VALUES ('$bedrijf', '$contact', '$locatie', '$activiteit')";
                $statement = $pdo->prepare($query);
                $statement->execute();
            }
            try {

                $sql = "SELECT id FROM users WHERE naam = '$bedrijf'";
                $result = $pdo->query($sql);
                $users = $result->fetch();
            } catch (Exception $e) {

                echo 'Message: ' . $e->getMessage();
            }

            for ($i = 0; $i < count($vragen); $i++) {

                $antwoord = $_POST["antwoord" . $i + 1];

                if (is_array($users) == 1) {
                    $users = implode(',', $users);
                }

                $question_id = $i + 1;

                date_default_timezone_set('Europe/Amsterdam');
                $date = date("Y-m-d");

                $query = "INSERT INTO `antwoorden` (`user_id`, `question_id`, `answers`, `date`) 
            VALUES (:user_id, :question_id, :answers, :date)";

                $statement = $pdo->prepare($query);
                $statement->bindParam(':user_id', $users);
                $statement->bindParam(':question_id', $question_id);
                $statement->bindParam(':answers', $antwoord);
                $statement->bindParam(':date', $date);

                $statement->execute();
                
            }
            echo "<script> alert('Predikaat has been submitted');</script>";
        }
    }
}

$vragen = getVragen();

function insertText($vragen)
{
    foreach ($vragen as $data => $value) : ?>
        <label class="p-8 text-xl font-bold justify-self-center text-white">Vraag #<?php echo $data + 1 ?> : <?php echo $value['question'] ?></label> </br>
        <input type='text' name='antwoord<?php echo $data + 1 ?>' class='m-5 border rounded-lg p-2 w-9/12 bg-slate-200'></br>
    <?php endforeach;
}
submit($vragen);
