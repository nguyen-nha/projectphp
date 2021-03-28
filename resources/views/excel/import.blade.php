<!DOCTYPE html>
<html>
<head>
    <title>Thú cưng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Thú cưng
        </div>
        <div class="card-body">
            <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
         
        <input type="file" name="file" accept=".xlsx"><br>
       <input type="submit" value="Import Excel" name="import_csv" class="btn btn-warning">
        </form>
       

        </div>
    </div>
</div>
   
</body>
</html>