<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li <?php if($menu == 'mc_test'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">MC Test Quick</span>
				</a>
			</li>

			<li <?php if($menu == 'mc_oven'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_mc_oven">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">MC Oven</span>
				</a>
			</li>

			<li <?php if($menu == 'ppt'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_ppt">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">PPT</span>
				</a>
			</li>

			<li <?php if($menu == 'tsw_kc'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_tsw_kc">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">TSW & KC</span>
				</a>
			</li>

			<li <?php if($menu == 'germination'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_germination">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">Germination</span>
				</a>
			</li>

			<li <?php if($menu == 'vigor'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_vigor">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">Vigor</span>
				</a>
			</li>

			<li <?php if($menu == 'fet'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_fet">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">FET</span>
				</a>
			</li>

			<li <?php if($menu == 'got'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_got">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">GOT</span>
				</a>
			</li>

			<li <?php if($menu == 'snp'){echo 'class="active"';}else{echo "";} ?> >
				<a href="<?=base_url();?>testing_snp">
				<i class="fa fa-file-text-o"></i>
				<span class="title" style="padding-left: 10px;">SNP</span>
				</a>
			</li>
			
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>

<div class="page-content-wrapper">
	<?php $this->load->view($page2); ?>
</div>