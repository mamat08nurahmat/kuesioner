<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Store Code</th>
        <th>Name Store</th>
        <th>Address</th>
        <th>Email</th>
        <th class="span2">
            <a href="#modalAddStore" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_store)){
        foreach($data_store as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->kd_store; ?></td>
                <td><?php echo $row->nm_store; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->email; ?></td>
                <td>
                    <a class="btn btn-mini" href="#modalEditStore<?php echo $row->kd_store?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
                    <a class="btn btn-mini" href="<?php echo site_url('master/hapus_store/'.$row->kd_store);?>"
                       onclick="return confirm('Data akan dihapus?')"> <i class="icon-remove"></i> Hapus</a>
                </td>
            </tr>

    <?php }
    }
    ?>

    </tbody>
</table>

<!-- ============ MODAL ADD STORE =============== -->
<div id="modalAddStore" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Create Data Store</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_store')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Store Code</label>
                <div class="controls">
                    <input name="kd_store" type="text" value="<?php echo $kd_store; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Name Store</label>
                <div class="controls">
                    <input name="nm_store" type="text" placeholder="Input Name Store" required="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                    <input name="alamat" type="text" placeholder="Input Address" required="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input name="email" type="email" placeholder="Input Email" required="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<!-- ============ MODAL EDIT STORE =============== -->
<?php
if(isset($data_store)){
    foreach($data_store as $row){
        ?>
        <div id="modalEditStore<?php echo $row->kd_store?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Store</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_store')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">Store Code</label>
                        <div class="controls">
                            <input name="kd_store" type="text" value="<?php echo $row->kd_store;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Name Store</label>
                        <div class="controls">
                            <input name="nm_store" type="text" value="<?php echo $row->nm_store; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input name="alamat" type="text" value="<?php echo $row->alamat;?>" required="">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input name="email" type="email" value="<?php echo $row->email;?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    <?php }
}
?>