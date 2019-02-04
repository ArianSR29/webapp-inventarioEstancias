<main>
    <section class="c-main-consumibles">
        <div class="c-main-title">
            <span>Consumibles</span>
            <small>Listado</small>
        </div>
        <div class="full_row"><a href="<?php echo base_url();?>mantenimiento/consumibles/addConsumible"><i class="fa fa-plus"></i>Agregar Consumible</a></div>
        <div class="c-table">
            <table id="consumibles-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Descripción</th>
                        <th>Existencia</th>
                        <th>Color</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($consumibles)): ?>
                        <?php foreach ($consumibles as $consumible): ?>
                            <tr>
                                <td> <?php echo $consumible->id_consumible; ?> </td>
                                <td> <?php echo $consumible->tipo; ?> </td>
                                <td> <?php echo $consumible->marca; ?> </td>
                                <td> <?php echo $consumible->descripcion; ?> </td>
                                <td> <?php echo $consumible->total_consumibles; ?> </td>
                                <td> <?php echo $consumible->color; ?> </td>
                                <td>
                                    <div class="c-btn-group">
                                        <a href="" class="btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo base_url(); ?>mantenimiento/consumibles/editConsumible/<?php echo $consumible->id_consumible; ?>" class="btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="" class="btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>