<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>YJ COMPANY</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
      .container, .a, .col-2, .col-8, p{
          border : 1px solid black;
          
      }
      .pcenter{
          padding:30px;
      }
      .center{
          text-align: center;
      }
      #b {
          padding: 50px;

      }
      
      
      </style>

  </head>
  <body>
    <div class = "container center">
        <div class = "row">
            <div class = "col">
                <span style="font-size:50px;" ><p style="padding:60px;">
                <a href = "index.php">❤ YJ COMPANY ❤</a></p></span>
            </div>
        </div>
            <div class = "col-8">
                <div class = "row">
                <img src = "https://dt40dm21pj8em.cloudfront.net/uploads/froala/file/4184/%ED%9A%8C%EC%82%AC%20%EC%9D%B8%EC%A7%80%EB%8F%841.jpg" 
                width = "1000dp" padding = "30dp">
                    <div class ="col">
                        <p id = "b"><span style="font-size:30px;" ><a href = "eofm.php">🌹오늘의 사원🌹</a></span></p> 
                    </div>
                </div>
                 <div class = "row">
                    <div class ="col">
                    <p id="b"><span style = "font-size:30px;"><a href = "glory.php">👏명예의 전당👏</a></span></p>   
                    </div>
                </div>
                 <div class = "row">
                    <div class ="col">
                    <form action="colleague.php" method="GET">
                    <span style = "font-size:30px;"><p id = "b">
                    👬신입 사원 찾기👩🏼‍🤝‍🧑🏻
                    </p></span>
                    <input type="text" name="number" placeholder="number">
                    <input type="submit" value="Search">
                    </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

   <script src="js/bootstrap.min.js"></script>
  </body>
</html>