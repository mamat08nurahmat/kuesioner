<!--========================= Content Wrapper ==============================-->
<div class="container">

    <div class="well">
        <h4 class="alert alert-info" style="text-align: center">Invoice</h4>
        <div class="row-fluid">
            <?php if(isset($dt_penjualan)){
                foreach($dt_penjualan as $row){
                    ?>
                    <div class="span6">
                        <dl class="dl-horizontal">
                            <dt>Faktur No :</dt>
                            <dd><?php echo $row->kd_penjualan?></dd>
                            <dt>Date Proccess :</dt>
                            <dd><?php echo date("d M Y",strtotime($row->tanggal_penjualan));?></dd>
                            <dt>Total Price :</dt>
                            <dd><strong><?= currency_format($row->total_harga); ?></strong></dd>
                        
<br><dt>Ship to :</dt>
<dd><br></dd>
<dt>Buyer Name :</dt>
<dd><?php echo $row->buyer?></dd>
<dt>Address :</dt>
<dd><?php echo $row->alamat_buyer?></dd><br>

                        </dl>
                    </div>
                    <div class="span6">
                        <dl class="dl-horizontal">
                        <dt>Bill to :</dt>
                        <dd><br></dd>
                            <dt>Store :</dt>
                            <dd><?php echo $row->nm_store?></dd>
                            <dt>Store Address :</dt>
                            <dd><?php echo $row->alamat?></dd>
                            <br><br>
                            <dt>Print By :</dt>
                            <dd><?php echo $row->nama?></dd>
                            <dt>Email :</dt>
                            <dd><?php echo $row->email?></dd>
                        </dl>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>


    <div class="well">
        <h4 class="alert alert-info" style="text-align: center"> Detail Produk</h4>
        <div class="row-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                if(isset($produk_jual)){
                    foreach($produk_jual as $row ){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->kd_produk?></td>
                            <td><?php echo $row->nm_produk?></td>
                            <td><?php echo $row->qty?></td>
                            <td><?php echo currency_format($row->harga)?></td>
                        </tr>
                    <?php }
                }
                ?>
                </tbody>
            </table>

            <div class="form-actions">
                <a href="<?php echo site_url('penjualan')?>" class="btn btn-inverse">
                    <i class="icon-circle-arrow-left icon-white"></i> Back
                </a>
            </div>
        </div>
    </div>
</div>