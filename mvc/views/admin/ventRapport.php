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
            <h2>Medicament Vents Invoice</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Medicament Name</th>
                    <th>Date Vents</th>
                    <th>Type de Vent</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php
              $i=1;
              $total=0;
              foreach($vents as $vent):
              ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$vent['username']?></td>
                    <td><?=$vent['name']?></td>
                    <td><?=$vent['date']?></td>
                    <td><?=$vent['type']?></td>
                    <td>$<?=$vent['price']?></td>
                </tr>
              <?php
              $total+=$vent['price'];
              $i++;
              endforeach;
              ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5" style="text-align: right;">Total:</th>
                    <td>$<?=$total?></td>
                </tr>
            </tfoot>
        </table>

        <div class="invoice-footer">
            <p>&copy; 2024 Medicament Ventss</p>
        </div>
    </div>

</body>

</html>
<?php
$_SESSION['rapportVent']=ob_get_clean();
?>

