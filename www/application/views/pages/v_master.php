<!--========================= Content Wrapper ==============================-->
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
<!--
        <li class="active"><a href="#tabProduk" data-toggle="tab"><strong>PRODUK</strong></a></li>
        <li><a href="#tabStore" data-toggle="tab"><strong>STORE</strong></a></li>
        <li><a href="#tabContact" data-toggle="tab"><strong>CONTACT</strong></a></li>
-->	
		
        <li class="active"><a href="#tabHadiah" data-toggle="tab"><strong>HADIAH</strong></a></li>
        <li><a href="#tabUser" data-toggle="tab"><strong>USER</strong></a></li>
        <li><a href="#tabInstitusi" data-toggle="tab"><strong>INSTITUSI</strong></a></li>
<!--
        <li><a href="#tabReportHadiah" data-toggle="tab"><strong>Report hadiah</strong></a></li>
-->		
    </ul>
    <div class="tab-content">
<!---
        <div class="tab-pane active" id="tabProduk">
            <?php //$this->load->view('pages/v_tab_master_produk')?>
        </div>
        <div class="tab-pane" id="tabStore">
            <?php //$this->load->view('pages/v_tab_master_store')?>
        </div>
        <div class="tab-pane" id="tabContact">
            <?php //$this->load->view('pages/v_tab_master_contact')?>
        </div>
-->	

		
        <div class="tab-pane active" id="tabHadiah">
            <?php $this->load->view('pages/v_tab_master_hadiah')?>
        </div>
        <div class="tab-pane" id="tabUser">
            <?php $this->load->view('pages/v_tab_master_user')?>
        </div>
        <div class="tab-pane" id="tabInstitusi">
            <?php $this->load->view('pages/v_tab_master_institusi')?>
        </div>

<!--
		
      <div class="tab-pane" id="tabReportHadiah">
            <?php $this->load->view('pages/v_tab_master_report_hadiah')?>
        </div>
-->		
    </div>
</div>