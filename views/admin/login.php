<!-- Default form login -->
<div class="container" style="width: 500px;">
    <form class="text-center border border-light p-5 mx-auto my-4" action="<?= base_url ?>admin/inciar" method="post">
        <p class="h4 mb-4">Iniciar Sesion</p>
        <?php
        if (isset($_SESSION['verify-fail'])) : ?>
            <div class="alert alert-danger" role="alert">
                Los datos no coinciden
            </div>
        <?php endif ?>
        <?php Utils::deleteSession('verify-fail')?>

        <!-- Email -->
        <input type="text" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="Correo">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Contraseña">

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Iniciar Sesion</button>
        <!-- Social login -->
    </form>
</div>
<!-- Default form login -->