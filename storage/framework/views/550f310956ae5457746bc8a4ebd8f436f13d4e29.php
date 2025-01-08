<?php $attributes = $attributes->exceptProps(['listing']); ?>
<?php foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="col-lg-6 d-flex ftco-animate">
    <div class="services-wrap d-flex">
        <a class="img"
            style="background-image:url('<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : ''); ?>')"></a>
        <div class="text p-4">
            <form class="kosarForm" action="<?php echo e(route('kosar.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h2> <?php echo e($listing->cim); ?><input type="hidden" name="cim" value="<?php echo e(encrypt($listing->cim)); ?>"></input>
                </h2>

                <p>Összetevők: <br><?php echo e($listing->osszetevok); ?></p>
                <input type="hidden" name="logo" value="<?php echo e($listing->logo); ?>">
                <p class="price"> <input type="hidden" name="ar" value="<?php echo e(encrypt($listing->ar)); ?>">
                    <span><?php echo e($listing->ar); ?> Ft</span> </input>
                </p>
                <input type="hidden" name="kosarID" value="<?php echo e(encrypt($listing->id)); ?>">
                <input type="hidden" name="quantity" value="<?php echo e(encrypt($listing->darabszam)); ?>">
                <button type="submit" onclick="showPopup('popup1')"
                    class="ml-2 btn btn-white btn-outline-white">Kosárba</button>
            </form>
            <br>
            <?php if(auth()->guard()->check()): ?>
                <a href="etlap/<?php echo e($listing->id); ?>/edit" class="ml-2 btn btn-white btn-outline-white"
                    style="border: solid 2px green">Szerkeztés</a>
                <form method="POST" action="<?php echo e(route('etlap.destroy', $listing->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="ml-2 btn btn-white btn-outline-white"
                        style="border: solid 2px red">Törlés</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH D:\Pizzamama\resources\views/components/listing-card.blade.php ENDPATH**/ ?>