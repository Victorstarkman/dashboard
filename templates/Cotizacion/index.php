<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cotizaciones</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Proveedor</th>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Fecha de Cotización</th>
                    <th>Provincia</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cotizaciones as $cotizacion): ?>
                <tr>
                    <td><?= h($cotizacion->proveedores_info->razon_social) ?></td>
                    <td><?= h($cotizacion->servicios1->servicio) ?></td>
                    <td><?= h($cotizacion->costo) ?></td>
                    <td><?= h($cotizacion->fecha_cotizacion) ?></td>
                    <td><?= h($cotizacion->proveedores_info->provincia) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
