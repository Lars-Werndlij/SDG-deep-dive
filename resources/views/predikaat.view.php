<?php require_once '../controllers/predikaat.controller.php' ?>
<?php require_once '../database/seeder.php' ?>

<h1>Predikaat</h1>

<a href='index.php?page=admin'>admin</a>

<div class="container mx-auto p-6 columns-1 flex-col">
    
    <form method="post" class="flex justify-center mb-6" id="predikaatform">

        <label for="naam">Bedrijf's Naam:</label></br>
        <input type="text" name="naam" class="border rounded-lg p-2 w-64" value='<?php $bedrijf ?>'></br>
        <label for="contact">Contactpersoon:</label></br>
        <input type="text" name="contact" class="border rounded-lg p-2 w-64" value='<?php $contact ?>'></br>
        <label for="locatie">Locatie:</label></br>
        <input type="text" name="locatie" class="border rounded-lg p-2 w-64" value='<?php $locatie ?>'></br>
        <label for="activiteitsgebied">Activiteitsgebied:</label></br>
        <input type="text" name="activiteitsgebied" class="border rounded-lg p-2 w-64" value='<?php $activiteit ?>'></br> 
        <?php insertText($vragen); ?>
        <input type=submit value="Enter" class="bg-red-700 text-white p-2 rounded ml-2" name="enter">
        
    </form>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php require_once '../resources/views/footer.view.php' ?>
</body>