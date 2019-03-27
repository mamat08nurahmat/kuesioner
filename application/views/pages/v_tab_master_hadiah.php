<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Institusi</th>
        <th>Hadiah</th>
        <th>Stok</th>
        <th>Keluar</th>
        <th>total</th>
<!--

        <th>Keluar</th>
        <th>Total</th>
-->

        <th class="span2">
            <a href="#modalAddHadiah" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Data
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_hadiah)){
    foreach($data_hadiah as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->nama_institusi; ?></td>
        <td><?php echo strtoupper($row->nama_hadiah); ?></td>
        <td><?php echo $row->stok; ?></td>
        <td><?php echo $row->keluar; ?></td>
        <td><?php echo $row->total; ?></td>
<!--

        <td><?//php echo $row->keluar; ?></td>
        <td><?//php echo $row->stok+$row->keluar; ?></td>
-->
         <td>
            <a class="btn btn-mini" href="#modalEditHadiah<?php echo $row->kd_hadiah?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
<!----
            <a class="btn btn-mini" href="<?php echo site_url('master/hapus_hadiah/'.$row->kd_hadiah);?>"
               onclick="return confirm('Yakin dihapus?')"> <i class="icon-remove"></i> Hapus</a>
-->			
			   
        </td>
    </tr>

    <?php }
    }
    ?>

    </tbody>
</table>


<!-- ============ MODAL ADD PRODUK =============== -->
<div id="modalAddHadiah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Create Data Hadiah</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_hadiah')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Kode Hadiah</label>
                <div class="controls">
                    <input name="kd_hadiah" type="text" value="<?php echo $kd_hadiah; ?>" readonly>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Nama Hadiah</label>
                <div class="controls">
                    <input name="nama_hadiah" type="text" placeholder="Input Nama Hadiah">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Stok</label>
                <div class="controls">
                    <input name="stok" type="text" placeholder="Input Stok">
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
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>


<!-- ============ MODAL EDIT PRODUK =============== -->
<?php
if (isset($data_hadiah)){
    foreach($data_hadiah as $row){
        ?>
        <div id="modalEditHadiah<?php echo $row->kd_hadiah?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Product</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_hadiah')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">Kode hadiah</label>
                        <div class="controls">
                            <input name="kd_hadiah" type="text" value="<?php echo $row->kd_hadiah;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Nama hadiah</label>
                        <div class="controls">
                            <input name="nama_hadiah" type="text" value="<?php echo $row->nama_hadiah;?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Stok</label>
                        <div class="controls">
                            <input name="stok" type="text" value="<?php echo $row->stok;?>">
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    <?php }
}
?>