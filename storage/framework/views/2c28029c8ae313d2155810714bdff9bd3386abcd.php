<?php $attributes = $attributes->exceptProps(['kosaritem']); ?>
<?php foreach (array_filter((['kosaritem']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<style>
    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
    }

    input.qtyplus {
        width: 25px;
        height: 25px;
    }

    input.qtyminus {
        width: 25px;
        height: 25px;
    }
</style>
<div id="item-container-<?php echo e($kosaritem['kosarID']); ?>" class="row" style="margin-bottom: 10px">
    <div class="col-lg-3 d-flex ftco-animate"></div>
    <div class="col-lg-6 d-flex ftco-animate">
        <div class="services-wrap d-flex">
            <a class="img"
                style="background-image:url('<?php echo e($kosaritem['logo'] ? asset('storage/' . $kosaritem['logo']) : ''); ?>')"></a>
            </a>
            <div class="text p-4">
                <h3><?php echo e($kosaritem['cim']); ?></h3>
                <p class="price"><span
                        class="price-<?php echo e($kosaritem['kosarID']); ?>"><?php echo e($kosaritem['quantity'] * $kosaritem['ar']); ?>

                    </span> Ft</p>
                <br>
                <div class="row">

                    <form class="kosar_remove" action="<?php echo e(route('kosar.clear')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="clear" value="<?php echo e($kosaritem['kosarID']); ?>">
                        <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                            style="border: solid 2px red">-</button>
                    </form>

                    <h3 id="darab-<?php echo e($kosaritem['kosarID']); ?>" style="margin:15px;"> <?php echo e($kosaritem['quantity']); ?> </h3>

                    <form class="kosar_add" action="<?php echo e(route('kosar.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="add" value="<?php echo e($kosaritem['kosarID']); ?>">
                        <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                            style="border: solid 2px green">+</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 d-flex ftco-animate"></div>
</div>

<!-- Adatbázisba eltárolt rendelés -->
<?php /**PATH D:\Pizzamama\resources\views/components/kosar-card.blade.php ENDPATH**/ ?>