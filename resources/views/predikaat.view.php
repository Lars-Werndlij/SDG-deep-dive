<?php require_once '../controllers/predikaat.controller.php' ?>
<div class="bg-gradient-to-r from-teal-500 to-orange-400 h-64">
    <h1 class="text-8xl font-extrabold justify-self-center self-center text-white pt-20">Predikaat</h1>
</div>
<!-- <a href='index.php?page=admin' class="bg-[#58AAE0] p-2 m-5 rounded-lg position-absolute">admin</a> -->

<!-- <a href='index.php'>Home</a> -->

<div class="">

    <form method="post" class="" id="predikaatform">
        <div class="w-full flex-auto justify-center px-8 bg-cover bg-center bg-[#19486A] py-8" style="background-image: url('images/P17_MerkMiddelen_Patroon1_Blauw_RGB.png');">
            <label for="naam" class="p-8 text-xl font-bold justify-self-center text-white">Bedrijfsnaam</label></br>
            <input type="text" name="naam" class="m-5 border rounded-lg p-2 w-9/12 bg-slate-200" value='<?php $bedrijf ?>' required></br>
            <label for="contact" class="p-8 text-xl font-bold justify-self-center text-white">Contactpersoon</label></br>
            <input type="text" name="contact" class="m-5 border rounded-lg p-2 w-9/12 bg-slate-200" value='<?php $contact ?>' required></br>
            <label for="locatie" class="p-8 text-xl font-bold justify-self-center text-white">Locatie</label></br>
            <input type="text" name="locatie" class="m-5 border rounded-lg p-2 w-9/12 bg-slate-200" value='<?php $locatie ?>' required></br>
            <label for="activiteitsgebied" class="p-8 text-xl font-bold justify-self-center text-white">Activiteitsgebied</label></br>
            <input type="text" name="activiteitsgebied" class="m-5 border rounded-lg p-2 w-9/12 bg-slate-200" value='<?php $activiteit ?>' required></br>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-white">
            <?php insertText($vragen); ?>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-white">
            <input type=submit value="Submit" class="m-5 px-24 p-5 rounded ml-8 bg-[#071E4B] text-white text-lg" name="enter">
        </div>
    </form>

</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php require_once '../resources/views/footer.view.php' ?>
</body>