<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
	<h1 class="text-center bg-dark text-white py-4">Ajax Crud System with Laravel 10</h1>

	<div class="container my-5">
		<!-- Button trigger modal -->
		<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProduct">Add New Product</button>
	</div>


	<!-- Product Add Modal -->
	<div class="modal fade" id="addProduct" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New Product</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group mb-3">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_name">Product Name</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="text" id="pro_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group mb-3">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_price">Product Price</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="number" id="pro_price" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_qty">Product Qty</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="number" id="pro_qty" class="form-control">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" id="addNewProduct" class="btn btn-primary">Add Now</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Delete Modal -->
	<div class="modal fade" id="deleteProductModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						<h4 class="modal-title">Delete </h4>
					</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Do You Really Want to Delete This ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" id="conformDeleteProduct" class="btn btn-danger">Delete</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Edit Modal -->
	<div class="modal fade" id="editProductModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Update Your Product</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group mb-3">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_name">Product Name</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="text" id="pro_name" class="pro_name form-control">
								</div>
							</div>
						</div>
						<div class="form-group mb-3">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_price">Product Price</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="text" id="pro_price" class="pro_price form-control">
								</div>
							</div>
						</div>
						<div class="form-group mb-3">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_qty">Product Qty</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<input type="text" id="pro_qty" class="pro_qty form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row align-items-center">
								<div class="col-3">
									<label for="pro_qty">Status</label>
								</div>
								<div class="col-1">:</div>
								<div class="col-8">
									<select name="status" id="status" class="status form-control">
										<option disabled>-- select status --</option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" id="updateProduct" class="btn btn-success">Update</button>
				</div>
			</div>
		</div>
	</div>

	<!-- 	DatabaseTabel -->
	<div class="container mt-3">
		<table class="table table-striped hover">
			<thead class="bg-dark text-white">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</tfoot>
			<tbody class="tbody">

			</tbody>
		</table>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/96d390f02d.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



	<script>
		$(document).ready(function () {

			// Product Add with ajax
			$(document).on('click', '#addNewProduct', function(){
				var pro_name = jQuery('#pro_name').val();
				var pro_price = jQuery('#pro_price').val();
				var pro_qty = jQuery('#pro_qty').val();

				$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});

				$.ajax({
					type: "post",
					url: "/add-product",
					data: {
						pro_name: pro_name,
						pro_price: pro_price,
						pro_qty: pro_qty,
					},
					success: function (response) {
						show();
						$('#pro_name').val('');
						$('#pro_price').val('');
						$('#pro_qty').val('');
						$('#addProduct').modal('hide');
						toastr.options={
						"progressBar" : true,
						"positionClass": "toast-top-right",
						// "closeButton" : true,
						}
						toastr.success('Product Added Successfully!');
					}
				});
			});

			// Product Show with Ajax
			show();
			function show() {
				$.ajax({
					type: "get",
					url: "/show-product",
					dataType: "json",
					success: function (response) {

						var allProduct = "";
						var sl = 1;

						$.each(response.allProduct, function (key, val) { 
							
							var status = "";
							if(val.status=='1'){
								status = '<button value="'+val.id+'" id="activeProduct" class="btn btn-primary btn-sm">Active</button>';
							}else{
								status = '<button value="'+val.id+'" id="inactiveProduct" class="btn btn-secondary btn-sm">Inactive</button>';
							}

							allProduct +='<tr>\
								<td>'+sl+'</td>\
								<td>'+val.pro_name+'</td>\
								<td>'+val.pro_price+'</td>\
								<td>'+val.pro_qty+'</td>\
								<td>'+status+'</td>\
								<td>\
									<button value="'+val.id+'" id="editSingleProduct" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>\
									<button value="'+val.id+'" id="deleteSingleProduct" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>\
								</td>\
							</tr>';
							sl++;
						});
						jQuery('.tbody').html(allProduct);
					}
				});
			}

			// Product Delete with Ajax
			// Value move
			$(document).on('click', '#deleteSingleProduct', function(){
				var id = $(this).val();
				$('#deleteProductModal').modal('show');
				$('#conformDeleteProduct').val(id);
			});
			
			// Delete Product
			$(document).on('click', '#conformDeleteProduct', function(){
				$('#deleteProductModal').modal('hide');
				var id = $(this).val();
				$.ajax({
					type: 'get',
					url: "/delete-product/" + id,
					success: function (response) {
						show();
						toastr.options={
							"progressBar" : true,
							"positionClass": "toast-top-right",
							// "closeButton" : true,
						}
						toastr.success('Product Delete Successfully!');
					}
				});
			});
			
			
			// Product Edit with Ajax
			$(document).on('click', '#editSingleProduct', function(){
				var id = $(this).val();
				$('#editProductModal').modal('show');
				$('#updateProduct').val(id);
				
				$.ajax({
					type: 'get',
					url: "/edit-product/" + id,
					success: function (response) {
						// console.log(response.allProduct);
						
						$('.pro_name').val(response.allProduct.pro_name);
						$('.pro_price').val(response.allProduct.pro_price);
						$('.pro_qty').val(response.allProduct.pro_qty);
						$('.status').val(response.allProduct.status);
					}
				});
			});
			

			// Product Update with Ajax
			$(document).on('click', '#updateProduct', function(){
				var id = $(this).val();
				
				var pro_name = jQuery('.pro_name').val();
				var pro_price = jQuery('.pro_price').val();
				var pro_qty = jQuery('.pro_qty').val();
				var status = jQuery('.status').val();
				
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				$.ajax({
					type: "post",
					url: "/update-product/" + id,
					data: {
						pro_name: pro_name,
						pro_price: pro_price,
						pro_qty: pro_qty,
						status: status,
					},
					success: function (response) {
						show();
						$('#editProductModal').modal('hide');
						toastr.options={
						"progressBar" : true,
						"positionClass": "toast-top-right",
						// "closeButton" : true,
						}
						toastr.success('Product Updated Successfully!');
					}
				});
			});


			// Product Active with Ajax
			$(document).on('click', '#activeProduct', function(){
				var id = $(this).val();
				$.ajax({
					type: "get",
					url: "/active-product/" + id,
					success: function (response) {
						show();
						toastr.options={
							"progressBar" : true,
							"positionClass": "toast-top-right",
							// "closeButton" : true,
						}
						toastr.success('Product Inactive Successfully!');
					}
				});
			});


			// Product Diactive with Ajax
			$(document).on('click', '#inactiveProduct', function(){
				var id = $(this).val();
				$.ajax({
					type: "get",
					url: "/inactive-product/" + id,
					success: function (response) {
						show();
						toastr.options={
							"progressBar" : true,
							"positionClass": "toast-top-right",
							// "closeButton" : true,
						}
						toastr.success('Product Active Successfully!');
					}
				});
			});
		});


	</script>
</body>
</html>