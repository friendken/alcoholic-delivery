<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/top-bar.php' ?>
<div class="container-fluid">
  <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<?php require_once dirname(dirname(dirname(__FILE__))) . '/includes/left-side-bar.php' ?>
      </nav>
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
				</div>
        <div class="col-md-10 col-lg-6">
          <form id="edit-product" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$product->id; ?>" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name; ?>">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea rows="3" class="form-control" name="description" id="description" ><?php echo $product->description; ?></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input class="form-control" name="price" id="price" value="<?php echo $product->price; ?>"/>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select name="category_id" id="category" class="form-select" aria-label="select category product">
                <option disabled selected>Product category</option>
                <?php foreach($category->list() as $item): ?>
                  <option <?php if ($product->category_id == $item->id) echo "selected"; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <input
                class="form-control"
                name="is_available"
                id="is_available"
                type="checkbox"
                data-toggle="toggle"
                <?php if ($product->is_available == 1) echo "checked"; ?>
              >
              <label for="is_available" class="form-label"> Available</label>
            </div>
            <div class="mb-3">
              <input
                class="form-control"
                name="is_active"
                id="is_active"
                type="checkbox"
                <?php if ($product->is_active == 1) echo "checked"; ?>
                data-toggle="toggle"
              >
              <label for="is_active" class="form-label"> Activate</label>
            </div>
            <div class="mb-3">
              <label for="images" class="form-label">Images</label>
              <input class="form-control" type="file" name="images[]" id="images" multiple>
              <input class="form-control" type="hidden" name="current_images" id="current_images" value="<?php echo $product->images; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </main>
  </div>
</div>