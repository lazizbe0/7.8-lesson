
        <main class="main">
        <section class="head">
        <h2 class="head__title"><?= $pageTitle?></h2>
        <p class="head__date"><?=$pageDate?> </p>
    </section>
            <form action="" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Логин</span>
                    <input type="text" class="form__input" name="login" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Имя</span>
                    <input type="text" class="form__input" name="name" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Пароль</span>
                    <input type="password" class="form__input" name="pass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <label class="form__label">
                    <span class="form__text">Повторите пароль</span>
                    <input type="password" class="form__input" name="confirmpass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <span class="form__error">* Пароли не совподают</span>
                <button class="form__btn" disabled>Зарегистрироваться</button>
            </form>
        </main>