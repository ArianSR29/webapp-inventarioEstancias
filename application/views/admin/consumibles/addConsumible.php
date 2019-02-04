<main>
    <section class="c-main-consumibles agregar-consumible">
        <div class="c-main-title">
            <span>Consumibles</span>
            <small>Nuevo</small>
        </div>
        <div class="c-main-form">
            <?php if($this->session->flashdata("error")): ?>
                <div class="c-error-message">
                    <p> <?php echo $this->session->flashdata("error"); ?> </p>
                </div>
    |       <?php endif; ?>
            <form action="<?php echo base_url();?>mantenimiento/consumibles/stock" method="post">
                <div class="c-input-group">
                    <label for="tb_tipo">Tipo</label>
                    <input type="text" id="tb_tipo" name="tb_tipo">
                </div>
                <div class="c-input-group">
                    <label for="tb_marca">Marca</label>
                    <input type="text" id="tb_marca" name="tb_marca">
                </div>
                <div class="c-input-group">
                    <label for="tb_descripcion">Descripción</label>
                    <input type="text" id="tb_descripcion" name="tb_descripcion">
                </div>
                <div class="c-input-group">
                    <label for="tb_existencia">Existencia</label>
                    <input type="number" id="tb_existencia" name="tb_existencia">
                </div>
                <div class="c-input-group">
                    <label for="tb_color">Color</label>
                    <input type="text" id="tb_color" name="tb_color">
                </div>
                <button>Guardar Consumible</button>
            </form>
        </div>
    </section>
</main>