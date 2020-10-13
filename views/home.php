
<?php require 'parts/header.php'?>
<div class="formNhapThongTinSv">
    <form action="?act=student/addStudent" method="post">
        <h3>Nhập thông tin sinh viên</h3>
        <input name="code" type="text" required placeholder="Mã sinh viên">

        <input name="name" type="text" required placeholder="Họ tên">

        <input name="year_of_birth" type="text" required placeholder="Năm sinh">

        <input name="phone" type="text" required placeholder="Quê quán">

        <input name="address" type="text" required placeholder="Số diện thoại">

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
            <td>Số điện thoại</td>
            <td>Quê quán</td>
            <td colspan="2">Edit</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($students as $key => $student) { ?>
            <tr>
                <td><?php echo ($key + 1); ?></td>
                <td><?php echo $student['code']?></td>
                <td><?php echo $student['name']?></td>
                <td><?php echo $student['year_of_birth']?></td>
                <td><?php echo $student['phone']?></td>
                <td><?php echo $student['address']?></td>
                <td><a href="?act=student/update&code=<?php echo $student['code'] ?>">Edit</a></td>
                <td><a onclick="confirmDelete(event)" href="?act=student/delete&code=<?php echo $student['code'] ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(e) {
        e.preventDefault()
        if(confirm("Are you sure?")) {
            window.location = e.target.getAttribute('href')
        }
    }

</script>

<?php require 'parts/footer.php'?>
