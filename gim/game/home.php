
<?php

  session_start();



  if(!isset($_SESSION["s_id"])) 
  {
    header("Location:index.php");  
  }

  $id=$_SESSION["s_id"];

  $con=mysqli_connect("localhost","root","","game");

  $sql_name="select * from login where login_id='".$id."' ";
  $result_name = mysqli_query($con, $sql_name);	
  $row_name=mysqli_fetch_row($result_name); 

  if(isset($_POST["btnScore"]))
  {

    $score=$_POST["txtS"];

    $sql = "insert into score(id,score) values('$id','$score')";
        
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Score saved ..!!');</script>";
        //header("Location:index.php");
       
    }
    else
    {
      echo"Error".mysqli_error($con);
    }
  }
  

?>


<!DOCTYPE html>
<html lang="en">
  <head>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game</title>
    <script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css" >

    
                


  </head>
  <body>

    <form id="frm" method="post">
     <center><div class="back">
    
<table align="center" border="0" style="padding-top:90px; box-shadow:0 8px 16px 0 rgba(0,0,0,0.5);" >

  <tr>
  <td align="left">&nbsp; Player Name : <?php echo"".$row_name[1]; ?></td>
    <td  align="right" style="color:white;"><a href="logout.php" class="logout" ><img src="img/logout.png" class="ico" width="20px" height="20px"><td>
    
    </tr>
  <tr>
      <td colspan="2" align="center" style="background-color: rgb(202, 168, 80);"><font style="font-size:larger; font-family: Cambria;">Virtual Zoo</td>    
  </tr>
  <tr>
    <td  align="center" style="background-color: goldenrod;"><div id="lvl">&nbsp;</td>
      <td align="center"  style="background-color: goldenrod;"><div id="some_div">&nbsp;</div>  </td>
    
  </tr>
  <tr>
    <td>
      <div id="frame1">
        
       

        <button class="btn" id="btn1"  type="button">O </button>
        <button class="btn" id="btn2"  type="button">L</button>
        <button class="btn" id="btn3"  type="button">N</button>
        <button class="btn" id="btn4"  type="button">I</button>

        <button class="btn" id="btn5"  type="button">M</button>
        <button class="btn" id="btn6"  type="button">P</button>
        <button class="btn" id="btn7"  type="button">A</button>
        <button class="btn" id="btn8"  type="button">U</button>

        <button class="btn" id="btn9"  type="button">C</button>
        <button class="btn" id="btn10"  type="button">W</button>
        <button class="btn" id="btn11"  type="button">O</button>
        <button class="btn" id="btn12"  type="button">R</button>

        <button class="btn" id="btn13"  type="button">R </button>
        <button class="btn" id="btn14"  type="button">E</button>
        <button class="btn" id="btn15"  type="button">A</button>
        <button class="btn" id="btn16"  type="button">B</button>

        <button class="btn" id="btn17"  type="button">T </button>
        <button class="btn" id="btn18"  type="button">O</button>
        <button class="btn" id="btn19"  type="button">A</button>
        <button class="btn" id="btn20"  type="button">G</button>

        <button class="btn" id="btn21"  type="button">D </button>
        <button class="btn" id="btn22"  type="button">R</button>
        <button class="btn" id="btn23"  type="button">E</button>
        <button class="btn" id="btn24"  type="button">E</button>

        <button class="btn" id="btn25"  type="button">I </button>
        <button class="btn" id="btn26"  type="button">F</button>
        <button class="btn" id="btn27"  type="button">H</button>
        <button class="btn" id="btn28"  type="button">S</button>

        <button class="btn" id="btn29"  type="button">S </button>
        <button class="btn" id="btn30"  type="button">A</button>
        <button class="btn" id="btn31"  type="button">W</button>
        <button class="btn" id="btn32"  type="button">N</button>

        <button class="btn" id="btn33"  type="button">C </button>
        <button class="btn" id="btn34"  type="button">K</button>
        <button class="btn" id="btn35"  type="button">D</button>
        <button class="btn" id="btn36"  type="button">U</button>

        <button class="btn" id="btn37"  type="button">R</button>
        <button class="btn" id="btn38"  type="button">A</button>
        <button class="btn" id="btn39"  type="button">C</button>
        <button class="btn" id="btn40"  type="button">B</button>
        



        
                                
            
        </div>
        
      </td>
      <td align="center" style="background-color:rgb(214, 169, 54);">      
        <br>
        <div id="pic"></div>
        <div id="pic2"></div>
        <div id="pic3"></div>
        <div id="pic4"></div>
        <div id="pic5"></div>
        <div id="pic6"></div>
        <div id="pic7"></div>
        <div id="pic8"></div>
        <div id="pic9"></div>
        <div id="pic10"></div>
           
            <div id="frame2">   

            </div>
    </td>
    
  </tr>
  <tr>
    <td align="center">Score:<input type="text" name="txtS" id="txtScore" value="0" style="font-size:15px; color:black; background-color:goldenrod; width:40px;" readonly="readonly"> <input  type="submit" class="con" name="btnScore" id="btnScore"  value="Save Score" hidden></td>
    <td height="40px" align="right" style="background-color: goldenrod;">
    
    
      <input  type="button" class="con" id="btnStart"  value="Start" onclick="timer()">
      <input  type="button" class="con" id="btnNext"  value="Match" >
      <input  type="submit" class="con" id="btn"  value="Try Again" >
      
    &nbsp;
    </td>

  </tr>
  <tr>
    <td align="center" colspan="2">
     

    </td>

    

  </tr>
