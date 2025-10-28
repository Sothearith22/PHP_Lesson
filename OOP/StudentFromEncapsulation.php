<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center pt-5">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <h3 class="text-center mb-3 shadow-lg bg-light text-info">Student Data</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id" class="from-label">ID</label>
                    <input name="id" class="from-control w-100" placeholder="Enter ID">
                </div>
                <div class="mb-3">
                    <label for="name" class="from-label justify-content-center">Name</label>
                    <input type="text" name="name" class="from-control w-100" placeholder="Enter Name">
                </div>
                <div class="mb-3">
                    <label for="math" class="from-label justify-content-center">Math</label>
                    <input type="number" name="math" class="from-control w-100" placeholder="Enter Math">
                </div>
                <div class="mb-3">
                    <label for="khmer" class="from-label justify-content-center">Khmer</label>
                    <input type="number" name="khmer" class="from-control w-100" placeholder="Enter Khmer">
                </div>
                <div class="mb-3">
                    <label for="english" class="from-label justify-content-center">English</label>
                    <input type="number" name="english" class="from-control w-100" placeholder="Enter English">
                </div>
                <div class="w-100 pt-2">
                    <button type="submit" name="submit" class="btn w-100 btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Table -->
    <table class="table w-100 border-2 mt-5 mx-auto text-center shadow-lg p-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Khmer</th>
                <th>English</th>
                <th>Math</th>
                <th>Average</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $math = $_POST['math'];
            $khmer = $_POST['khmer'];
            $english = $_POST['english'];

            include "EncapsulationStudent.php";

            $Student = new Student();
            $Student->SetInput($id, $name, $math, $khmer, $english);
            echo "<tr>";
            echo "<td>" . $Student->getid() . "</td>";
            echo "<td>" . $Student->getName() . "</td>";
            echo "<td>" . $Student->getMath() . "</td>";
            echo "<td>" . $Student->getKhmer() . "</td>";
            echo "<td>" . $Student->getEnglish() . "</td>";
            echo "<td>" . $Student->GetTotal() . "</td>";
            echo "</tr>";

        }

        ?>
        </tbody>
    </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>