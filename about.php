<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>About</title>
</head>
<body>
     <!-- Header -->

  
     <header class="text-gray-700 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <i class="fa fa-diamond"></i>
          <span class="ml-3 text-xl">Jewellary Shop </span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
          <a href="index.html"  class="mr-5 hover:text-gray-900">Home</a>
          <a href="about.html" class="mr-5 hover:text-gray-900">About</a>
          <a href="account.html" class="mr-5 hover:text-gray-900">Account</a>
          <a href="wishlist.html" class="mr-5 hover:text-gray-900">Wishlist</a>
        </nav>
        <!-- Register/login button -->
        
        <form action="index.php" method="post">
        <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Register/Login
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
      </form>
      </div>
    </header>

  <!-- Content -->
<section class="text-gray-700 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Reach us by  filling the following form  </p>
    </div>
    <form action="about.php" method="post">
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-blue-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button type="submit" class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Button</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
         
    
        </div>
      </div>
    </div>
    </form>
  </div>
</section>

<!-- code to send the mail -->
<?php

// checking for php.ini file
// phpinfo();

$success = false;
if(isset($_POST['email'] ))
{
$name = $_POST['name'];
$mail = $_POST['email'];
$msg = $_POST['message'];
$sub = "Contacting admins from jewellary shop ";
$headers = "From: " . $name . " <" . $mail . ">";
$to = "ameynagmode@gmail.com";
// echo ($name . $msg . $mail);

// $msg = str_replace(".", "\n", $msg);

 
if(mail($to,$sub,$msg , $headers))
{
  echo('<p style="color:green;">
  Thanks for contacting us. We will contact you ASAP!
  </p>');
}
else {
  echo '<p>Failed to send the mail. Please try again !!</p>';
}
 }
else {
  
}

?>

</body>
</html>