</table></div></center> 
</form>  

<br>
<br>




<?php

  $sql_score="select * from score where id='".$id."' ";

  $result_score = mysqli_query($con, $sql_score);	

  echo"<table id=customers align=center> <th> Recent Score </th><tr>";
  while($row = mysqli_fetch_array($result_score))
  {
    echo " <tr><td>".$row[1]."</td></tr> ";
  }
  echo"</tr></table>";

?>



    <script>

          function timer(){


            var timeLeft = 120;
            var elem = document.getElementById('some_div');
            var timerId = setInterval(countdown, 1000);
            
            function countdown()
            {
                if (timeLeft == -1)
                {
                    clearTimeout(timerId);
                    $("#btnNext").prop("disabled",true);
                    $("#btn").prop("disabled",false);
                    alert("Time Out.!  Try Again");

                    $("#btn1").hide();
                    $("#btn2").hide();
                    $("#btn3").hide();
                    $("#btn4").hide();
                    $("#btn5").hide();
                    $("#btn6").hide();
                    $("#btn7").hide();
                    $("#btn8").hide();
                    $("#btn9").hide();
                    $("#btn10").hide();
                    $("#btn11").hide();
                    $("#btn12").hide();
                    $("#btn13").hide();
                    $("#btn14").hide();
                    $("#btn15").hide();
                    $("#btn16").hide();
                    $("#btn17").hide();
                    $("#btn18").hide();
                    $("#btn19").hide();
                    $("#btn20").hide();
                    $("#btn21").hide();
                    $("#btn22").hide();
                    $("#btn23").hide();
                    $("#btn24").hide();
                    $("#btn25").hide();
                    $("#btn26").hide();
                    $("#btn27").hide();
                    $("#btn28").hide();
                    $("#btn29").hide();
                    $("#btn30").hide();
                    $("#btn31").hide();
                    $("#btn32").hide();
                    $("#btn33").hide();
                    $("#btn34").hide();
                    $("#btn35").hide();
                    $("#btn36").hide();
                    $("#btn37").hide();
                    $("#btn38").hide();
                    $("#btn39").hide();
                    $("#btn40").hide();
                } 
                else
                {
                    elem.innerHTML = "Time : " + timeLeft + " Seconds";
                    timeLeft--;
                }
            }
            
            
          }
            
    

var arr=[];
var count=0;


var word=["DUCK","GOAT","LION","BEAR","CRAB","CROW","DEER","SWAN","FISH","PUMA"];

    var letter1=["D","U","C","K"]; 
   
    var letter2=["G","O","A","T"];

    var letter3=["L","I","O","N"];

    var letter4=["B","E","A","R"];

    var letter5=["C","R","A","B"];

    var letter6=["C","R","O","W"];

    var letter7=["D","E","E","R"];

    var letter8=["S","W","A","N"];

    var letter9=["F","I","S","H"];

    var letter10=["P","U","M","A"];


