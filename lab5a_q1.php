<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        // Declare variables for your details
        $name = "Ong Yi Fung";
        $matricNumber = "AI220274";
        $course = "BIC21203 Web Development";
        $yearOfStudy = "2023/2024";
        $address = "Persiaran Tun Dr. Ismail, 86400 Parit Raja, Johor";
    ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year of Study</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $matricNumber; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $yearOfStudy; ?></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
