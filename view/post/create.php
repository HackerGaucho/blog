<div class="c">
    <div class="r">
        <div class="g3">
            <?php
            require '../view/sidebarA.php';
            ?>
        </div>
        <div class="g6">
            <b><?php print $title; ?></b>
            <form class="full" action="/signin.php" method="post">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="">
                <label for="post">Post</label>
                <textarea name="post" id="post" rows="20"></textarea>
                <button type="submit" name="button"><?php print $title; ?></button>
            </form>
        </div>
        <div class="g3">
            <?php
            require '../view/sidebarB.php';
            ?>
        </div>
    </div>
</div>