$(document).ready(function(){

   $("#btn1").hide();
   $("#btn2").hide();
   $("#btn3").hide();
   $("#btn4").hide();
   $("#btn5").hide();
   $("#btn6").hide();
   $("#btn7").hide();
   $("#btn8").hide();
   $("#btn9").hide();
   $("#btn10").hide();
   $("#btn11").hide();
   $("#btn12").hide();
   $("#btn13").hide();
   $("#btn14").hide();
   $("#btn15").hide();
   $("#btn16").hide();
   $("#btn17").hide();
   $("#btn18").hide();
   $("#btn19").hide();
   $("#btn20").hide();
   $("#btn21").hide();
   $("#btn22").hide();
   $("#btn23").hide();
   $("#btn24").hide();
   $("#btn25").hide();
   $("#btn26").hide();
   $("#btn27").hide();
   $("#btn28").hide();
   $("#btn29").hide();
   $("#btn30").hide();
   $("#btn31").hide();
   $("#btn32").hide();
   $("#btn33").hide();
   $("#btn34").hide();
   $("#btn35").hide();
   $("#btn36").hide();
   $("#btn37").hide();
   $("#btn38").hide();
   $("#btn39").hide();
   $("#btn40").hide();
   
   $("#btnNext").prop("disabled",true);
   $("#btn").prop("disabled",true);


});

 function formReset()
 {
  document.getElementById("frm").reset();
 }

 



 var imgCount=1;  
   



$("#btnStart").click(function(){

  $("#btn1").show();
   $("#btn2").show();
   $("#btn3").show();
   $("#btn4").show();
   $("#btn5").show();
   $("#btn6").show();
   $("#btn7").show();
   $("#btn8").show();
   $("#btn9").show();
   $("#btn10").show();
   $("#btn11").show();
   $("#btn12").show();
   $("#btn13").show();
   $("#btn14").show();
   $("#btn15").show();
   $("#btn16").show();
   $("#btn17").show();
   $("#btn18").show();
   $("#btn19").show();
   $("#btn20").show();
   $("#btn21").show();
   $("#btn22").show();
   $("#btn23").show();
   $("#btn24").show();
   $("#btn25").show();
   $("#btn26").show();
   $("#btn27").show();
   $("#btn28").show();
   $("#btn29").show();
   $("#btn30").show();
   $("#btn31").show();
   $("#btn32").show();
   $("#btn33").show();
   $("#btn34").show();
   $("#btn35").show();
   $("#btn36").show();
   $("#btn37").show();
   $("#btn38").show();
   $("#btn39").show();
   $("#btn40").show();


   $("#btnNext").prop("disabled",false);
  $(this).prop("disabled",true);
 
  var x = document.createElement("IMG");
  x.setAttribute("src", "img/duck.jpg");
  x.setAttribute("width", "150");
  x.setAttribute("height", "100");
  x.setAttribute("alt", "The Pulpit Rock");

  $("#pic").append(x);
  
  document.getElementById("lvl").innerHTML="Level 1";

});
   

$("#btn1").click(function(){
  if(count<4)
  {
    $("#btn1").appendTo("#frame2");
     arr[count]="O";

    count=count+1;
  }


});

$("#btn2").click(function(){
  if(count<4)
  {
    $("#btn2").appendTo("#frame2");
arr[count]="L";
count=count+1;
  }

});


$("#btn3").click(function(){
 if(count<4)
  {
    $("#btn3").appendTo("#frame2");
arr[count]="N";
count=count+1;
  }

});

$("#btn4").click(function(){
  if(count<4)
  {
    $("#btn4").appendTo("#frame2");
arr[count]="I";
count=count+1;
  }

});

$("#btn5").click(function(){
  if(count<4)
  {
    $("#btn5").appendTo("#frame2");
arr[count]="M";
count=count+1;
  }

});

$("#btn6").click(function(){
  if(count<4)
  {
    $("#btn6").appendTo("#frame2");
arr[count]="P";
count=count+1;
  }

});

$("#btn7").click(function(){
  if(count<4)
  {
    $("#btn7").appendTo("#frame2");
arr[count]="A";
count=count+1;
  }

});

$("#btn8").click(function(){
  if(count<4)
  {
    $("#btn8").appendTo("#frame2");
arr[count]="U";
count=count+1;
  }

});

$("#btn9").click(function(){
  if(count<4)
  {
    $("#btn9").appendTo("#frame2");
arr[count]="C";
count=count+1;
  }

});

$("#btn10").click(function(){
  if(count<4)
  {
    $("#btn10").appendTo("#frame2");
arr[count]="W";
count=count+1;
  }

});

$("#btn11").click(function(){
  if(count<4)
  {
    $("#btn11").appendTo("#frame2");
arr[count]="O";
count=count+1;
  }

});

$("#btn12").click(function(){
  if(count<4)
  {
    $("#btn12").appendTo("#frame2");
arr[count]="R";
count=count+1;
  }

});

