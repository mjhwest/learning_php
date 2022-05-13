<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th, table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th, tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Check #</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
    <?php if(! empty($transactions)): ?>
    <?php foreach($transactions as $transaction): ?>
        <tr>
            //need to update $transaction from array indexes to correct keys
            <td> <?= $transaction['date'] ?></td> //everything is presented in an array so 0 = Date
            <td> <?= $transaction['checkNumber'] ?></td> // 1 = check
            <td> <?= $transaction['description'] ?></td> // 2 = description
            <td> <?= $transaction['amount'] ?></td> // 3 = amount
        </tr>
    <?php endforeach ?>
    <?php endif ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="3">Total Income:</th>
        <td><!-- YOUR CODE --></td>
    </tr>
    <tr>
        <th colspan="3">Total Expense:</th>
        <td><!-- YOUR CODE --></td>
    </tr>
    <tr>
        <th colspan="3">Net Total:</th>
        <td><!-- YOUR CODE --></td>
    </tr>
    </tfoot>
</table>
</body>
</html>