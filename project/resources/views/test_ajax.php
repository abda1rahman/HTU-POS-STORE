


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
          <form id="insert-form" method="POST">
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
            <td><input id="quantity" name="quantity" class="form-control" type="number"  required></td>
            <td><input id="Price-per-unit" class="form-control" type="number" name="Price-per-unit" value="3" disabled></td>
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
  <table class="table ">
    <thead class="table-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody id="t_body">
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



<script>
  

const items      = $('#items');
const quantity   = $('#quantity');
const price      = $('#Price-per-unit');
const addItem    = $('#add_item');
const table      = $('#t_body');
const footer     = $('#t_foot');
const totalSalesElement = $('#total-sales');


let totalSales = 0;
let counter = 1;

addItem.click(function (e) {
  e.preventDefault();
  let item = items.val();
  let q = quantity.val();
  let p = price.val();
  

  // check if the field is empty or not
  if(q == "" || p == "" || item == ""){
    alert("you need to enter the item values");
    return;
  }

  // use ajax to 
  $.ajax({
    url:  "http://pos.local/api/trans",//change store to api
    type: "GET",
    data:({ 
      item_name  : item, // change to id 
      item_qty   : q,
      item_price : p
    }),
    dataType: "application/json",
    success:function(data,status){
      alert("form was submitted");
    }

});

  table.append(`
  <tr>
    <td>${counter}</td>
    <td>${item}</td>
    <td>${q}</td>
    <td>${p}</td>
  </tr>
  `);

  totalSales += q * p;

  totalSalesElement.text(totalSales);

counter++;
$('#insert-form').trigger("reset");


});


</script>