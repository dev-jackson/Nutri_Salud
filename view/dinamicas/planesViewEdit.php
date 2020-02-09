<form action="index.php?c=Admin&a=Guardar" method="post">
    <input type="hidden" name="id" value="<?php echo isset($plan) ? $plan->id : '';?>"/>
    <div class="">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo isset($plan) ? $plan->nombre : ''; ?> "/>
    </div>
    <div class="">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo isset($plan) ? $plan->descripcion : ''; ?> "/>
    </div>
    <div class="">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo isset($plan) ? $plan->precio : ''; ?> "/>
    </div>
</form>

