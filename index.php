<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Generator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <style>
        body {
        padding-top: 5rem;
        padding-bottom: 5rem;
        }
        .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
        }
    </style>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
        </ul>
        
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Invoice Generator</h1>
        <p class="lead">All you have to do is insert few details</p>
        
      </div>
      <form action="item.php" method="POST">
      <div class="row">
        <div class="col-6">
           
            <div class="form-group">
                <label for="nama">Company Name / Name</label>
                <input type="text" class="form-control" id="nama" name= "companyName"  placeholder="Company Name / Name" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">Email</label>
                <input type="text" class="form-control" id="email" name= "email"  placeholder="Email" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">Phone Number</label>
                <input type="text" class="form-control" id="pn" name= "pn"  placeholder="Phone Number" value = "" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="nama">Street</label>
                <input type="text" class="form-control" id="Street" name= "street"  placeholder="Street" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">Apt/Suite</label>
                <input type="text" class="form-control" id="Apt" name= "apt"  placeholder="Apt/Suite" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">City</label>
                <input type="text" class="form-control" id="City" name= "city"  placeholder="City" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">State / Province</label>
                <input type="text" class="form-control" id="State" name= "state"  placeholder="State / Province" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">Postal Code</label>
                <input type="text" class="form-control" id="Postal" name= "postal"  placeholder="Postal Code" value = "" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="Country" name= "country"  placeholder="Country" value = "" required>
            </div>
        </div>
        
      </div>
      
      <button type="submit" name="submit" class="btn btn-outline-primary float-right">Next: Insert Item <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </form>
        

    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
</body>
</html>