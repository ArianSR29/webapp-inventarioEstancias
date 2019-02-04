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
                                <?php 
                                    $data_consumible =  $consumible->id_consumible."*".
                                                        $consumible->tipo."*".
                                                        $consumible->marca."*".
                                                        $consumible->descripcion."*".
                                                        $consumible->total_consumibles."*".
                                                        $consumible->color;
                                ?>
                                <td>
                                    <div class="c-btn-group">
                                        <!-- <button class="btn-info" value=" <?php echo $data_consumible ?> "><i class="fa fa-eye"></i></button> -->
                                        <a href="<?php echo base_url(); ?>mantenimiento/consumibles/editConsumible/<?php echo $consumible->id_consumible; ?>" class="btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="<?php echo base_url(); ?>mantenimiento/consumibles/deleteConsumible/<?php echo $consumible->id_consumible; ?>" class="btn-danger"><i class="fa fa-times"></i></a>
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
<script>
	$(".btn-danger").on("click", function (e) {
        var base_url = "<?php echo base_url(); ?>";
		e.preventDefault();
		var ruta = $(this).attr("href");

		$.ajax({
			url: ruta,
			type: "POST",
			success: function (resp) {
                window.location.href = base_url+"mantenimiento/consumibles" + resp;
			}
		});
	});
</script>