<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Stok</th>
        <th>Price</th>
        <th class="span2">
            <a href="#modalAddProduk" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_produk)){
    foreach($data_produk as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->kd_produk; ?></td>
        <td><?php echo $row->nm_produk; ?></td>
        <td><?php echo $row->stok; ?></td>
        <td><?php echo currency_format($row->harga);?></td>
        <td>
            <a class="btn btn-mini" href="#modalEditProduk<?php echo $row->kd_produk?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
            <a class="btn btn-mini" href="<?php echo site_url('master/hapus_produk/'.$row->kd_produk);?>"
               onclick="return confirm('Yakin dihapus?')"> <i class="icon-remove"></i> Hapus</a>
        </td>
    </tr>

    <?php }
    }
    ?>

    </tbody>
</table>


<!-- ============ MODAL ADD PRODUK =============== -->
<div id="modalAddProduk" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Create Data Product</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_produk')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                    <input name="kd_produk" type="text" value="<?php echo $kd_produk; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                    <input name="nm_produk" type="text" placeholder="Input Product Name">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Stok</label>
                <div class="controls">
                    <input name="stok" type="text" placeholder="Input Stok">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Harga</label>
                <div class="controls">
                    <input name="harga" type="text" placeholder="Input Price">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<!-- ============ MODAL EDIT PRODUK =============== -->
<?php
if (isset($data_produk)){
    foreach($data_produk as $row){
        ?>
        <div id="modalEditProduk<?php echo $row->kd_produk?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Product</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_produk')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">Product Code</label>
                        <div class="controls">
                            <input name="kd_produk" type="text" value="<?php echo $row->kd_produk;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product Name</label>
                        <div class="controls">
                            <input name="nm_produk" type="text" value="<?php echo $row->nm_produk;?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Stok</label>
                        <div class="controls">
                            <input name="stok" type="text" value="<?php echo $row->stok;?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Harga</label>
                        <div class="controls">
                            <input name="harga" type="text" value="<?php echo $row->harga;?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    <?php }
}
?>