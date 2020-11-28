<?php include_once "vendor/autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Crud</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
        <a data-toggle="modal" class="btn btn-sm btn-primary" href="#staff-modal">Add New</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="staff_id">



						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div id="staff-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add new Staff</h3>

                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="msg"></div>
                    <form id="staff_form" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <img style="max-width:100%;" id="staff_photo_load" src="" alt="">
                            <label for="">Photo</label><br><br>
                            <input name="photo" style="display: none;" class="form-control-file" type="file" id="staff_photo">
                            <label for="staff_photo"><img style="width: 70px;" src="assets/media/img/camera.png" ></label>
                        </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-sm" type="submit" value="Add">
                            </div>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>