$("#btn13").click(function(){
  if(count<4)
  {
    $("#btn13").appendTo("#frame2");
arr[count]="R";
count=count+1;
  }

});

$("#btn14").click(function(){
  if(count<4)
  {
    $("#btn14").appendTo("#frame2");
arr[count]="E";
count=count+1;
  }

});

$("#btn15").click(function(){
  if(count<4)
  {
    $("#btn15").appendTo("#frame2");
arr[count]="A";
count=count+1;
  }

});

$("#btn16").click(function(){
  if(count<4)
  {
    $("#btn16").appendTo("#frame2");
arr[count]="B";
count=count+1;
  }

});

$("#btn17").click(function(){
  if(count<4)
  {
    $("#btn17").appendTo("#frame2");
arr[count]="T";
count=count+1;
  }

});

$("#btn18").click(function(){
  if(count<4)
  {
    $("#btn18").appendTo("#frame2");
arr[count]="O";
count=count+1;
  }

});

$("#btn19").click(function(){
  if(count<4)
  {
    $("#btn19").appendTo("#frame2");
arr[count]="A";
count=count+1;
  }

});

$("#btn20").click(function(){
  if(count<4)
  {
    $("#btn20").appendTo("#frame2");
arr[count]="G";
count=count+1;
  }

});

$("#btn21").click(function(){
  if(count<4)
  {
    $("#btn21").appendTo("#frame2");
arr[count]="D";
count=count+1;
  }

});

$("#btn22").click(function(){
  if(count<4)
  {
    $("#btn22").appendTo("#frame2");
arr[count]="R";
count=count+1;
  }

});

$("#btn23").click(function(){
  if(count<4)
  {
    $("#btn23").appendTo("#frame2");
arr[count]="E";
count=count+1;
  }

});

$("#btn24").click(function(){
  if(count<4)
  {
    $("#btn24").appendTo("#frame2");
arr[count]="E";
count=count+1;
  }

});

$("#btn25").click(function(){
  if(count<4)
  {
    $("#btn25").appendTo("#frame2");
arr[count]="I";
count=count+1;
  }

});

$("#btn26").click(function(){
  if(count<4)
  {
    $("#btn26").appendTo("#frame2");
arr[count]="F";
count=count+1;
  }

});

$("#btn27").click(function(){
  if(count<4)
  {
    $("#btn27").appendTo("#frame2");
arr[count]="H";
count=count+1;
  }

});

$("#btn28").click(function(){
  if(count<4)
  {
    $("#btn28").appendTo("#frame2");
arr[count]="S";
count=count+1;
  }

});

$("#btn29").click(function(){
  if(count<4)
  {
    $("#btn29").appendTo("#frame2");
arr[count]="S";
count=count+1;
  }

});

$("#btn30").click(function(){
  if(count<4)
  {
    $("#btn30").appendTo("#frame2");
arr[count]="A";
count=count+1;
  }

});

$("#btn31").click(function(){
  if(count<4)
  {
    $("#btn31").appendTo("#frame2");
arr[count]="W";
count=count+1;
  }

});

$("#btn32").click(function(){
  if(count<4)
  {
    $("#btn32").appendTo("#frame2");
arr[count]="N";
count=count+1;
  }

});

$("#btn33").click(function(){
  if(count<4)
  {
    $("#btn33").appendTo("#frame2");
arr[count]="C";
count=count+1;
  }

});

$("#btn34").click(function(){
  if(count<4)
  {
    $("#btn34").appendTo("#frame2");
arr[count]="K";
count=count+1;
  }

});

$("#btn35").click(function(){
  if(count<4)
  {
    $("#btn35").appendTo("#frame2");
arr[count]="D";
count=count+1;
  }

});

$("#btn36").click(function(){
  if(count<4)
  {
    $("#btn36").appendTo("#frame2");
arr[count]="U";
count=count+1;
  }

});

$("#btn37").click(function(){
  if(count<4)
  {
    $("#btn37").appendTo("#frame2");
arr[count]="R";
count=count+1;
  }

});

$("#btn38").click(function(){
  if(count<4)
  {
    $("#btn38").appendTo("#frame2");
arr[count]="A";
count=count+1;
  }

});

$("#btn39").click(function(){
  if(count<4)
  {
    $("#btn39").appendTo("#frame2");
  arr[count]="C";
  count=count+1;
  }

});

