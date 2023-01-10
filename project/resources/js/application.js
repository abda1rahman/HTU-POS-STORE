

const items             = $('#items');
const quantity          = $('#quantity');
const price             = $('#Price-per-unit');
const addItem           = $('#add_item');
const table             = $('#t_body');
const footer            = $('#t_foot');
const user_name         = $('#user_name')
const user_login        = $('#user_id');
const totalSalesElement = $('#total-sales');
const baseURL           = "http://pos.local";


let totalSales = 0;
let counter = 1;

addItem.click(function (e) {
  e.preventDefault();
  let item = items.val();
  let q = quantity.val();
  let p = price.val();
  let user = user_name.val();
  let Id =user_login.val() ;
 

  // check if the field is empty or not
  if(q == "" || p == "" || item == ""){
    alert("you need to enter the item values");
    return;
  }

  // use ajax to 
//   $.ajax({
//     url:  "http://pos.local/api/trans",//change store to api
//     type: "GET",
//     data:({ 
//       item_name  : item, // change to id 
//       item_qty   : q,
//       item_price : p
//     }),
//     dataType: "application/json",
//     success:function(data,status){
//       alert("form was submitted");
//     }

// });

// for test ajax 
  mydata = { item_name: item,
             item_qty : q,
             user_id  : Id,
             username : user
          };
  $.ajax({
    url: baseURL + "/api/trans",
    type: "POST",
    dataType: 'json',
    contentType: 'application/json',
    data: JSON.stringify(mydata),
    success: function(res){
      if(res.status == 200){
        $('#sales_table').load(location.href + (" #sales_table"));
      }

      // var response = $.parseJSON(res);
      // console.log($res);
        // table.append(`
        // <tr>
        // <td>${counter} </td>
        // <td>${res.body.item_name} </td>
        // <td>${q} </td>
        // <td>${p} </td>
        // </tr>
        // `);
      }
    });
    
    
    
    totalSales += q * p;
  totalSalesElement.text(totalSales);
$('#insert-form').trigger("reset");


});

