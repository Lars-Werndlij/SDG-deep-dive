<?php require_once '../admin/index.php' ?>
<div class="pt-24">
<h1 class="text-6xl font-extrabolt justify-self-center">Admin</h1>
<a href='index.php?page=predikaat' class='mx-4 p-5 bg-[#19486A] text-white rounded-lg'><- terug</a>
        <table class='border-2 border-black border-solid p-8 justify-self-center'>
            <tr class='border-2 border-black border-solid p-5'>
                <th class='border-2 border-black border-solid p-2'>Id</th>
                <th class='border-2 border-black border-solid'>Bedrijfsnaam</th>
                <th class='border-2 border-black border-solid'>Contactpersoon</th>
                <th class='border-2 border-black border-solid'>Locatie</th>
                <th class='border-2 border-black border-solid'>Activiteitsgebied</th>
            </tr>
            <?php $bedrijven = getData($pdo);
            insertTable($bedrijven) ?>
        </table>

        <h3 class="text-4xl font-bold justify-self-center p-5">Nieuwe vraag toevoegen</h3>
        <form method='post' id="vragenform" class="flex-1 justify-center p-5">

            <label for="naam" class='font-bold text-lg'>Nieuwe Vraag:</label></br>
            <input type="text" name="vraag" class="border rounded-lg p-2 w-9/12 bg-slate-200" value='<?php $vraag ?>'>
            <input type=submit value="Enter" class="px-24 p-2 rounded ml-8 bg-[#19486A] text-white text-lg" name="enter"></br>
        </form>
        <?php insertText($vragen); ?>
</div>