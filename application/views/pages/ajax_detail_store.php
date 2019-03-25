<?php
if(isset($detail_store)){
    foreach($detail_store as $row){
        ?>
<div class="span6">
<dl class="dl-horizontal">
        <div class="control-group ">
            <label class="control-label">Address</label>
            <div class="controls ">
            <input name="alamat" type="text" value="<?php echo $row->alamat; ?>" readonly="readonly">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
            <input name="email" type="text" value="<?php echo $row->email; ?>" readonly="readonly">
            </div>
        </div>
</div>
</dl>
    <?php
    }
}
?>

<div class="span6">
<dl class="dl-horizontal">
        <div class="control-group ">
            <label class="control-label">Buyer</label>
            <div class="controls ">
            <input name="buyer" type="text" placeholder="Di isi nama pembeli">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Buyer Address</label>
            <div class="controls">
            <textarea name="alamat_buyer" type="text" placeholder="Di isi alamat pembeli"></textarea>
            </div>
        </div>
</div>
</dl>