$("#btn40").click(function(){
  if(count<4)
  {
    $("#btn40").appendTo("#frame2");
    arr[count]="B";
    count=count+1;
  }

});




    


       var lvlCount=1;
       var score=0;
      
      $("#btnNext").click(function(x,timerId,timeLeft){
     
        timeLeft=-1;
        
      
        
        
        

       
        if((lvlCount==1 || lvlCount==2 || lvlCount==3 || lvlCount==4 || lvlCount==5 || lvlCount==6 || lvlCount==7 || lvlCount==8 || lvlCount==9 || lvlCount==10) && (count ==4))
        {
          if(lvlCount==1 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 2";
            $("#pic").hide();
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter1[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                
                alert("Level 1 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;
                
                

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p2.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic2").append(y);

   
                
              }
              else
              {
                alert("oops.! Wrong Answer... Try again.! ");
                $("#btn").prop("disabled",false);
                $("#btnNext").prop("disabled",true);
              }


              
             
             
            
           
            lvlCount=lvlCount+1;

          }else{

          }


          if(lvlCount==2 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 3";
            $("#pic2").hide();
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter2[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 2 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p3.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");
  $("#pic3").append(y);
              }
              else
              {
            
              }


              
              
            
           
            lvlCount=lvlCount+1;

          }
          else
          {

          }

          if(lvlCount==3 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 4";
            $("#pic3").hide();
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter3[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 3 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p4.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic4").append(y);
              }
              else
              {
                
              }


              
             
            
            
            lvlCount=lvlCount+1;

          }
          else
          {

          }

          if(lvlCount==4 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 5";
            $("#pic4").hide(y);
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter4[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 4 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p5.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic5").append(y);
              }
              else
              {
            
              }


              
             
            
           
            lvlCount=lvlCount+1;

          }else{
            
          }

          if(lvlCount==5 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 6";
            $("#pic5").hide(y);
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter5[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 5 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;
                
                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p6.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic6").append(y);
              }
              else
              {
            
              }


              
             
            
          
            lvlCount=lvlCount+1;

          }
          else{

          }

          if(lvlCount==6 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 7";
           
            $("#pic6").hide(y);
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter6[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 6 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p7.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic7").append(y);
              }
              else
              {
            
              }


              
              
            
           
            lvlCount=lvlCount+1;

          }
          else{

          }

          if(lvlCount==7 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 8";
            $("#pic7").hide(y);
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter7[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 7 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;
                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p8.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic8").append(y);
                
              }
              else
              {
            
              }


              
              
            
            
           
            lvlCount=lvlCount+1;
          }else{

          }

          if(lvlCount==8 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 9";
            $("#pic8").hide(y);
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter8[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 8 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p9.jpeg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Rock");

  $("#pic9").append(y);
              }
              else
              {
            
              }


              
              
            
           
            lvlCount=lvlCount+1;

          }else{
            
          }

          if(lvlCount==9 && count>3)
          {
            document.getElementById("lvl").innerHTML="Level 10";
            $("#pic9").hide(y);
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter9[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 9 Completed.!");
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;

                var y = document.createElement("IMG");
  y.setAttribute("src", "img/p10.jpg");
  y.setAttribute("width", "150");
  y.setAttribute("height", "100");
  y.setAttribute("alt", "The Pulpit Rock");

  $("#pic10").append(y);
              }
              else
              {
            
              }


              
             
            
           
            lvlCount=lvlCount+1;

          }else{

          }

          if(lvlCount==10 && count>3)
          {
            $("#pic10").hide(y);
            
              var i;
              var subCount=0;
              for(i=0;i<4;i++)
              {
                  if(arr[i]==letter10[i])
                  {
                    subCount=subCount+1;
                    console.log(subCount);
                  }
              }
              //   console.log(arr);
              if(subCount==4)
              {
                alert("Level 10 Completed.!  Game Win...!!!!!!!!!");
               
                $("#frame2").empty();
                count=0;
                score=score+10;
                document.getElementById("txtScore").value=score;
                $("#some_div").hide();
                $("#btn").prop("disabled",false);
                $("#btnScore").show();
              }
              else
              {
            
              }


              
             
            
           
            lvlCount=lvlCount+1;
            
          }
          else
          {

          }




        }
        else
        {
            alert("Words did not matched.!");
            $("#btn").prop("disabled",false);
            $("#btnNext").prop("disabled",true);
            $("#some_div").hide();
            $("#btnScore").show();
           
        }
         

         
         
        
         
      });



      </script>
  </body>



  
</html>