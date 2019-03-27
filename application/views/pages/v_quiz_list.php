<!--================ Content Wrapper===========================================-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<table id="example" class="table table-bordered table-striped"style="width:100%">
        <thead>
            <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Kuesioner</th>
        <th>Hadiah</th>
        <th>User</th>
            </tr>
        </thead>
        <tbody>	
			
    <?php
    $no=1;
    if(isset($data_quiz)){
        foreach($data_quiz as $row){
            ?>
            <tr class="gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal_quiz)); ?></td>
                <td><?=$row->nama_q?></td>
                <td><?=$row->nama_hadiah ?></td>
                <td><?=$row->nama_u ?></td>
			
            </tr>
        <?php }
    }
    ?>

        </tbody>
        <tfoot>
            <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Kuesioner</th>
        <th>Kode hadiah</th>
        <th>Kode User</th>
            </tr>
        </tfoot>
    </table>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

   
    

 