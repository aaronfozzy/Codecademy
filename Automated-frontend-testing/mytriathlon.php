<!--SQL queries-->
<?php
  include ("php/db-connect.php");
  include ("sqlQueries.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Website Testing</title>
<link rel="stylesheet" href="build/css/styles.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="build/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
<div class="container">
<!--header of page-->
<section class="header">
  <div class="top-bar">
  </div>

  <img class="mytriathlon-logo" src="https://cdn11.bigcommerce.com/s-8a17r5u7/images/stencil/789x789/download_1545976958__63567.original.png"   alt="My Triathlon"/>

  <div class="status-websites">
  <h1>System Status - MyTriathlon</h1>
  <div>
</section>

<section class="main">
  <!--Code used in order to show system test or failure -->
    <?php
      if($numGetStatus >= 1) {
        while($statusRow = mysqli_fetch_assoc($getStatus))
        {
          $currentStatus = $statusRow['status'];
          if($currentStatus == "unsuccessful") {
            array_push($failureArray,"1");
          }
        }
        $countFailures = count($failureArray);
        if($countFailures >= 1){
          echo "<h1 class='overall-status-fail'>System Failure</h1>";
        }else{
          echo "<h1 class='overall-Status-success'>All Systems Operational</h1>";
        }
      }
    ?>

  <table>
    <tr>
      <th>Website Section</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>MyTriathlon Checkout</td>
      <?php
        if($numGetStatusCheckout >= 1) {
          while($statusRowCheckout = mysqli_fetch_assoc($getStatusCheckout))
          {
            $currentStatusCheckout = $statusRowCheckout['status'];
            if($currentStatusCheckout == "unsuccessful") {
              array_push($failureArrayCheckout,"1");
            }
          }
          $countFailuresCheckout = count($failureArrayCheckout);
          if($countFailuresCheckout >= 1){
            echo "<td>System Failure</td>";
          }else{
            echo "<td>Operational</td>";
          }
        }
      ?>
    </tr>
    <tr>
      <td>MyTriathlon Terms</td>
      <?php
        if($numGetStatusOutlet >= 1) {
          while($statusRowOutlet = mysqli_fetch_assoc($getStatusOutlet))
          {
            $currentStatusOutlet = $statusRowOutlet['status'];
            if($currentStatusOutlet == "unsuccessful") {
              array_push($failureArrayOutlet,"1");
            }
          }
          $countFailuresOutlet = count($failureArrayOutlet);
          if($countFailuresOutlet >= 1){
            echo "<td>System Failure</td>";
          }else{
            echo "<td>Operational</td>";
          }
        }
      ?>
    </tr>
    <tr>
      <td>MyTriathlon Overseas Delivery</td>
    <?php
      if($numGetStatusOverseasDelivery >= 1) {
        while($statusRowOverseasDelivery = mysqli_fetch_assoc($getStatusOverseasDelivery))
        {
          $currentStatusOverseasDelivery = $statusRowOverseasDelivery['status'];
          if($currentStatusOverseasDelivery == "unsuccessful") {
            array_push($failureArrayOverseasDelivery,"1");
          }
        }
        $countFailuresOutlet = count($failureArrayOverseasDelivery);
        if($countFailuresOverseasDelivery >= 1){
          echo "<td>System Failure</td>";
        }else{
          echo "<td>Operational</td>";
        }
      }
    ?>
    </tr>
    <tr>
      <td>MyTriathlon Personal Service</td>
    <?php
      if($numGetStatusPersonalService >= 1) {
        while($statusRowPersonalService = mysqli_fetch_assoc($getStatusPersonalService))
        {
          $currentStatusPersonalService = $statusRowPersonalService['status'];
          if($currentStatusPersonalService == "unsuccessful") {
            array_push($failureArrayPersonalService,"1");
          }
        }
        $countFailuresPersonalService = count($failureArrayPersonalService);
        if($countFailuresPersonalService >= 1){
          echo "<td>System Failure</td>";
        }else{
          echo "<td>Operational</td>";
        }
      }
    ?>
    </tr>
    <tr>
  </table>
</section>
<section class="footer">
  <h1 class="history-tests">History of Tests</h1>
  <table class="history-table">
      <tr>
        <th>Website Section</th>
        <th>Status </th>
        <th>Date</th>
      </tr>
      <tr>
        <td>MyTriathlon Checkout</td>
        <!--PHP Queries used to pull through test history-->
        <?php
          if($numGetStatusCheckoutDate1 >= 1) {
            while($statusRowCheckoutDate1 = mysqli_fetch_assoc($getStatusCheckoutDate1))
            {
              $currentStatusCheckoutDate1 = $statusRowCheckoutDate1['status'];
              if($currentStatusCheckoutDate1 == "unsuccessful") {
                array_push($failureArrayCheckoutDate1,"1");
              }
            }
            $countFailuresCheckoutDate1 = count($failureArrayCheckoutDate1);
            if($countFailuresCheckoutDate1 >= 1){
              echo "<td>System Failure</td>";
            }else{
              echo "<td>Operational</td>";
            }
          }
        ?>
        <td>2022-02-02 12:19:03</td>
      </tr>
      <tr>
          <td>MyTriathlon Terms</td>
          <?php
            if($numGetStatusOutletDate1 >= 1) {
              while($statusRowOutletDate1 = mysqli_fetch_assoc($getStatusOutletDate1))
              {
                $currentStatusOutletDate1 = $statusRowOutletDate1['status'];
                if($currentStatusOutletDate1 == "unsuccessful") {
                  array_push($failureArrayOutletDate1,"1");
                }
              }
              $countFailuresOutletDate1 = count($failureArrayOutletDate1);
              if($countFailuresOutletDate1 >= 1){
                echo "<td>System Failure</td>";
              }else{
                echo "<td>Operational</td>";
              }
            }
          ?>
          <td>2022-02-02 12:19:03</td>
        </tr>
        <tr>
            <td>MyTriathlon Overseas Delivery</td>
            <?php
              if($numGetStatusOverseasDeliveryDate1 >= 1) {
                while($statusRowOverseasDeliveryDate1 = mysqli_fetch_assoc($getStatusOutletDate1))
                {
                  $currentStatusOverseasDeliveryDate1 = $statusRowOverseasDeliveryDate1['status'];
                  if($currentStatusOverseasDeliveryDate1 == "unsuccessful") {
                    array_push($failureArrayOverseasDeliveryDate1,"1");
                  }
                }
                $countFailuresOverseasDeliveryDate1 = count($failureArrayOverseasDeliveryDate1);
                if($countFailuresOverseasDeliveryDate1 >= 1){
                  echo "<td>System Failure</td>";
                }else{
                  echo "<td>Operational</td>";
                }
              }
            ?>
            <td>2022-02-02 12:19:03</td>
          </tr>
          <tr>
            <td>MyTriathlon Personal Service</td>
            <?php
              if($numGetStatusPersonalServiceDate1 >= 1) {
                 while($statusRowPersonalServiceDate1 = mysqli_fetch_assoc($getStatusOutletDate1))
                 {
                  $currentStatusPersonalServiceDate1 = $statusRowPersonalServiceDate1['status'];
                   if($currentStatusPersonalServiceDate1 == "unsuccessful") {
                    array_push($failureArrayPersonalServiceDate1,"1");
                  }
                }
                $countFailuresPersonalServiceDate1 = count($failureArrayPersonalServiceDate1);
                if($countFailuresPersonalServiceDate1 >= 1){
                   echo "<td>System Failure</td>";
                }else{
                  echo "<td>Operational</td>";
                 }
              }
            ?>
             <td>2022-02-02 12:19:03</td>
          </tr>
          <tr>
              <td>MyTriathlon Checkout</td>
              <?php
                if($numGetStatusPersonalServiceDate2 >= 1) {
                   while($statusRowPersonalServiceDate2 = mysqli_fetch_assoc($getStatusOutletDate2))
                   {
                    $currentStatusPersonalServiceDate2 = $statusRowPersonalServiceDate2['status'];
                     if($currentStatusPersonalServiceDate2 == "unsuccessful") {
                      array_push($failureArrayPersonalServiceDate2,"1");
                    }
                  }
                  $countFailuresPersonalServiceDate2 = count($failureArrayPersonalServiceDate1);
                  if($countFailuresPersonalServiceDate2 >= 1){
                     echo "<td>System Failure</td>";
                  }else{
                    echo "<td>Operational</td>";
                   }
                }
              ?>
               <td>2022-02-03 09:37:24</td>
            </tr>
            <tr>
                <td>MyTriathlon Terms</td>
                <?php
                  if($numGetStatusPersonalServiceDate2 >= 1) {
                     while($statusRowPersonalServiceDate2 = mysqli_fetch_assoc($getStatusOutletDate1))
                     {
                      $currentStatusPersonalServiceDate2 = $statusRowPersonalServiceDate2['status'];
                       if($currentStatusPersonalServiceDate2 == "unsuccessful") {
                        array_push($failureArrayPersonalServiceDate2,"1");
                      }
                    }
                    $countFailuresPersonalServiceDate2 = count($failureArrayPersonalServiceDate2);
                    if($countFailuresPersonalServiceDate2 >= 1){
                       echo "<td>System Failure</td>";
                    }else{
                      echo "<td>Operational</td>";
                     }
                  }
                ?>
                 <td>2022-02-03 09:37:24</td>
              </tr>
              <tr>
                  <td>MyTriathlon Overseas Delivery</td>
                  <?php
                    if($numGetStatusPersonalServiceDate2 >= 1) {
                       while($statusRowPersonalServiceDate2 = mysqli_fetch_assoc($getStatusOutletDate1))
                       {
                        $currentStatusPersonalServiceDate2 = $statusRowPersonalServiceDate2['status'];
                         if($currentStatusPersonalServiceDate2 == "unsuccessful") {
                          array_push($failureArrayPersonalServiceDate2,"1");
                        }
                      }
                      $countFailuresPersonalServiceDate2 = count($failureArrayPersonalServiceDate2);
                      if($countFailuresPersonalServiceDate2 >= 1){
                         echo "<td>System Failure</td>";
                      }else{
                        echo "<td>Operational</td>";
                       }
                    }
                  ?>
                   <td>2022-02-03 09:37:24</td>
                </tr>
                <tr>
                    <td>MyTriathlon Personal Service</td>
                    <?php
                      if($numGetStatusPersonalServiceDate2 >= 1) {
                         while($statusRowPersonalServiceDate2 = mysqli_fetch_assoc($getStatusOutletDate2))
                         {
                          $currentStatusPersonalServiceDate2 = $statusRowPersonalServiceDate2['status'];
                           if($currentStatusPersonalServiceDate2 == "unsuccessful") {
                            array_push($failureArrayPersonalServiceDate2,"1");
                          }
                        }
                        $countFailuresPersonalServiceDate2 = count($failureArrayPersonalServiceDate1);
                        if($countFailuresPersonalServiceDate2 >= 1){
                           echo "<td>System Failure</td>";
                        }else{
                          echo "<td>Operational</td>";
                         }
                      }
                    ?>
                     <td>2022-02-03 09:37:24</td>
                  </tr>
    </table> 
<!--Chart to show history of tests-->
<div class="chart">
  <canvas id="myChart"">
    <script>
      var xValues = ["Feb 02","Feb 03","Feb 04","Feb 05","Feb 06",];
      var barColors = ["green"];

      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: [<?php
                    if($numGetStatusFeb02 >= 1) {
                      while($statusRowFeb02 = mysqli_fetch_assoc($getStatusFeb02))
                      {
                        $currentStatusFeb02 = $statusRowFeb02['status'];
                          if($currentStatusFeb02 == "unsuccessful") {
                           array_push($failureArrayFeb02,"1");
                        }
                       }
                       $countFailuresFeb02 = count($failureArrayFeb02);
                        if($countFailuresFeb02 >= 1){
                          echo 0;
                        }else{
                          echo 5;
                        }
                       }            
              ?>]
          }]
        },
        options: {
          legend: {display: false},
          responsive:true,
          maintainAspectRatio: false,
          scales: {
            yAxes: [{ticks: {min: 1, max:5}}],
          }
        }
      });
</script>
</canvas>
  </div>
</section>
</div>
</body>
</html>
