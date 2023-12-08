<?php
// Ket noi voi database
class chitieu
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        $sql = "SELECT * FROM `chitieu`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }
    public static function store($data)
    {
        global $conn;
        $DanhMucChiTieu  = $data['DanhMucChiTieu'];
        $NgayChiTieu = $data['NgayChiTieu'];
        $SoTien = $data['SoTien'];
        $GhiChu = $data['GhiChu'];
     


        $sql = "INSERT INTO `chitieu` (`DanhMucChiTieu`, `NgayChiTieu`, `SoTien`, `GhiChu`)
        VALUES ('$DanhMucChiTieu', '$NgayChiTieu', '$SoTien', '$GhiChu')";
        //Thuc hien truy van
        $conn->exec($sql);
        echo '<div class="success-message">';
        echo 'Thêm thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/M3/baithim3/index.php";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `chitieu` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $DanhMucChiTieu  = $data['DanhMucChiTieu'];
        $NgayChiTieu = $data['NgayChiTieu'];
        $SoTien = $data['SoTien'];
        $GhiChu = $data['GhiChu'];


        $sql = "UPDATE `chitieu` 
        SET `DanhMucChiTieu` = '$DanhMucChiTieu',
         `NgayChiTieu` = '$NgayChiTieu', 
         `SoTien` = '$SoTien',
         `GhiChu` = '$GhiChu'
          WHERE id = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        echo '<div class="success-message">';
        echo 'Sửa thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/M3/baithim3/index.php";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }
      //Xoa du lieu
      public static function delete($id){
        global $conn;
        $sql = "DELETE FROM chitieu WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        // In thông báo và chuyển hướng sau khi thêm
        echo '<div class="success-message">';
        echo 'Xoá thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/M3/baithim3/index.php";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }
    }
?>
    <style>
    .success-message {
        background-color: #dff0d8;
        color: #3c763d;
        padding: 10px;
        border: 1px solid #d6e9c6;
        border-radius: 4px;
        margin-bottom: 10px;
    }
</style>