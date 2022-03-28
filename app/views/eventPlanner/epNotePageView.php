<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <?php linkCSS("navigation"); ?>
  <?php linkCSS("footer");?>
  <?php linkCSS("eventPlanner/epNotePage");?>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $id=$_SESSION['userId'];
  $bookingId=$data['bookingId'];
  $planningId=$data['planning_id'];?>
</head>

    <body>
        <header>
            <?php linkPhp("navigation") ?>
        </header>
            <div class="table-container">
                <table id="customers">
                    <tr>
                        <th>Service Type</th>
                        <th>Recomemanded Service Name</th>
                        <th>Customer Prefer Status</th>
                        <th>Advanced Payment Amount</th>
                        <th>Full Payment Amount</th>
                        <th>Paymnet Status</th>
                        <th>Other Suggesions</th>
                    </tr>
                    <?php if(isset($data['noteDetails'])){foreach ($data['noteDetails'] as $row){ ?>
                    <tr>
                        <td><?php echo $row['service_type'];?></td>
                        <td><?php echo $row['recom_service_name'] ?></td>
                        <td class="status" style="color:black;"><?php echo $row['customer_prefer_status'] ?></td>
                        <td><?php echo $row['adv_pay_amount'] ?></td>
                        <td><?php echo $row['full_pay_amount'] ?></td>
                        <td><?php echo $row['payment_status'] ?></td>
                        <td><?php echo $row['other_suggest'] ?></td>
                    </tr>        <?php }} ?>
            </table>
            </div>
            <div class="add-btn"><button id="add-btn-btn"><a href="<?php echo BASEURL . '/epNoteNewAdd/index/'.$bookingId.'/0'.'/'.$planningId.''; ?>">+add</a></button></div>
            <?php linkJS("eventPlanner/epNotePage"); ?>
    </body>
</html>