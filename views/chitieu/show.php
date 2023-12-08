
<h1 style="text-align: center;">XEM CHI TIẾT</h1>


<table border="1">
    <tr>
        <td>MAHANG</td>
        <td><?= $row['DanhMucChiTieu'];?></td>
    </tr>
    <tr>
        <td>TENHANG</td>
        <td><?= $row['NgayChiTieu'];?></td>
    </tr>
    <tr>
        <td>MACONGTY</td>
        <td><?= $row['SoTien'];?></td>
    </tr>
    <tr>
        <td>MALOAIHANG</td>
        <td><?= $row['GhiChu'];?></td>
    </tr>
    <td> <button onclick="location.href='index.php'" class="btn btn-outline-secondary">Quay Lại</button>
</table>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    button {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>
