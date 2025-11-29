<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP AJAX</title>
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
                <tbody id="body"></tbody>
            </table>
        </div>
    </div>

</div>

<!-- Edit Form (Hidden) -->
<div class="container mt-4" id="formEdit" style="display:none;">
    <div class="card">
        <div class="card-header bg-primary text-white">Update Product</div>
        <div class="card-body">
            <form id="formdata">
                <input type="hidden" id="id">

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" id="qty" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" id="price" class="form-control">
                </div>

                <button class="btn btn-success px-4">Update</button>
            </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>

$(document).ready(function(){

    // =================== SHOW DATA ===================
    function showData(){
        $.ajax({
            url:"select.php",
            type:"POST",
            dataType:"json",
            success:function(res){
                let result = "";
                $(res).each(function(i,row){
                    result += `
                        <tr>
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.qty}</td>
                            <td>${row.price}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="removeProduct(${row.id})">Delete</button>
                                <button class="btn btn-success btn-sm" onclick="edit(${row.id})">Edit</button>
                            </td>
                        </tr>
                    `;
                })
                $("#body").html(result);
            }
        });
    }

    window.showData = showData;
    showData(); // load on start

});


// ================= DELETE PRODUCT ==================
function removeProduct(id){
    if(confirm("Are You Sure to remove product?")){
        $.ajax({
            url:"delete.php",
            type:"POST",
            data:{key:id},
            success:function(res){
                alert(res);
                showData();
            }
        });
    }
}


// ================= LOAD DATA FOR EDIT ===============
function edit(id){
    $.ajax({
        url:"edit.php",
        type:"POST",
        data:{id:id},
        dataType:"json",
        success:function(res){
            $("#id").val(res.id);
            $("#name").val(res.name);
            $("#qty").val(res.qty);
            $("#price").val(res.price);
            $("#formEdit").show();
        }
    });
}


// ================= UPDATE PRODUCT ===================
$(document).on("submit","#formdata",function(e){
    e.preventDefault();

    let formData = new FormData();
    formData.append("id", $("#id").val());
    formData.append("pro_name", $("#name").val());
    formData.append("pro_qty", $("#qty").val());
    formData.append("pro_price", $("#price").val());

    $.ajax({
        url:"update.php",
        type:"POST",
        data:formData,
        processData:false,
        contentType:false,
        success:function(response){
            alert(response);
            $("#formEdit").hide();
            showData();
        }
    });
});

</script>
</body>
</html>
