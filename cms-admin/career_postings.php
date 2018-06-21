<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="career_postings"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($system_file_no) && !empty($employee_id) && !empty($employee_name) && !empty($passport_no) && !empty($country_of_origin) && !empty($job_title) && !empty($employer_business_name) && !empty($business_address) && !empty($contract_period))
			{  $insert=array('system_file_no'=>$system_file_no,'employee_id'=>$employee_id,'employee_name'=>$employee_name,'passport_no'=>$passport_no,'country_of_origin'=>$country_of_origin,'job_title'=>$job_title,'employer_business_name'=>$employer_business_name,'business_address'=>$business_address,'contract_period'=>$contract_period,'date'=>date('Y-m-d'),'status'=>1);
				if($obj->insert($table,$insert)==1)
				{
					$plugin->Success("Successfully Saved",$obj->filename());
				}
				else 
				{
					$plugin->Error("Failed",$obj->filename());
				}
			}
			else 
			{
				$plugin->Error("Fields is Empty",$obj->filename());
			}   
		}
		elseif(isset($_POST['update'])) 
		{
			extract($_POST);if(!empty($system_file_no) && !empty($employee_id) && !empty($employee_name) && !empty($passport_no) && !empty($country_of_origin) && !empty($job_title) && !empty($employer_business_name) && !empty($business_address) && !empty($contract_period))
			{$updatearray=array("id"=>$id);$upd2=array('system_file_no'=>$system_file_no,'employee_id'=>$employee_id,'employee_name'=>$employee_name,'passport_no'=>$passport_no,'country_of_origin'=>$country_of_origin,'job_title'=>$job_title,'employer_business_name'=>$employer_business_name,'business_address'=>$business_address,'contract_period'=>$contract_period,'date'=>date('Y-m-d'),'status'=>1);
						$update_merge_array=array_merge($updatearray,$upd2);
						if($obj->update($table,$update_merge_array)==1)
						{ 
							$plugin->Success("Successfully Updated",$obj->filename());
						} 
						else 
						{ 
							$plugin->Error("Failed",$obj->filename()); 
						}}}
		elseif(isset($_GET['del'])=="delete") 
		{
			$delarray=array("id"=>$_GET['id']);if($obj->delete($table,$delarray)==1)
			{ 
				$plugin->Success("Successfully Delete",$obj->filename());  
			} 
			else 
			{ 
				$plugin->Error("Failed",$obj->filename()); 
			}
		}
		?><!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
		<?php 
		echo $plugin->softwareTitle();
		echo $plugin->TableCss(); ?>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Career Postings</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Career Postings</a></li>
                    <li><a href="career_postings_data.php">Career Postings List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                        <!-- Widget -->
                        <div class="widget widget-inverse" >
							<?php 
							if(isset($_GET['edit']))
							{
							?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Update/Change - Career Postings</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> System File no </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='system_file_no' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"system_file_no"); ?>' placeholder='System File no' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employee ID </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employee_id' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"employee_id"); ?>' placeholder='Employee ID' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employee Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employee_name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"employee_name"); ?>' placeholder='Employee Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Passport No </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='passport_no' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"passport_no"); ?>' placeholder='Passport No' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Country of origin </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='country_of_origin' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"country_of_origin"); ?>' placeholder='Country of origin' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Job Title </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='job_title' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"job_title"); ?>' placeholder='Job Title' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employer Business Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employer_business_name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"employer_business_name"); ?>' placeholder='Employer Business Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Business Address </label>
		
											<div class='col-sm-9'>
												<textarea id='form-field-1' name='business_address' placeholder='Business Address' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"business_address"); ?></textarea>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Contract period </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='contract_period' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"contract_period"); ?>' placeholder='Contract period' class='form-control' />
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New Career Postings</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> System File no </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='system_file_no' placeholder='System File no' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employee ID </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employee_id' placeholder='Employee ID' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employee Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employee_name' placeholder='Employee Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Passport No </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='passport_no' placeholder='Passport No' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Country of origin </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='country_of_origin' placeholder='Country of origin' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Job Title </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='job_title' placeholder='Job Title' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Employer Business Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='employer_business_name' placeholder='Employer Business Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Business Address </label>
		
											<div class='col-sm-9'>
												<textarea id='form-field-1' name='business_address' placeholder='Business Address' class='form-control'></textarea>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Contract period </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='contract_period' placeholder='Contract period' class='form-control' />
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- // Widget END -->


                        
                        
              <!-- // Widget END -->
            </div>
        </div>
        <!-- // Content END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        <?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    
    <?php echo $plugin->TableJs(); ?></body>
</html>