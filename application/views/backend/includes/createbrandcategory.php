<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 Category Details
			</header>
			<div class="panel-body">
				<form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/createbrandcategorysubmit');?>" enctype= "multipart/form-data">
<!--
					<div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
						</div>
					</div>		
-->
					<div class="form-group" >
						<label class="col-sm-2 control-label" >Category</label>
						<div class="col-sm-4">
						   <?php 
								echo form_dropdown('category',$category,set_value('category'),'id="select1" class="form-control populate placeholder select2-offscreen"');
								 
							?>
						  <input type="hidden" id="normal-field" class="form-control" name="brandid" value="<?php echo $this->input->get('brandid');?>">
						</div>
					</div>
					<div class="form-group" style="display:none !important" >
						<label class="col-sm-2 control-label" >Parent</label>
						<div class="col-sm-4">
						   <?php 
								echo form_dropdown('parent',$category,set_value('parent'),'id="select1" class="form-control populate placeholder select2-offscreen"');
								 
							?>
						</div>
					</div>
					<div class=" form-group" style="display:none !important">
					  <label class="col-sm-2 control-label">Status</label>
					  <div class="col-sm-4">
						<?php
							
							echo form_dropdown('status',$status,set_value('status'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
						?>
					  </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-4">	
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>
    </div>
</div>