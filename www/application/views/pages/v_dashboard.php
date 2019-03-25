
<!--========================= Content Wrapper ==============================-->
<div class="container">
	<h2>Hi, <?php echo $this->session->userdata("NAME"); ?> </h2>
<!---
-->	



</div>




<div class="container">


					<h1 class="text-info" style="text-align: center">Kuesioner</h1><br>
						<center>
                            <img src="<?php echo base_url();?>asset/img/logo.png" height="250" width="400">
						</center>		
<!---
-->


<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>

        <th>Sales</th>
        <th>Jumlah</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($dt_dashboard)){
        foreach($dt_dashboard as $row){
            ?>
            <tr class="gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jumlah; ?> kuesioner</td>
                
            </tr>
        <?php }
    }
    ?>

    </tbody>
</table>                       

</div>