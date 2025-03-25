<?php
//encabezado
include __DIR__ . '/partials/inicio-doc.part.php';
include __DIR__ . '/partials/nav.part.php'; 
// Inicializar variables
$nombre = $apellido = $email = $asunto = $mensaje = "";
$errores = [];

// Manejo del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validación del nombre
    if (empty(trim($_POST['nombre']))) {
        $errores['nombre'] = 'El nombre es obligatorio.';
    } else {
        $nombre = htmlspecialchars(trim($_POST['nombre']));
    }

    // Validación del apellido (opcional)
    if (!empty(trim($_POST['apellido']))) {
        $apellido = htmlspecialchars(trim($_POST['apellido']));
    }

    // Validación del email
    if (empty(trim($_POST['email']))) {
        $errores['email'] = 'El correo electrónico es obligatorio.';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El correo electrónico no es válido.';
    } else {
        $email = htmlspecialchars(trim($_POST['email']));
    }

    // Validación del asunto
    if (empty(trim($_POST['asunto']))) {
        $errores['asunto'] = 'El asunto es obligatorio.';
    } else {
        $asunto = htmlspecialchars(trim($_POST['asunto']));
    }

    // Validación del mensaje (opcional)
    if (!empty(trim($_POST['mensaje']))) {
        $mensaje = htmlspecialchars(trim($_POST['mensaje']));
    }

    // Si no hay errores, procesar el formulario
    if (empty($errores)) {
        echo "<div class='alert alert-success'>
                <h4>Información recibida:</h4>
                <p><strong>Nombre:</strong> $nombre</p>
                <p><strong>Apellido:</strong> $apellido</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Asunto:</strong> $asunto</p>
                <p><strong>Mensaje:</strong> $mensaje</p>
              </div>";
    }
}
?>



<!-- Principal Content Start -->
<div id="contact">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>Datos de contacto</h1>
            <hr>
            <p>Por favor, rellene los siguientes campos:</p>

            <!-- Mostrar errores si los hay -->
            <?php if (!empty($errores)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errores as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Formulario -->
            <form class="form-horizontal" method="POST" action="contact.php">
                <div class="form-group">
                    <div class="col-xs-6">
                        <label class="label-control">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="col-xs-6">
                        <label class="label-control">Apellidos</label>
                        <input class="form-control" type="text" name="apellido" value="<?php echo $apellido; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Email</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Asunto</label>
                        <input class="form-control" type="text" name="asunto" value="<?php echo $asunto; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Mensaje</label>
                        <textarea class="form-control" name="mensaje"><?php echo $mensaje; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button type="submit" class="pull-right btn btn-lg sr-button">Enviar</button>
                    </div>
                </div>
            </form>

            <hr class="divider">

            <div class="address">
                <h3>GET IN TOUCH</h3>
                <hr>
                <p>Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero.</p>
                <div class="ending text-center">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-facebook sr-icons"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter sr-icons"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus sr-icons"></i></a></li>
                    </ul>
                    <ul class="list-inline contact">
                        <li class="footer-number"><i class="fa fa-phone sr-icons"></i> (00228)92229954</li>
                        <li><i class="fa fa-envelope sr-icons"></i> kouvenceslas93@gmail.com</li>
                    </ul>
                    <p>Photography Fanatic Template &copy; 2017</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/fin-doc.part.php'; ?>

