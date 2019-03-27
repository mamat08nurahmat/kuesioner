<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>User Code</th>
        <th>User NPP</th>
        <th>User Name</th>
        <th>Level</th>
        <th>Institusi</th>
        <th class="span2">
            <a href="#modalAddUser" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_user)){
        foreach($data_user as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->kd_user; ?></td>
                <td><?php echo $row->npp; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->level; ?></td>
                <td><?php echo $row->kd_institusi; ?></td>

                <td>
                    <a class="btn btn-mini" href="#modalEditUser<?php echo $row->kd_user?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
                    <a class="btn btn-mini" href="<?php echo site_url('master/hapus_user/'.$row->kd_user);?>"
                       onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
                </td>
            </tr>
        <?php }
    }
    ?>

    </tbody>
</table>

<!-- ============ MODAL ADD USER =============== -->
<div id="modalAddUser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Create Data User</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_user')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">User Code</label>
                <div class="controls">
                    <input name="kd_user" type="text" value="<?php echo $kd_user; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >User NPP</label>
                <div class="controls">
                    <input name="npp" type="text" required>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Password</label>
                <div class="controls">
                    <input name="password" type="password" required>
                </div>
            </div>

            <hr/>

            <div class="control-group">
                <label class="control-label">User Name</label>
                <div class="controls">
                    <input name="nama" type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Level</label>
                <div class="controls">
                    <select name="level" id="level">
                        <option value=""> = Pilih Level Akses = </option>
                        <option value="KAE">Key Admin Executive</option>
                        <option value="AO">Account Officcer</option>
						<option value="SPG">Sales Promotion Girl</option>
						<option value="SPB">Sales Promotion Boy</option>
                    </select>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label">Institusi</label>
                <div class="controls">
                    <select name="kd_institusi" id="kd_institusi">
                        <option value=""> = Pilih Level Akses = </option>
                <?php
                foreach($data_institusi as $i){
                    ?>                        
                        <option value="<?=$i->kd_institusi?>"><?=$i->nama_institusi?></option>
                    <?php
                    }
                    ?>                        

                    </select>
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
if (isset($data_user)){
    foreach($data_user as $row){
        ?>
        <div id="modalEditUser<?php echo $row->kd_user?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data User</h3>
            </div>

            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_user')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">User Code</label>
                        <div class="controls">
                            <input name="kd_user" type="text" value="<?php echo $row->kd_user; ?>" class="uneditable-input" readonly="true">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >NPP</label>
                        <div class="controls">
                            <input name="npp" type="text" value="<?php echo $row->npp?>" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Password</label>
                        <div class="controls">
                            <input name="password" type="password" placeholder="jika tidak dirubah, kosongkan saja">
                        </div>
                    </div>

                    <hr/>

                    <div class="control-group">
                        <label class="control-label">User Name</label>
                        <div class="controls">
                            <input name="nama" type="text" value="<?php echo $row->nama?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Level</label>
                        <div class="controls">
                            <select name="level" id="level">
                                <?php if($row->level == 'KAE'){?>
                                    <option value="KAE" selected="selected">Key Admin Executive</option>
                                <?php }else{ ?>
                                    <option value="AO">Account Officer</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                <label class="control-label">Institusi</label>
                <div class="controls">
                    <select name="kd_institusi" id="kd_institusi">
                        <option value=""> = Pilih Level Akses = </option>
                <?php
                foreach($data_institusi as $i){
                    ?>                        
                        <option value="<?=$i->kd_institusi?>"><?=$i->nama_institusi?></option>
                    <?php
                    }
                    ?>                        

                    </select>
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