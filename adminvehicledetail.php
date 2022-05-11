<?php include 'adminheader.php'; ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h2>Vehicle Details</h2>
            </div>
		
			<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add New</h4>
                        </div>
						<form action="vehicle_add.php" method="post">
							<div class="modal-body">
								<div class="col-sm-12">
                                    
								
                                    
									
									
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtregistrationnumber" class="form-control" required>
                                            <label class="form-label">Registration Number</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtchasisnumber" class="form-control" required>
                                            <label class="form-label">Chasis Number</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtenginenumber" class="form-control" required>
                                            <label class="form-label">Engine Number</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtfueltype" class="form-control" required>
                                            <label class="form-label">Fuel Type</label>
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
                                            <input type="text" name="txtvehicletype" class="form-control" required>
                                            <label class="form-label">Vehicle Type</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="txtyear" class="form-control" required>
                                            <label class="form-label">Year</label>
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
                                        <th>Registration Number</th>
                                        <th>Chasis Number</th>
									   <th>Engine Number</th>
                                       <th>Fuel Type</th>
                                       <th>Make</th>
                                       <th>Model</th>
                                       <th>Vehicle Type</th>
                                       <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									$i=1;
									$cate=mysqli_query($con,"select * from vehicle_details");
									while($cat=mysqli_fetch_array($cate))
									{
								?>
                                    <tr>
                                       
                                     
									
									
                                   
                                    <td><?php echo $cat['Registration_Number']; ?></td>
                                    <td><?php echo $cat['Chasis_Number']; ?></td>
                                    <td><?php echo $cat['Engine_Number']; ?></td>
                                    <td><?php echo $cat['Fuel_Type']; ?></td>
                                    <td><?php echo $cat['Make']; ?></td>
                                    <td><?php echo $cat['Model']; ?></td>
                                    <td><?php echo $cat['Vehicle_Type']; ?></td>
                                    <td><?php echo $cat['Year']; ?></td>
                                                                        
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