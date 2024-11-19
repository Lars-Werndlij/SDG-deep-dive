<?php

require_once '../config.php';
require_once '../lib/helper.php';

$pdo = dbConnect();

$sql = 'TRUNCATE TABLE questions';
$statement = $pdo->prepare($sql);
$statement->execute();

$sql = 'INSERT INTO questions (question) VALUES (:question)';

$questions = array(
    array('question' => "Is uw bedrijf/organisatie actief betrokken bij activiteiten die bijdragen aan een betere samenleving?"),
    array('question' => "Heeft uw bedrijf/organisatie inspanningen geleverd om bewustzijn te vergroten over duurzaamheidskwesties en de SDG's?"),
    array('question' => "Zijn er kleine, concrete stappen genomen om duurzaamheid te bevorderen, zelfs als het maar om enkele aspecten van de bedrijfsvoering gaat?"),
    array('question' => "Kan uw bedrijf/organisatie enkele voorbeelden delen van positieve impact op de lokale gemeenschap of het milieu?"),
    array('question' => "Heeft uw bedrijf samengewerkt met anderen om de impact te vergroten?"),
    array('question' => "Is uw bedrijf open en transparant over zijn inspanningen en resultaten met betrekking tot duurzaamheid?"),
    array('question' => "In hoeverre draagt uw bedrijf/organisatie bij aan lokale gemeenschapsbehoeften en -ontwikkeling?"),
    array('question' => "Toont uw bedrijf/organisatie trots en erkenning voor zijn bijdrage aan de SDG's, en moedigt het dit aan bij medewerkers en klanten?"),
);

foreach ($questions as $value) {

    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':question' => $value['question']
    ]);
}