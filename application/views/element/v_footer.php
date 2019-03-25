<hr>
<div class="footer">
<!----
<?php if(isset($dt_contact)){
foreach($dt_contact as $row){
?>
    <div class="row well" style="text-align: center">
        <h5 class="muted"><?php echo $row->nama?></h5>
        <h5 class="muted"><?php echo $row->email?> || <?php echo $row->telp?> || <?php echo $row->website?></h5>
    </div>
<?php }
}
?>
<p>&copy; Upgraded by : <a href="http://venus-multimedia.com" target="_blank"><strong>Venus-Multimedia</strong></a></p>
-->

</div>

<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.printPage.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $(".btnPrint").printPage();
    })
</script>

    </div>
</body>