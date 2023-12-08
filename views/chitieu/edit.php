
<h1 style="text-align: center;">CHỈNH SỬA</h1>

<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    TENHANG :<input type="text" name="DanhMucChiTieu" value="<?= $row['DanhMucChiTieu'];?>"> <br>
    MACONGTY :<input type="text" name="NgayChiTieu" value="<?= $row['NgayChiTieu'];?>"> <br>
    MALOAIHANG :<input type="text" name="SoTien" value="<?= $row['SoTien'];?>"> <br>
    SOLUONG :<input type="text" name="GhiChu" value="<?= $row['GhiChu'];?>"> <br>
    <input type="submit" value="Cap nhat">
</form>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
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
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }
</style>
