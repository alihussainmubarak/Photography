<div class="gallery text-center">

    <?php foreach ($gallery as $item) : ?>

        <a href="<?php echo site_url('uploads/' . $item['image_name']); ?>">
            <img class="w-100 pt-1" src="<?php echo site_url('uploads/' . $item['image_name']); ?>">
        </a>

    <?php endforeach; ?>

    <div class="clear"></div>
</div>