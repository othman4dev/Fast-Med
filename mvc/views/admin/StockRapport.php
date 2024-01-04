<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 20px auto;
            max-width: 600px;
        }

        .invoice-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .invoice-logo {
            max-width: 100px;
            height: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }

        tfoot {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .invoice-footer {
            background: linear-gradient(to right, #007bff, #6c757d);
            color: #ffffff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="invoice-container">
        <div class="invoice-header">
            <h2>Medicament Stock Invoice</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Medicament Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
              $i=1;
              $total=0;
              $totalStock=0;
              foreach($medicament as $medicaments):
              ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$medicaments['name']?></td>
                    <td>$ <?=$medicaments['price']?></td>
                    <td><?=$medicaments['quantity']?></td>
                    <td>$ <?php echo $totalMed= $medicaments['quantity']*$medicaments['price']?></td>
                </tr>
              <?php
              $totalStock+=$medicaments['quantity'];
              $total+=$totalMed;
              $i++;
              endforeach;
              ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" style="text-align: right;">Total:</th>
                    <td><?=$totalStock?> Medicament</td>
                    <td>$<?=$total?></td>
                </tr>
            </tfoot>
        </table>

        <div class="invoice-footer">
            <p>&copy; 2024 Medicament Stock</p>
        </div>
    </div>

</body>

</html>
<?php
$_SESSION['rapportVent']=ob_get_clean();
?>

