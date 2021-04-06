<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/top-bar.php' ?>
<div class="container-fluid">
  <div class="row">
		<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/left-side-bar.php' ?>
		</nav>
		<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Contact</h1>
			</div>
			<div class="card shadow mb-4">
					<div class="card-body">
							<div class="table-responsive">
									<table class="table table-bordered" id="product-table" width="100%" cellspacing="0">
											<thead>
													<tr>
															<th>Name</th>
															<th>Email</th>
															<th>Message</th>
															<th>Created At</th>
															<th>Action</th>
													</tr>
											</thead>
											<tbody>
											<?php foreach($contacts->list() as $contact): ?>
													<tr>
														<td><?php echo $contact->name; ?></td>
														<td><?php echo $contact->email; ?></td>
														<td><?php echo $contact->message ?></td>
														<td><?php echo $contact->created_at ?></td>
														<td class="col-action">
															<i class="bi bi-archive delete-contact" data-id="<?php echo $contact->id; ?>"></i>
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