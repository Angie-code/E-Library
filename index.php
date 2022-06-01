<?php
    include "config/conn.php";
    include "image.php";

    $sql= "SELECT book_name, author, prod_year FROM books ORDER BY id";
    $results= mysqli_query($conn, $sql);

    $books= mysqli_fetch_all($results, MYSQLI_ASSOC);
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library</title>
    <script src="https://cdn.tailwindcss.com"></script>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">

</head>

<body class="text-white bg-white">
    
    <div>
        <div class="bg-blue-500 p-4 flex justify-between">
            <div>
                <h1 class="text-2xl font-bold">LMS</h1>
            </div>
            <div>
                <a href="#" class="ml-4">Home</a>
                <a href="#" class="ml-4">Books</a>
                <a href="#" class="ml-4">Contact</a>
                <a href="#" class="ml-4">About</a>
                
            </div>  
        </div>
            	
        <div>
            <h1 class=" text-black text-4xl font-hk font-bold ml-10  text-center "></h1>
            <div class="flex justify-center items-center ">
                
             <div class="mt-8  grid md:grid-cols-4 gap-10  mx-10">
                 <?php include "config/conn.php";
                 $sql= "SELECT * FROM books";
                 $results= mysqli_query($conn,$sql);

                 if(mysqli_num_rows($results)){
                    while($row= mysqli_fetch_array($results)){ ?>
                      <div class="bg-gray-300 hover:text-black overflow-hidden shadow-2xl rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 ... ">
                        <img src="images/<?php echo $row["image_name"]?>" alt="book-cover" class="w-full h-60 w-30 " >
                   
                          <div class="px-6 pb-2 pt-4  ">
                              <h2 class="font-bold text-xl    "><?php echo $row["book_name"] ?></h2>
                              <p class="block text-sm text-gray-600">By <?php echo $row["author"] ?></p>
                              <p class="block text-sm text-gray-600"><?php echo $row["prod_year"] ?></p>
                          </div>
                        </div>
                  <?php
                  }
                 }
                 else{
                     echo "Books not found";
                  }
                 ?>
             </div>
                </div>
            </div>
        </div>

        

 

    </div>
</body>
</html>