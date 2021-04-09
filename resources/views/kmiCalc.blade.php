<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMI skaiciuokle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>



<body>

<div class="container col-6">
    <div class="row">
        <div class="col-sm-6">
        <h1 class = "text-center">Kuno mases indekso skaiciuokle</h1>

        <form method = "post">
        <!-- @csrf naudojamas post methoduose -->
            @csrf
            <div class="form-group">
                <label>Jusu svoris kilogramais</label>
                <input type="number" step="0.01" reguired name = "number1" class="form-control">
            </div>
            <div class="form-group">
                <label>Jusu ugis metrais</label>
                <input type="number" step="0.01" reguired name = "number2" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit"  value = "Skaiciuoti" class = "btn btn-primary">Skaiciuoti</button>
            </div>
        
        </form>
        </div>
    </div>
    
    </div>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>