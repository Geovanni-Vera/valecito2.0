<?php

if ($connect) {
    $query = "SELECT * FROM menu WHERE categoriaid = 9;";
    $resultado = $bd->query($query);
}

?>
<section class="bebidas mt-20 " id="malteadas">
    <h3 class="center class title">malteadas</h3>
    <div class="grid">
        <?php while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) : ?>

            <!-- Listado de hamburguesas -->
            <div class="ctn malteadas-ctn">
                <h4 class="capitalize"><?php echo $row['producto'] ?> <span class="sp-yellow">$<?php echo $row['precio']?></span></h4>
                <p class="descripcion"><?php echo $row['descripcion']?></p>
            </div>

        <?php endwhile; ?>
    </div>
</section>