<!--- Uwase Mwamikazi Hiba--->
<!-- REG no 25/33086-->
<!--UI/UX DESIGNER -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Musanze Digital Service Desk</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>

<div class="wrapper">

    <!-- FORM CARD -->
    <div class="card">
        <h2>Musanze Digital Service Desk</h2>

        <form id="serviceForm" method="POST" action="../public/index.php">

            <div class="form-group">
                <input type="text" id="client" name="client"
                       placeholder="Client name" required/>
            </div>

            <div class="form-group">
                <select id="service" name="service" required>
                    <option value="" disabled selected>Select service</option>
                    <option value="Event Ticket">Event Ticket</option>
                    <option value="Order">Order</option>
                    <option value="Booking">Booking</option>
            
                 
                </select>
            </div>

            <div class="form-group">
                <input type="number" id="quantity" name="quantity"
                       placeholder="Quantity" min="1" required/>
            </div>

            <div class="form-group">
                <input type="number" id="price" name="price"
                       placeholder="Unit price (RWF)" min="0" step="any" required/>
            </div>

            <!-- Live Total — Role 5 -->
            <div class="total-display" id="totalDisplay">Total: 0 RWF</div>

            <button type="submit" name="submit" class="btn-save">Save Record</button>

        </form>

        <!-- RESULT AREA -->
        <div class="result-area">
            <?php if (!empty($message)): ?>
                <p class="<?= $success ? 'msg-success' : 'msg-error' ?>">
                    <?= htmlspecialchars($message) ?>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <!-- RECORDS TABLE — Role 7 -->
    <div class="table-wrapper">
        <table >
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Service</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($records)): ?>
                    <?php foreach ($records as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['client']) ?></td>
                        <td><?= htmlspecialchars($row['service']) ?></td>
                        <td><?= number_format($row['total'], 0) ?> RWF</td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4" class="empty">No records yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<script src="../assets/js/app.js"></script>
</body>
</html>
