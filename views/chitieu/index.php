<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    a:hover {
        color: #2980b9;
    }
</style>

<h1 style="text-align: center;">DANH SÁCH CHI TIÊU</h1>

<a href="index.php?action=create">Them moi</a>
<table border="1">
    <tr>
        <th>DanhMucChiTieu</th>
        <th>NgayChiTieu</th>
        <th>SoTien</th>
        <th>GhiChu</th>
        <th>Hanh dong</th>
    </tr>
    <!-- Bat dau lap -->
    <?php
    $totalExpense = 0; // Bien luu tong chi tieu
    foreach ($items as $r) :
        $totalExpense += $r['SoTien']; // Cong them gia tri chi tieu vao tong
    ?>
        <tr>
            <td><?php echo $r['DanhMucChiTieu']; ?> </td>
            <td><?php echo $r['NgayChiTieu']; ?> </td>
            <td><?php echo $r['SoTien']; ?> </td>
            <td><?php echo $r['GhiChu']; ?> </td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                <a onclick="return confirm('Are you sure?');" href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <!-- Ket thuc vong lap -->
    <tr>
        <td colspan="4" align="right">Tong chi tieu:</td>
        <td><?php echo $totalExpense; ?></td>
    </tr>
</table>