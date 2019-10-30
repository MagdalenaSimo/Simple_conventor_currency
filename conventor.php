<!DOCTYPE html>
<html>
  <head>
    <title>Conventor</title>
  </head>
  <body bgcolor="skyblue">
    <form method="post" action="conventor.php" align="center">
      
<!--formular-->

      <b>Enter amount:</b>
      <input type="text" name="amount" size="10" placeholder="Enter amount"></inupt>
      
      <b>From:</b>
      <select name="from">
        <option>USD</option>
        <option>GBP</option>
        <option>INR</option>
        <option>EUR</option>
      </select>
      <b>To:</b>
      <select name="to">
        <option>USD</option>
        <option>GBP</option>
        <option>INR</option>
        <option>EUR</option>
      </select>
      <input type="Submit" name=convert value="Convert Now"></inupt>
    </form><hr>

<!--php-->

    <?php
    if(isset($_POST['convert'])){
    $amount = $_POST['amount'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    if($from == 'USD' AND $to == 'EUR'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount*30;
    echo " Eur</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'GBP'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount*0.6;
    echo " Pounds</b></h2></center>";
    }
    if($from == 'USD' AND $to == 'INR'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount*45;
    echo " Indian Rupees</b></h2></center>";
    }
    if($from == 'EUR' AND $to == 'USD'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount/30;
    echo " Dollars</b></h2></center>";
    }
    if($from == 'GBP' AND $to == 'USD'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount/0.6;
    echo " Dollars</b></h2></center>";
    }
    if($from == 'INR' AND $to == 'USD'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount/45;
    echo " Dollars</b></h2></center>";
    }
    if($from == 'INR' AND $to == 'GBP'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount*5.6;
    echo " Pounds</b></h2></center>";
    }
    if($from == 'INR' AND $to == 'EUR'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount*29;
    echo " Eur</b></h2></center>";
    }
    if($from == 'GBP' AND $to == 'EUR'){
    echo "<center><h2>Your answer is:<b style='color:red;'>";
    echo $amount/29;
    echo " Eur</b></h2></center>";
    }
    }
    ?>
    
    
  </body>
</html>