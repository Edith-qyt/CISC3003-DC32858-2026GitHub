<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'data.inc.php';
include 'functions.inc.php';
$subtotal = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);
$shipping = $subtotal > 10000 ? 100 : 200;
$grandTotal = $subtotal + $shipping;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CISC3003 Practice 09</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="app-container">
		<?php include 'left.inc.php'; ?>
		<div class="main-content">
			<?php include 'header.php';?>
			<div class="content-header">
				<h4>Order Summaries</h4>
				<p>Examine your customer orders</p>
			</div>
			<div class="cards-container">
				<div class="card card-orders">
					<div class="card-header">
						<h4>My Orders</h4>
					</div>
					<div class="card-content">
						<ul class="order-list">
							<?php
                            $orderCount = count($orderList);
                                for ($i = 0; $i < $orderCount; $i ++) {
                                echo '<li class="order-item"><a href="#">Order ' . $orderList[$i] . '</a></li>';
                                }
                            ?>
						</ul>
					</div>
				</div>
				<div class="card card-order-detail">
					<div class="card-header">
						<h4>Selected Order: #520</h4>
					</div>
					<div class="card-content">
						<div class="customer-info">Customer: Mount Royal University</div>
						<table class="order-table">
							<thead>
								<tr>
									<th>Cover</th>
									<th>Title</th>
									<th>Quantity</th>
									<th>Price</th>
									<th class="text-right">Amount</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                    outputOrderRow($file1, $title1, $quantity1, $price1);
                                    outputOrderRow($file2, $title2, $quantity2, $price2);
                                    outputOrderRow($file3, $title3, $quantity3, $price3);
                                    outputOrderRow($file4, $title4, $quantity4, $price4);
                                ?>
								<tr class="totals">
									<td colspan="4" class="text-right">Subtotal</td>
									<td class="text-right">$<?php echo number_format($subtotal, 2); ?></td>
								</tr>
								<tr class="totals">
									<td colspan="4" class="text-right">Shipping</td>
									<td class="text-right">$<?php echo number_format($shipping, 2); ?></td>
								</tr>
								<tr class="grandtotals">
									<td colspan="4" class="text-right">Grand Total</td>
									<td class="text-right">$<?php echo number_format($grandTotal, 2); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>