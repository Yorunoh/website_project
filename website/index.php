<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/4fa7b7da7291c7911e62fa2a9663ea3b_429422041557214558.png">
    <title>Yoru profile</title>
</head>
<body>
    <div class="nav-bar">

    </div>
    <div class="container">
        <div class="header">
            <img src="img/832a5b182b2cd746180ae517e39a8404.gif" alt="teriteri">
            <h1>Welcome to my Website</h1>
            <img src="img/832a5b182b2cd746180ae517e39a8404.gif" alt="teriteri">   
        </div>
        
        <div class="mid">
            <img class="pic_profile" src="img/lien-kei sugawara.jpg" alt="Yoru_profile_pic">
            <h3>
                Hi, my name is Yoru
            </h3>
            <ul style="line-height:180%">
                <li>I'm a web developer (well just front-end), and im still learning the back-end. 
                    I'm lazy asf but im still want to know more about program or anything related to that. 
                    My english not that good so hope u guys dont mind about that.
                </li>
                <li>
                    My github profile:
                    <a href="https://github.com/Yorunoh">
                        
                        <!--
                        <button class="button-18" role="button" title="github">
                            <img src="img/github-6980894_1280.jpg" alt="">
                        </button>
                        -->
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                          </svg>
                    </a>
                </li>
                <li>
                    You can email me through here: kimminhhoang058@gmail.com
                </li>
                <li>
                    Here is my introduction video: 
                    
                    
                    <a href="https://www.youtube.com/watch?v=qgCv9SYHfy8" target="_blank">
                        <button class="button-17" role="button" title="just a button">click here</button>
                    </a>
                </li>
            <?php
                    $name="";
                    $nameErr="";
                    $result ="";
                    
                    function test_input($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                          $nameErr = "* Name is required";
                        } else {
                          $name = test_input($_POST["name"]);
                          
                          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                            $nameErr = "Only letters and white space allowed";
                          }else{
                            $result ="fuck you ". $name;
                          }
                        }
                    }
            ?>
                    
                    <br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    Your name: <input type="text" name="name" value="<?php echo $name;?>">
                    <span class="error"><?php echo $nameErr;?></span>
                    <input type="submit" name="submit" value="submit" class="button-17">
                </form>
                <?php
                    echo $result;
                ?>
              </ul>
              
            <h4>I'll definitely update this website, although not regulary but i'll definitely do it. Pls looking forward</h4>
        </div>
    </div>
<div class="footer">

</div>

</body>
</html>
