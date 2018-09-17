<div class="r">
    <div class="g3">
        <?php
        require '../view/sidebarA.php';
        ?>
    </div>
    <div class="g6">
        <b>Entrar</b>
        <form class="" action="/signin.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" value="">
            <button type="submit" name="button">Entrar</button>
        </form>
    </div>
    <div class="g3">
        <?php
        require '../view/sidebarB.php';
        ?>
    </div>
</div>
</div>
