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
                    <input type="text" id="tb_tipo" name="tb_tipo">
                    <label for="tb_tipo">Tipo</label>
                </div>
                <div class="c-input-group">
                    <input type="text" id="tb_marca" name="tb_marca">
                    <label for="tb_marca">Marca</label>
                </div>
                <div class="c-input-group">
                    <input type="text" id="tb_descripcion" name="tb_descripcion">
                    <label for="tb_descripcion">Descripción</label>
                </div>
                <div class="c-input-group">
                    <input type="number" id="tb_existencia" name="tb_existencia">
                    <label for="tb_existencia">Existencia</label>
                </div>
                <div class="c-input-group">
                    <input type="text" id="tb_color" name="tb_color">
                    <label for="tb_color">Color</label>
                </div>
                <button>Guardar Consumible</button>
            </form>
        </div>
    </section>
</main>