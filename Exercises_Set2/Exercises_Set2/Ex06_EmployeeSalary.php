<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex06_EmployeeSalary.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        $employees = [
            ["name" => "Rithy",  "position" => "Manager",   "salary" => 1200],
            ["name" => "Maly",   "position" => "Designer",  "salary" => 800],
            ["name" => "Bopha",  "position" => "Developer", "salary" => 1000],
            ["name" => "Sambath","position" => "Cashier",   "salary" => 500],
            ["name" => "Chenda", "position" => "Developer", "salary" => 950]
        ];
        $totalSalary = 0;
        $top = $employees[0];
    ?>
    <div class="container mt-4">
    <table class="table table-hover">
        <thead class="table-dark"><tr><th>Name</th><th>Position</th><th>Salary</th></tr></thead>
        <tbody>
        <?php foreach ($employees as $e) {
            $totalSalary += $e["salary"];
            if ($e["salary"] > $top["salary"]) {
                $top = $e;
            } ?>
            <tr><td><?= $e["name"]; ?></td><td><?= $e["position"]; ?></td><td>$<?= $e["salary"]; ?></td></tr>
        <?php } ?>
        </tbody>
    </table>
    <p>Highest paid: <strong><?= $top["name"]; ?></strong> ($<?= $top["salary"]; ?>)</p>
    <p>Total salary: <strong>$<?= $totalSalary; ?></strong></p>
    </div>
    <?php
    ?>
</body>
</html>
