
<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Profile Image</label>
    <div class="col-md-12">
        <input type="file" class="form-control" onchange="readURL(this);" name="photo" id="imgInp" required>
    </div>
</div>
         

<div class="form-group text-right">
    <div class="col-sm-12">
    <input type="text"  class="form-control form-control-line" name="merchant_id" value="<?php echo $merchant_id; ?>" hidden>
        <button class="btn btn-dark wave-light" type="Reset" >Reset</button>
        <button class="btn btn-primary" type="submit" name="update_image">Update Image</button>
    </div>
</div>




<script>
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
           