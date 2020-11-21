<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="adminDashboard.css">
     <style>
          table {
               border-color: dodgerblue;
          }
     </style>
</head>

<body>
     <?php
     include 'header_admin.html';
     include 'sidebar_admin.html';

     ?>


     <div class="main">
          <form>
               <table style="border: 2px solid black;">
                    <thead>
                         <tr>
                              <th style="border: 2px solid black;">ID</th>
                              <th style="border: 2px solid black;">Username</th>
                              <th style="border: 2px solid black;">Name</th>
                              <th style="border: 2px solid black;">Password</th>
                              <th style="border: 2px solid black;">Email</th>
                              <th style="border: 2px solid black;">Phone</th>
                              <th style="border: 2px solid black;">Address</th>
                              <th style="border: 2px solid black;">City</th>
                              <th style="border: 2px solid black;">Counry</th>

                              <th style="border: 2px solid black;">DOB</th>
                              <th style="border: 2px solid black;">Image</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <th style="border: 2px solid black;">1</th>
                              <th style="border: 2px solid black;">nafis</th>
                              <th style="border: 2px solid black;">nafisur Rahman</th>
                              <th style="border: 2px solid black;">1234</th>
                              <th style="border: 2px solid black;">nfa@gmail.com</th>
                              <th style="border: 2px solid black;">012345678902</th>
                              <th style="border: 2px solid black;">khilgaon</th>
                              <th style="border: 2px solid black;">Dhaka</th>
                              <th style="border: 2px solid black;">Bangladesh</th>
                              <th style="border: 2px solid black;">12-03-99</th>
                              <th style="border: 2px solid black;">null</th>

                              <td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name'] ?>">Edit</a></td>
                              <td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name'] ?>">Delete</a></td>

                         </tr>
                         <tr>
                              <th style="border: 2px solid black;">2</th>
                              <th style="border: 2px solid black;">nafis</th>
                              <th style="border: 2px solid black;">nafisur Rahman</th>
                              <th style="border: 2px solid black;">1234</th>
                              <th style="border: 2px solid black;">nfa@gmail.com</th>
                              <th style="border: 2px solid black;">012345678902</th>
                              <th style="border: 2px solid black;">khilgaon</th>
                              <th style="border: 2px solid black;">Dhaka</th>
                              <th style="border: 2px solid black;">Bangladesh</th>
                              <th style="border: 2px solid black;">12-03-99</th>
                              <th style="border: 2px solid black;">null</th>

                              <td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name'] ?>">Edit</a></td>
                              <td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name'] ?>">Delete</a></td>

                         </tr>
                         <tr>
                              <th style="border: 2px solid black;">3</th>
                              <th style="border: 2px solid black;">nafis</th>
                              <th style="border: 2px solid black;">nafisur Rahman</th>
                              <th style="border: 2px solid black;">1234</th>
                              <th style="border: 2px solid black;">nfa@gmail.com</th>
                              <th style="border: 2px solid black;">012345678902</th>
                              <th style="border: 2px solid black;">khilgaon</th>
                              <th style="border: 2px solid black;">Dhaka</th>
                              <th style="border: 2px solid black;">Bangladesh</th>
                              <th style="border: 2px solid black;">12-03-99</th>
                              <th style="border: 2px solid black;">null</th>

                              <td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name'] ?>">Edit</a></td>
                              <td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name'] ?>">Delete</a></td>

                         </tr>
                         <tr>
                              <th style="border: 2px solid black;">4</th>
                              <th style="border: 2px solid black;">nafis</th>
                              <th style="border: 2px solid black;">nafisur Rahman</th>
                              <th style="border: 2px solid black;">1234</th>
                              <th style="border: 2px solid black;">nfa@gmail.com</th>
                              <th style="border: 2px solid black;">012345678902</th>
                              <th style="border: 2px solid black;">khilgaon</th>
                              <th style="border: 2px solid black;">Dhaka</th>
                              <th style="border: 2px solid black;">Bangladesh</th>
                              <th style="border: 2px solid black;">12-03-99</th>
                              <th style="border: 2px solid black;">null</th>

                              <td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name'] ?>">Edit</a></td>
                              <td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name'] ?>">Delete</a></td>

                         </tr>
                    </tbody>
               </table>
          </form>
     </div>

</body>

</html>