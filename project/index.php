<?php 
 session_start();
use Core\Router;
//require_once 'vendor/autoload.php';

spl_autoload_register(function($classname){
  if(strpos($classname,'Core')===false)
    return;
  $classname = str_replace('\\','/',$classname);
  $file_path = __DIR__ . "/" ."$classname".".php";
  require_once $file_path;
  
});

// if (isset($_COOKIE['user_id']) && !isset($_SESSION['user'])) { // check if there is user_id cookie.
//   // log in the user automatically
//   $user = new User(); // get the user model
//   $logged_in_user = $user->get_by_id($_COOKIE['user_id']); // get the user by id
//   $_SESSION['user'] = array( // set up the user session that idecates that the user is logged in. 
//       'username' => $logged_in_user->username,
//       'display_name' => $logged_in_user->display_name,
//       'user_id' => $logged_in_user->id,
//       'is_admin_view' => true
//   );
// }

// for employs access
Router::get('/login',"authentication.login"); // Logs the user in
Router::get('/logout', "authentication.logout"); // Logs the user out
Router::post('/authenticate', "authentication.validate"); // Displays the login form 
Router::get('/home',"Admin.index"); 
Router::get('/',"Admin.index"); 
Router::get('/dashboard',"Admin.index"); 




// athenticated + permissions [user:read]
Router::get('/users', "users.index"); // list of users (HTML)
Router::get('/user', "users.single"); // Displays single post (HTML)
// athenticated + permissions [user:create]
Router::get('/users/create', "users.create"); // Display the creation form (HTML)
Router::post('/users/store', "users.store"); // Creates the users (PHP)
// athenticated + permissions [user:read, user:create]
Router::get('/users/edit', "users.edit"); // Display the edit form (HTML)
Router::post('/users/update', "users.update"); // Updates the users (PHP)
// athenticated + permissions [user:read, user:delete]
Router::get('/users/delete', "users.delete"); // Delete the post (PHP)

// api
Router::POST('/api/trans',"trans.index"); // API for create transaction

// for sales 
Router::get('/sales',"sales.index"); // Display the saller dashboard (PHP)
Router::get('/sales/delete',"sales.delete"); // Delete the transaction (PHP)


Router::get('/stock',"items.stock"); // Display the stock management 
Router::post('/items/store',"items.store"); // Creates the product 
Router::get('/items/edit',"/items.edit"); // Edit the product
Router::post('/items/update',"items.update"); // Update the product 
Router::get('/items/delete',"items.delete"); // Delete the product 



Router::redirect();

