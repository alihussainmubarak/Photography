<!-- Left column -->
<div class="col-md-2 px-0 bg-info border-top border-bottom">
    <nav class="list-group list-group-flush">

        <a class="list-group-item list-group-item-action text-dark bg-info" href="<?php echo base_url(); ?>">Home</a>

        <?php if ($this->session->userdata('user_id')) : ?>

        <a class="list-group-item list-group-item-action text-dark bg-info" href="<?php echo base_url(); ?>gallery/upload">Upload photo</a>

        <a class="list-group-item list-group-item-action text-dark bg-info" href="<?php echo base_url(); ?>gallery/delete">Delete photo</a>

        <a class="list-group-item list-group-item-action text-dark bg-info" href="<?php echo base_url(); ?>signup/profile">Profile</a>

        <?php endif; ?>
        
    </nav>
</div>
<!-- Left column /end -->

<!-- Right column -->
<div class="col-md-9 m-md-auto p-3">