<?php
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studants Table</title>
    <style>
        table {
            border-collapse;
            width: 70%;
            margin: 20px auto;
        }
        th , td {
            border: 1px solid;
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: #f2f2f2;
        }
        tfoot td {
            font-weight: bold;
            background-color:#e6e6e6;
        }
    </style>
</head>
<body>
<!-- عنوان الصفحة -->
 <h2 style="text-align:center;" > Studants Information</h2>
 <table>
    <thead>
        <tr>
            <!--العناوين بالجدول-->
            <th>Student No</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student GPA</th>
        </tr>
    </thead>
    <tbody> 
        <!-- حنمرق على البيانات ونطبعها بالجدول-->
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student["stdNo"] ?></td>
                <td><?php echo $student["stdName"] ?></td>
                <td><?php echo $student["stdEmail"] ?></td>
                <td><?php echo $student["stdGAP"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <!-- الفوتر بحسب عدد الطلاب-->
        <tr>
            <td colspan="4"><?php echo "Total Studands: " . count($students); ?></td>
        </tr>
    </tfoot>
 </table>
    
</body>
</html>