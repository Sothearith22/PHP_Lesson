<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-light">

<div class="container mt-5">

    <!-- Add Button -->
    <div class="d-flex justify-content-end mb-3">
        <a href="insert.php" class="btn btn-success px-4">+ Add</a>
    </div>

    <!-- Table Card -->
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white">
            <h4 class="m-0">Product List</h4>
        </div>

        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-secondary">
                    <tr>    
                        <th>ID</th>
                        <th>NAME</th>
                        <th>QTY</th>
                        <th>PRICE</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="body">
                
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
    // select data to show
    function showData(){
        $.ajax({
            url:"select.php",
            type:"POST",
            dataType:"json",
            success:function(res){
                console.log(res);
                let result="";
                $(res).each(function(index,row){
                    result += `
                        <tr>
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.qty}</td>
                            <td>${row.price}</td>
                            <td><a class="btn btn-danger" onClick="remove products (${row.id})">delete</a></td>
                        </tr>
                    `;
                })
                // document.getElementById("body").innerHTML=result;
                $("#body").html(result);
            },
            error:function(err){
                console.log(err);
            }
        })
    }
    // call function show data
    showData();
})
function removeProduct(id){
    console.log(id);
    if(confirm("Are You Sure to remove product")){
        $.ajax({
            url : "delete.php",
            type:"POST",
            //value
            data:{key:id},
            success:function(res){
                console.log(res);
                if(res == "remove successfully"){
                    alert("remove success");
                    showData();

                }
            },
            error:function(err){
                console.log(err);
            }
            
        })
    }
}

</script>
</body>
</html>
