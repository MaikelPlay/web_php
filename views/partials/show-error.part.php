<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <div class="alert alert-<?= empty($errores) ? 'info' : 'danger'; ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <?php if (empty($errores)): ?>
                        <p><?= $mensaje ?></p>
                    <?php else: ?>
                        <ul>
                            <?php foreach ($errores as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endif; ?>