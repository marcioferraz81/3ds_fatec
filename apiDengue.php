<div class="col-md-6 col-sm-12">
    <h3>Dengue API</h3>
</div>

<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Semana epidemiológica</th>
            <th scope="col">Número de casos notificados por semana</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include_once 'class/Dengue.php';
        $d = new Dengue();
        $listar = $d->listar();

        if (!empty($listar)) {
            foreach ($listar as $mostrar) {
                ?>
                <tr>
                    <td><?= $mostrar->SE ?></td>
                    <td><?= $mostrar->casos ?></td>
                </tr>
                <?php
            }
        }
        ?>


    </tbody>
</table>
