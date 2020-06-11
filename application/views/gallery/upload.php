<h1 class="header font-weight-bold">Upload photo</h1>
<br>

<div class="text-danger">
    <?php echo $error; ?>
</div>

<?php echo form_open_multipart('gallery/do_upload'); ?>

<div class="form-group">
    <input class="form-control-file" type="file" name="userfile" size="20" />
</div><br>

<div class="form-group">
    <input class="btn btn-success" type="submit" value="Submit" />
</div>

</form>