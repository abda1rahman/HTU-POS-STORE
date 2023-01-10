
  <!-- form -->
<div class="container">
    <hr class="">
    <h1 class="text-center">Make Order</h1>
    <hr>
    <div class="input-field">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">Select Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price Per Unit</th>
            <th scope="col">Add or Remove</th>
          </tr>
        </thead>
        <tbody >
          <tr>
          <form id="insert-form">
            <td><select id="items" name="items_name" class="form-select form-select" aria-label=".form-select-lg example">
                <option selected>Select One Of The Items</option>
                <option value="tea">tea</option>
                <option value="pizza">pizza</option>
                <option value="coffe">coffe</option>
                <option value="Chips">Chips</option>
                <option value="Snickers">Snickers</option>
                <option value="Milk">Milk</option>
              </select>
            </td>
            <td><input id="quantity" name="item_qty" class="form-control" type="number"  required></td>
            <td><input id="Price-per-unit" class="form-control" type="number" name="item_price" value="3" disabled></td>
            <td>
              <button id="add_item" type="button" class="btn btn-warning fw-bold text-dark">Add</button>
            </td>
            </form> 
          </tr>
        </tbody>

      </table>



    </div>
 

</div>
</form>
</div>

<!-- Edit form -->
<div class="container ">
  <table id="sales_table" class="table ">
    <thead class="table-dark">
      
      <tr>
        <th scope="col">#</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="t_body">
      <?php if(!empty($data->sales)) : ?>
       <?php $num=0; foreach ($data->sales as $item): 
        $num++ ?>
        
        <tr>
          <td><?= $num?></td>
          <td><?=$item->item_name ?></td>
          <td><?=$item->item_qty ?></td>
          <td><?=$item->item_price ?></td>
          <td>
            <a href="/sales/delete?id=<?= $item->trans_id ?>" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></a>
            <button type="button" value="<?= $item->trans_id ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#completMode2"><i class="bi bi-pencil-square"></i></button>
          </td>

        </tr>
      
      <?php endforeach?>
      <?php endif?>

    
    </tbody>
    <tfoot id="t_foot">
      <tr>
        <td class="border table-dark fw-bold">Totol Sales</td>
        <td id="total-sales" class="border">0</td>
      </tr>
    </tfoot>
  </table>
</div>
<!-- End-edit-form-->

<!-- Submit-Form -->
<div class="container">

</div>
<!-- End-Submit-Form -->

<input id=user_id type="hidden" value="<?= $_SESSION['user']['user_id']?>">
<input id=user_name type="hidden" value="<?= $_SESSION['user']['username']?>">

