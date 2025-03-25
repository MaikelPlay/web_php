<?php
    
    require_once 'entity/ImagenGaleria.php';
    require_once 'entity/Asociado.php';
    require_once 'utils/utils.php';
    
    /**
     * @var ImagenGaleria[] $imagenes
     */

    //En el fichero index.php crea un array de 12 objetos ImagenGaleria.
    $imagenes = [
        new ImagenGaleria('1.jpg', 'Descripción imagen 1', 100, 50, 10),
        new ImagenGaleria('2.jpg', 'Descripción imagen 2', 200, 60, 20),
        new ImagenGaleria('3.jpg', 'Descripción imagen 3', 300, 70, 30),
        new ImagenGaleria('4.jpg', 'Descripción imagen 4', 400, 80, 40),
        new ImagenGaleria('5.jpg', 'Descripción imagen 5', 500, 90, 50),
        new ImagenGaleria('6.jpg', 'Descripción imagen 6', 600, 100, 60),
        new ImagenGaleria('7.jpg', 'Descripción imagen 7', 700, 110, 70),
        new ImagenGaleria('8.jpg', 'Descripción imagen 8', 800, 120, 80),
        new ImagenGaleria('9.jpg', 'Descripción imagen 9', 900, 130, 90),
        new ImagenGaleria('10.jpg', 'Descripción imagen 10', 1000, 140, 100),
        new ImagenGaleria('11.jpg', 'Descripción imagen 11', 1100, 150, 110),
        new ImagenGaleria('12.jpg', 'Descripción imagen 12', 1200, 160, 120)
    ];

    $asociados = [
        new Asociado(
            'Primer asociado',
            'log1.jpg',
            'Descripción primer asociado'),

            new Asociado(
                'Segundo asociado',
                'log2.jpg',
                'Descripción segundo asociado'),

                new Asociado(
                    'Tercer asociado',
                    'log3.jpg',
                    'Descripción tercer asociado'),

                    new Asociado(
                        'Cuarto asociado',
                        'log3.jpg',
                        'Descripción cuarto asociado'),

                        new Asociado(
                            'Quinto asociado',
                            'log1.jpg',
                            'Descripción quinto asociado'),

                            new Asociado(
                                'Sexto asociado',
                                'log2.jpg',
                                'Descripción sexto asociado'),
                ];

    $asociados = obtenerArrayReducido($asociados, 3);
    
    require_once 'views/index.view.php';
    
?>