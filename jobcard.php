<?php include 'header.php'; ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h2>Jobcard Details</h2>
            </div>
			<div class="block-header col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                <button type="button" class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal" title="Add Record"> <i class="material-icons">create</i></button>
            </div>
			<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add New</h4>
                        </div>
						<form action="jobcard_add.php" method="post">
							<div class="modal-body">
								<div class="col-sm-12">
                                    
								
                                    
									
									
                                    
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtjobcardno" class="form-control" required>
                                            <label class="form-label">Jobcard No</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" name="txtindate" class="form-control" required>
                                            <label class="form-label">In Date</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" name="txtoutdate" class="form-control" required>
                                            <label class="form-label">Out Date</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtcustomername" class="form-control" required>
                                            <label class="form-label">Customer Name</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtAddress" class="form-control" required>
                                            <label class="form-label">Address</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtmobileno" class="form-control" required>
                                            <label class="form-label">Mobile No</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtmake" class="form-control" required>
                                            <label class="form-label">Make</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtmodel" class="form-control" required>
                                            <label class="form-label">Model</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtkmdriven" class="form-control" required>
                                            <label class="form-label">Kilometer Driven</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtobservationlist" class="form-control" required>
                                            <label class="form-label">Observation List</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtmechanicname" class="form-control" required>
                                            <label class="form-label">Mechanic Name</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtchasisno" class="form-control" required>
                                            <label class="form-label">Chasis Number</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtregistrationnumber" class="form-control" required>
                                            <label class="form-label">Registration Number</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" name="txtbilldate" class="form-control" required>
                                            <label class="form-label">Bill Date</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtlcharge" class="form-control" required>
                                            <label class="form-label">Labour Charge</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtldiscount" class="form-control" required>
                                            <label class="form-label">labour Discount</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtnetlabour" class="form-control" required>
                                            <label class="form-label">Net Labour</label>
                                        </div>
                                    </div>



                                </div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-link waves-effect" name="add" value="SAVE CHANGES" />
								<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
            <div class="row clearfix js-sweetalert">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Jobcard No</th>
                                        <th>In Date</th>
									   <th>Out Date</th>
                                       <th>Customer Name</th>
                                       <th>Address</th>
                                       <th>Mobile No</th>
                                       <th>Make</th>
                                       <th>Model</th>
                                       <th>Kilometer Driven</th>
                                       <th>Observation List</th>
                                       <th>Mechanic Name</th>
                                       <th>Chasis Number</th>
                                       <th>Registration Number</th>
                                       <th>Bill Date</th>
                                       <th>Labour Charge</th>
                                       <th>labour Discount</th>
                                       <th>Net Labour</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									$i=1;
									$cate=mysqli_query($con,"select * from job_card");
									while($cat=mysqli_fetch_array($cate))
									{
								?>
                                    <tr>
                                       
                                     
									
									
                                   
                                    <td><?php echo $cat['Jobcard_Number']; ?></td>
                                    <td><?php echo $cat['In_Date']; ?></td>
                                    <td><?php echo $cat['Out_Date']; ?></td>
                                    <td><?php echo $cat['Customer_Name']; ?></td>
                                    <td><?php echo $cat['Address']; ?></td>
                                    <td><?php echo $cat['Mobile_No']; ?></td>
                                    <td><?php echo $cat['Make']; ?></td>
                                    <td><?php echo $cat['Model']; ?></td>
                                    <td><?php echo $cat['Kilometer_Driven']; ?></td>
                                    <td><?php echo $cat['Observation_List']; ?></td>
                                    <td><?php echo $cat['Mechanic_Name']; ?></td>
                                    <td><?php echo $cat['Chasis_Number']; ?></td>
                                    <td><?php echo $cat['Registration_Number']; ?></td>
                                    <td><?php echo $cat['Bill_Date']; ?></td>
                                    <td><?php echo $cat['Labour_Charge']; ?></td>
                                    <td><?php echo $cat['Labour_Discount']; ?></td>
                                    <td><?php echo $cat['Net_Labour']; ?></td>
                                    
                                                                        
                                    </tr>
                                <?php
									$i++;
									}
								?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="plugins/node-waves/waves.js"></script>
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/demo.js"></script>
	<script src="plugins/sweetalert/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		$(function () {
			$('.js-sweetalert button').on('click', function () {
				var type = $(this).data('type');
				if (type === 'cancel') 
				{ showCancelMessage(id); }
			});
		});
		function showCancelMessage(id) {
			swal({
				title: "Are you sure?",
				text: "You will not be able to recover this record!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel plz!",
				closeOnConfirm: false,
				closeOnCancel: false
			}, function (isConfirm) {
				if (isConfirm) {
					swal("Deleted!", "Record has been deleted.", "success");
					window.location.href="cat_del.php?cat="+id;
				} else {
					swal("Cancelled", "Your record is safe :)", "error");
				}
			});
		}
	</script>
</body>
</html>