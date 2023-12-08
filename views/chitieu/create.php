<style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    a {
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: #fff;
        background-color: #e74c3c;
        margin-right: 10px;
    }

    a:hover {
        background-color: #c0392b;
    }
</style>

    <h1 style="text-align: center;">THÊM MỚI</h1>

<form action="index.php?action=store&controller=chitieu" method="post">
    <label for="DanhMucChiTieu">DanhMucChiTieu:</label>
    <input type="text" id="DanhMucChiTieu" name="DanhMucChiTieu" required><br>

    <label for="NgayChiTieu">NgayChiTieu:</label>
    <input type="date" id="NgayChiTieu" name="NgayChiTieu" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" required><br>

    <label for="SoTien">SoTien:</label>
    <input type="number" id="SoTien" name="SoTien" required><br>

    <label for="GhiChu">GhiChu:</label>
    <input type="text" id="GhiChu" name="GhiChu"><br>

    <input type="submit" value="Them">
    <a href="index.php">Huỷ</a>
</form>