<!DOCTYPE HTML>
<html>
 <head>
   <title>amoCRM form</title>
   <meta content="charset=utf-8">
   <link rel="stylesheet" type='text/css' href="/css/style.css">
   <script type="text/javascript" src="js/script.js"></script>
 </head>
 <body>
   <form action="send-contact.php" method="post" class="form">
     <div class="title">Welcome</div>
     <div class="subtitle">Let's create your account!</div>
     <div class="input-container ic1">
       <input id="firstname" name="name" class="input" type="text" placeholder=" " />
       <div class="cut"></div>
       <label for="firstname" class="placeholder">Name</label>
     </div>
     <div class="input-container ic2">
       <input id="lastname" class="input" name="phone" type="text" placeholder=" " />
       <div class="cut"></div>
       <label for="lastname" class="placeholder">Phone</label>
     </div>
     <div class="input-container ic2">
       <input id="email" class="input" name="email" type="text" placeholder=" " />
       <div class="cut cut-short"></div>
       <label for="email" class="placeholder">Email</>
     </div>

     <button type="text" class="submit">submit</button>
   </form>
 </body>
</html>
