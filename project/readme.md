  <!-- login page  -->
- first page in your website login page.
- login page not for public every user and admin and seller should be register in login page. 

  <!-- Informative Dashboard -->
- after login page should redirect person to the dashboard
- in the dashboard should have:
- 1. Total sales             3.Total item number 
  2. Total Transaction       4.Top five expensive items 
  5. Total Users

* Transaction table -> user_id, item buyed, items quantity, total Tansaction

    <!-- Seller Dashboard --> 
- page for seller           // in this page should use ajax 
- selling form =  1.item name 2.item quantity
- the seller can't sell item out of stock
- table contain list of transaction that has been made today by the user (customer) and 
  the seller can edit or delete each transaction in table by action buttona.
- only have seller dashboard (in nav bar just have seller dashboard)

    <!-- Stock Management Page -->
- should list all items and provide all CRUD functionalities for each items
- for each items should have 
  cost, selling price, stock available quantity, create_at, update_at 

   <!-- Transactions Management Page -->
- should list all transactions and provide only Read, Update,
  and Delete functionalities for each transactions.
- each transaction should have (items_id, quantity, total, create_at, updated_at)

  <!-- User Management Page -->
- should list all users and provide CRUD functionlities for each user.
- Each user should have (display name, username, password, email, role, created on, and updated on)

  <!-- Add Profile Page -->
-  You can add profile page for each user contains the user image and the user should be able to
   update his/her information and image

* **Notes**
• Users should be restricted to access pages as per their roles: (Roles should be hard
  coded and the app should be controlled based on permissions)
• Admin: can access everything.
• Seller: can access only Selling dashboard.
• Procurement: can access only Stock management page.
• Accountant: can only access Transactions management page.
• The whole website should be designed in Bootstrap except the login page, it should be
designed only using CSS and it should look modern and responsive using media queries.
• The whole website should be responsive.
• Any form in the website should contain both, frontend validation and backend



<!-- Project plan -->

1. header.php
    contain sidebar and navigation and setup home page 
    

















