<?php 
session_start(); 
include_once "./serverLogic.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="feedbackStyle.css" rel="stylesheet">
  </head>
  <body>
  
  <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
            <?php
            //   echo $_SESSION['success'];
              unset($_SESSION['success']);
             ?>
          </h3>
        </div>
      <?php endif; ?>

    <form action="feedback.php" method="post" name="frmfeedback " class="main">
    <?php include'errors.php'; ?>
     <table class="center">
      <tr>
        <td></td>
        <td class="td2"><p><a href="index.php?logout='1'" style="color:red">Logout</a></p></td>
        <th class="sd">1.Strongly Disagree</th>
        <th class="d">2.Disagree</th>
        <th class="a">3.Agree</th>
        <th class="sa">4.Strongly Agree</th>
      </tr>
      <tr class="blank_row">
        <td colspan="6"></td>
    </tr>

        <tr class="blank_row">
      <td colspan="6">About the course</td>
       </tr>

       <tr>
         <th>Options</th>
         <th></th>
         <th></th>
         <th></th>
         <th></th>
         <th></th>
       </tr>
       <!-- <form action="" id="row1" method="post" name="frmfeedback" >  -->
       
        <tr>
          <th class="op">1</th>
          <td>Does this course give<br>you new knowledge<br>and learn new things</td>
          <td id="op1" class="q1"><input type="radio" name="select-r1" value="1"></td> 
          <td id="op2" class="q2"><input type="radio" name="select-r1" value="2"></td>
          <td id="op3" class="q3"><input type="radio" name="select-r1" value="3"></td>
          <td id="op4" class="q4"><input type="radio" name="select-r1" value="4"></td>
         
 
        </tr>
       <!-- </form> -->
      

       <!-- <form action="" id="row2" method="post" name="frmfeedback">  -->
       <tr>
        <th class="op">2</th>
        <td>The quizzes and<br>assignments were <br>enough in number</td>
        
        <td id="op5" class="q1"><input type="radio" name="select-r2" value="1"></td>
        <td id="op6" class="q2"><input type="radio" name="select-r2" value="2"> </td>
        <td id="op7" class="q3"><input type="radio" name="select-r2" value="3" ></td>
        <td id="op8" class="q4"><input type="radio" name="select-r2" value="4" ></td>
      
      </tr>
      <!-- </form> -->

      <!-- <form action="" id="row3" method="post" name="frmfeedback">  -->
      <tr>
        <th class="op">3</th>
        <td>The course was having<br>good numbers of <br>practical examples for <br>learning</td>
        <td id="op9"  class="q1"><input type="radio" name="select-r3" value="1" ></td>
        <td id="op10" class="q2"><input type="radio" name="select-r3" value="2" ></td>
        <td id="op11" class="q3"><input type="radio" name="select-r3" value="3" ></td>
        <td id="op12" class="q4"><input type="radio" name="select-r3" value="4" ></td>
      </tr>
      <!-- </form> -->

      <tr>
        <th class="op"></th>
        <th>Your Remarks/  <br>Suggestions/ <br>Reservations</th>
        <td><input type="text" size="20" name="responseTxt" value=""/></td>
        <td><input type="text" size="20" disabled placeholder="Enter Remarks in left box"/></td>
        <td><input type="text" size="20" disabled placeholder="Enter Remarks in left box"/></td>
        <td><input type="text" size="20" disabled placeholder="Enter Remarks in left box"/></td>
      </tr>
    
      <tr class="blank_row">
        
        <td class="op" colspan="6">
            
            <button class="buttonsuccess btn"  name="submit" > Submit </button>
        
        </td>
    </tr>

    </table>
  </form>
                    <!-- JAVASCRIPT FOR BG STYLE -->
<script>
document.getElementById("op1").addEventListener("click",
    function() {
        this.style.background="red";
        document.getElementById("op2").style.backgroundColor="white";
        document.getElementById("op3").style.backgroundColor="white";
        document.getElementById("op4").style.backgroundColor="white";

                                                         
    }
);

document.getElementById("op2").addEventListener("click",
    function() {
        this.style.background="orange";        
        document.getElementById("op1").style.backgroundColor="white";
        document.getElementById("op3").style.backgroundColor="white";
        document.getElementById("op4").style.backgroundColor="white";                                            
    }
);

document.getElementById("op3").addEventListener("click",
    function() {
        this.style.background="#99CC00";    
        document.getElementById("op1").style.backgroundColor="white";
        document.getElementById("op2").style.backgroundColor="white";
        document.getElementById("op4").style.backgroundColor="white";                                                
    }
);

document.getElementById("op4").addEventListener("click",
    function() {
        this.style.background="#00FF00";        
        document.getElementById("op1").style.backgroundColor="white";
        document.getElementById("op2").style.backgroundColor="white";
        document.getElementById("op3").style.backgroundColor="white";                                            
    }
);
     
          
document.getElementById("op5").addEventListener("click",
    function() {
        this.style.background="red"; 
        document.getElementById("op6").style.backgroundColor="white";
        document.getElementById("op7").style.backgroundColor="white";
        document.getElementById("op8").style.backgroundColor="white";
                                                         
    }
);

document.getElementById("op6").addEventListener("click",
    function() {
        this.style.background="orange";   
        document.getElementById("op5").style.backgroundColor="white";
        document.getElementById("op7").style.backgroundColor="white";
        document.getElementById("op8").style.backgroundColor="white";                                                 
    }
);

document.getElementById("op7").addEventListener("click",
    function() {
        this.style.background="#99CC00";    
        document.getElementById("op5").style.backgroundColor="white";
        document.getElementById("op6").style.backgroundColor="white";
        document.getElementById("op8").style.backgroundColor="white";                                                       
    }
);

document.getElementById("op8").addEventListener("click",
    function() {
        this.style.background="#00FF00";    
        document.getElementById("op5").style.backgroundColor="white";
        document.getElementById("op6").style.backgroundColor="white";
        document.getElementById("op7").style.backgroundColor="white";                                                      
    }
);

     
document.getElementById("op9").addEventListener("click",
    function() {
        this.style.background="red"; 
        document.getElementById("op10").style.backgroundColor="white";
        document.getElementById("op11").style.backgroundColor="white";
        document.getElementById("op12").style.backgroundColor="white";       
                                                         
    }
);

document.getElementById("op10").addEventListener("click",
    function() {
        this.style.background="orange";      
        document.getElementById("op9").style.backgroundColor="white";
        document.getElementById("op11").style.backgroundColor="white";
        document.getElementById("op12").style.backgroundColor="white";                                                
    }
);

document.getElementById("op11").addEventListener("click",
    function() {
        this.style.background="#99CC00";     
        document.getElementById("op9").style.backgroundColor="white";
        document.getElementById("op10").style.backgroundColor="white";
        document.getElementById("op12").style.backgroundColor="white";                                                 
    }
);

document.getElementById("op12").addEventListener("click",
    function() {
        this.style.background="#00FF00";  
        document.getElementById("op9").style.backgroundColor="white";
        document.getElementById("op10").style.backgroundColor="white";
        document.getElementById("op11").style.backgroundColor="white";                                                    
    }
); 
</script>
</body>
</html>




