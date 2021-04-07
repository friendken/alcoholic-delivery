<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/top-bar.php' ?>
<div class="container-fluid">
  <div class="row">
		<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/left-side-bar.php' ?>
		</nav>
		<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Products</h1>
			</div>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<a href="create-product.php" class="btn btn-success">Add new product</a>
				</div>
					<div class="card-body">
							<div class="table-responsive">
									<table class="table table-bordered" id="product-table">
											<thead>
													<tr>
															<th>Name</th>
															<th>Category</th>
															<th>Price</th>
															<th>Status</th>
															<th>Created At</th>
															<th>Action</th>
													</tr>
											</thead>
											<tbody>
											<?php foreach($products->list() as $product): ?>
													<tr>
														<td><?php echo $product->name ?></td>
														<td><?php echo $category_map[$product->category_id]->name; ?></td>
														<td><?php echo $product->currency.' '.$product->price ?></td>
														<?php if($product->is_active == 1): ?>
															<td><span class="badge bg-success">Active</span></td>
														<?php else: ?>
															<td><span class="badge bg-danger">Inactive</span></td>
														<?php endif; ?>
														<td><?php echo $product->created_at ?></td>
														<td class="col-action">
															<a href="edit-product.php?id=<?php echo $product->id ?>"><i class="bi bi-pencil"></i></a>
															<i class="bi bi-archive delete-product" data-id="<?php echo $product->id; ?>"></i>
														</td>
													</tr>
											<?php endforeach; ?>
										</tbody>
								</table>
						</div>
				</div>
			</div>
		</main>
  </div>
</div>