<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Sales</th>
        <th>hadiah</th>
        <th>Keluar</th>
        <th>Stok</th>

    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_report_hadiah)){
    foreach($data_report_hadiah as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->nama_hadiah; ?></td>
        <td><?php echo $row->hadiah_keluar; ?></td>
        <td><?php echo $row->stok; ?></td>
		

		
    </tr>

    <?php }
    }
    ?>

    </tbody>
</table>

