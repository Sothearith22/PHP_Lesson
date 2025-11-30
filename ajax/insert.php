<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Form Product</title>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow-lg rounded-4">
                    <div class="card-body p-4">

                        <h3 class="text-center mb-4">FORM PRODUCT</h3>

                        <!-- PRODUCT FORM -->
                        <form id="form" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter Product Name..."
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Qty</label>
                                <input type="number" id="qty" class="form-control" placeholder="Enter Qty..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" id="price" class="form-control" placeholder="Enter Price..."
                                    required>
                            </div>

                            <button type="submit" id="submit" class="btn btn-primary w-100">Submit</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <script>
    $(document).ready(function(){
    $("#form").submit(function(e){
        e.preventDefault();

        // new object
        let formdata = new FormData();

        formdata.append("pro_name", $("#name").val());
        formdata.append("pro_qty", $("#qty").val());
        formdata.append("pro_price", $("#price").val());

        $.ajax({
            url: "insertData.php",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
        
            success: function(respond){
                console.log(respond);
                if(respond == "insert success"){
                    alert("insert to db success");
                    // redirect
                    window.location.href = "index.php";
                }
            },

            error:function(){
                alert("fail to add or ajax error");
            }
        });

    });
});
</script>


</body>

</html>