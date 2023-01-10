

<!-- Add-Product -->
<div class="modal fade mt-5" id="completModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="/items/store" method="POST">
          <div class="mb-3">
            <label for="item_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="p-item_name" name="item_name" required>
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Quantity in </label>
            <input type="number" class="form-control" id="p-stock" name="stock" required>
          </div>
          <div class="mb-3">
            <label for="cost" class="form-label"> Cost</label>
            <input type="number" class="form-control" id="p-cost" name="cost" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label"> Price Per Unit</label>
            <input type="number" class="form-control" id="p-price" name="price" required>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-dark" >Submit</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <!-- for access data from the table and send data to update  -->
            <input id="hiddendata" type="hidden" value="1"> 
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- End-Add-Product -->

<!-- Edit-and-update-product -->
<div class="modal fade mt-5" id="completMode2" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">

  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabe2">Update Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      

        <form action="/items/update" method="POST">
          <div class="mb-3">
          
            <label for="update-item-name" class="form-label">Product Name </label>
            <input type="text" class="form-control" id="update-item-name" name="item-name" placeholder="" required>
          </div>
          <div class="mb-3">
            <label for="update-stock" class="form-label">Quantity in </label>
            <input type="number" class="form-control" id="update-stock" name="stock" required>
          </div>
          <div class="mb-3">
            <label for="update-cost" class="form-label"> Cost</label>
            <input type="number" class="form-control" id="update-cost" name="cost" required>
          </div>
          <div class="mb-3">
            <label for="update-price" class="form-label"> Price Per Unit</label>
            <input type="number" class="form-control" id="update-price" name="price" required>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-dark" >Update</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- End-Edit product -->

<!-- Table-Stock-Management -->
<div class="container my-3 ">
  <h1 class="text-center">Stock management</h1>
  <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#completModel">
  <i class="bi bi-plus-circle-fill"></i>
 Add New Product</button>

    <table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity in</th>
      <th scope="col">Cost</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tbody>
      
    <?php if(!empty($data->items)){
    $num=0; foreach ($data->items as $item) {
          $num++;
      ?>
    <tr>
      <td id="id-item"><?= $num ?></td>
      <td><?= $item->item_name  ?></td>
      <td><?= $item->stock  ?></td>
      <td><?= $item->cost  ?></td>
      <td><?= $item->price  ?></td>
      <td>
        <a id="btn-update" href="/#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#completMode2"><i class="bi bi-pencil-square"></i></a>
        <a href="/items/delete?id=<?= $item->id ?>" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></a>
      </td>
    </tr>
    <tr>
  </tbody>
  <?php }} ?>
</table>

</div>

<!-- Table-Stock-Management -->

<script>

</script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>