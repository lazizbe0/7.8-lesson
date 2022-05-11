<main class="main">


<section class="head">
        <h2 class="head__title"><?= $pageTitle?></h2>
        <p class="head__date"><?=$pageDate?> </p>
    </section>
    <form action="" method="POST">



        <label for="ism">Ism</label>
        <input id="ism" type="text" placeholder="Name" name="name">
        <br>
        <label for="familya">familya</label>
        <input id="familya" type="text" placeholder="Surname" name="surname">
        <br>
        <button>send</button>
    </form>


    <?
    echo "Ism = " . $_POST['name'];
    echo "<br>";
    echo "Familya = " . $_POST['surname'];
    ?>
</main>