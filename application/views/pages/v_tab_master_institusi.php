<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Institusi</th>
        <th>Nama Institusi</th>
        <th>RM</th>
        <th class="span2">
            <a href="#modalAddInstitusi" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_institusi)){
        foreach($data_institusi as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->kd_institusi; ?></td>
                <td><?php echo $row->nama_institusi; ?></td>
                <td><?php echo $row->rm; ?></td>
            
                <td>
                    <a class="btn btn-mini" href="#modalEditInstitusi<?php echo $row->kd_institusi?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
                    <a class="btn btn-mini" href="<?php echo site_url('master/hapus_user/'.$row->kd_institusi);?>"
                       onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
                </td>
            </tr>
        <?php }
    }
    ?>

    </tbody>
</table>

<!-- ============ MODAL ADD USER =============== -->
<div id="modalAddInstitusi" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Create Data User</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_institusi')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Institusi Code</label>
                <div class="controls">
                    <input name="kd_institusi" type="text" value="<?php echo $kd_institusi; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Nama Institusi</label>
                <div class="controls">
                    <input name="nama_institusi" type="text" required>
                </div>
            </div>


            <hr/>

            <div class="control-group">
                <label class="control-label">RM</label>
                <div class="controls">
                    <input name="rm" type="text">
                </div>
            </div>



        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>


<!-- ============ MODAL EDIT USER =============== -->
<?php
if (isset($data_institusi)){
    foreach($data_institusi as $row){
        ?>
        <div id="modalEditInstitusi<?php echo $row->kd_institusi?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data User</h3>
            </div>

            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_institusi')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">Institusi Code</label>
                        <div class="controls">
                            <input name="kd_institusi" type="text" value="<?php echo $row->kd_institusi; ?>" class="uneditable-input" readonly="true">
                        </div>
                    </div>


                    <hr/>

                    <div class="control-group">
                        <label class="control-label">Nama Institusi</label>
                        <div class="controls">
                            <input name="nama_institusi" type="text" value="<?php echo $row->nama_institusi?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">RM</label>
                        <div class="controls">
                            <input name="rm" type="text" value="<?php echo $row->rm?>">
                        </div>
                    </div>



                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    <?php }
}
?>