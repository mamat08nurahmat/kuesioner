<?php
if(isset($detail_produk)){
    foreach($detail_produk as $row){
        ?>

        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Product Code</label>
                    <div class="controls">
                        <input name="kd_produk" type="text" value="<?php echo $row->kd_produk; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Product Name</label>
                    <div class="controls">
                        <input name="nm_produk" type="text" value="<?php echo $row->nm_produk; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group ">
                    <label class="control-label">Price</label>
                    <div class="controls ">
                        <input name="harga" type="text" value="<?php echo $row->harga; ?>" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Ready Stok</label>
                    <div class="controls">
                        <input id="stok" name="stok" type="text" value="<?php echo $row->stok; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Qty of Purchases</label>
                    <div class="controls">
                        <input name="qty" type="text" class="" placeholder="Input Jumlah Pembelian">
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
}
?>
