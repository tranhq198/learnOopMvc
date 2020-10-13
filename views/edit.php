<?php require 'parts/header.php'?>
<div class="formNhapThongTinSv">
    <form action="?act=student/update" method="post">
        <h3>Nhập thông tin sinh viên</h3>
        <input name="code" type="text" value="<?php echo $student['code'] ?>" required placeholder="Mã sinh viên">

        <input name="name" type="text" value="<?php echo $student['name'] ?>" required placeholder="Họ tên">

        <input name="year_of_birth" value="<?php echo $student['year_of_birth'] ?>" type="text" required placeholder="Năm sinh">

        <input name="phone" type="text" value="<?php echo $student['phone'] ?>" required placeholder="Quê quán">

        <input name="address" type="text" value="<?php echo $student['address'] ?>" required placeholder="Số diện thoại">

        <button name="btn_submit">LƯU</button>
    </form>
</div>
<?php require 'parts/footer.php'?>
