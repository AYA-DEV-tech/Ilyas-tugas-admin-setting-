
<?php 
$conn = mysqli_connect('localhost','root','','tugasdipo');

if(isset ($_POST["login"]) ){

  $gmail_user = $_POST["eml"];
  $password = $_POST["pwd"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$gmail_user' ");

  if( mysqli_num_rows($result) ==  1 ){
      $row = mysqli_fetch_assoc($result);

      if($password === $row["password"]){
          echo "<script>
          alert('Login berhasil')
          document.location.href = './index.php'
          </script>";
      }else{
          echo "<script>
      alert('gagal')
      </script>";
      } 

  }

  $error = true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./img/logoBungaCrop.png">

    <script>
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                popins : 'poppins'
              },
            }
          }
        }
      </script>
      <style type="text/tailwindcss">
        @layer components {
          .txt-fld {
            @apply border-2 p-4 w-full rounded-md outline-none active:bg-slate-200; 
          }
        }
        @layer components {
          .garis {
            @apply bg-black h-1 w-5 border-green-50; 
          }
        }
      </style>
</head>
<body class="font-popins bg-slate-200">
    <div id="login" class="">
        <div class="w-1/3 h-[648px] bg-white mx-auto my-52 p-5 shadow-xl rounded-md">
            <form action="" method="POST" class="flex flex-col">
                <img src="./img/logoBungaCrop.png" alt="" class="w-40 mb-8 mx-auto">
                <div class="inline-flex items-center gap-2 mb-14">
                    <hr class="w-60">
                    Login
                    <hr class="w-60">
                </div>

                <!-- email -->
               <div class="group flex items-center">
                <img src="./img/icons8-customer-32.png" alt="" class="absolute pl-4">
                   <input type="email" name="eml" id="" placeholder="Email" class="txt-fld peer pl-14 focus:invalid:border-red-500 invalid:text-red-500" autocomplete="off">
                    <p class="absolute -mt-24 text-red-500 invisible peer-invalid:visible ">Email salah!</p>
               </div>

               <!-- password -->
                <div class="group flex items-center">
                    <img src="./img/icons8-password-key-48.png" alt="" class="absolute pl-4 w-10">
                    <input type="password" name="pwd" id="" placeholder="Password" class="txt-fld pl-14 focus:border-slate-600" autocomplete="off">
                </div>
                <div class="my-7 flex justify-between">
                    <div class="">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="text-green-400 font-semibold border-none ">Forgot Your Password?</a>
                </div>
                <button type="submit" name="login" class="txt-fld bg-green-400 mb-8 flex gap-2 justify-center hover:bg-green-700">
                    <img src="./img/icons8-unlock-32.png" alt="" class="w-5">
                   <a href="./index.html" class="text-white font-medium"> Login</a>
                </button>
                <hr>
            </form>
        </div>
    </div>
</body>
</html>