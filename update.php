<?php
   include "update_inc.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Update Page</title>
     <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="text-black bg-gray-300 ">
     <div class= " container mx-auto shadow-lg my-48">
      <form class=" mt-40 mx-40 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype= "multipart/form-data">
         <label>Image</label>
         <input type="file" name="image" class="mt-6 mx-3 transition ease-in-out delay-150 h-10 hover:-translate-y-1 hover:scale-110 hover: duration-300 ..." value = "<?php echo $image;?>"><br>

         <label>Book Name</label>
         <input type="text" name="bk_name" id="bk_name" placeholder="Book Title..." class=" ml-11 mt-4 h-10 outline-none shadow-2xl border-2 border-black rounded" value="<?php echo $bookname?>"><br>

         <label>Author</label>
         <input type="text" name="auth_name" id="auth_name" placeholder="Author Name..." class="ml-20 mt-4 h-10 outline-none shadow-2xl border-2 border-black rounded" value = "<?php echo $auth_name;?>"><br>

         <label>Production Year</label>
         <input type="text" name="prod_year" id="prod_year" placeholder="Production Year..." class="ml-4  mt-4 h-10 outline-none shadow-2xl border-2 border-black rounded" value = "<?php echo $prod_year;?>"><br>

         <button type="submit" name="update" class="shadow-2xl transition ease-in-out delay-150 bg-gray-300 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300... rounded px-4 py-2 mt-4">Update</button>
      </form>
     </div>
  </body>  
   
</html>