
<?php require 'parts/header.php'?>
<h5> </h5>
<div class="formNhapThongTinSv">
    <form action="#" method="post">
        <h3>Nhập thông tin sinh viên</h3>
        <input name="masinhvien" type="text" required placeholder="Mã sinh viên">

        <input name="hoten" type="text" required placeholder="Họ tên">

        <input name="namsinh" type="text" required placeholder="Năm sinh">

        <input name="quequan" type="text" required placeholder="Quê quán">

        <input name="sodienthoai" type="text" required placeholder="Số diện thoại">

        <button name="btn_submit">LƯU</button>
    </form>
</div>

<div class="container">
    <h1>Quản Lí Thông Tin Sinh Viên</h1>
    <table border="">
        <thead>
        <tr>
            <td>STT</td>
            <td>Mã SV</td>
            <td>Họ tên</td>
            <td>Năm sinh</td>
            <td>Tuổi</td>
            <td>Số điện thoại</td>
            <td>Quê quán</td>
            <td colspan="2">Edit</td>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<?php require 'parts/footer.php'?>
