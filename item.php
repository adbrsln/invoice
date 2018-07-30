<?php
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$pn = $_POST['pn'];
$street = $_POST['street'];
$apt = $_POST['apt'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal = $_POST['postal'];
$country = $_POST['country'];
arr[] = {$companyName,$email,}
$_SESSION['companyDetails'] = 
?>
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
        .selected-column{
		      background-color: rgba(187, 187, 63, 0.4);
		  }
		  .unselected-column{
		      background-color: rgba(0,0,0,.5);
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
      <div class="row">
          <div class="col-6">
            <div class="card bg-light" >
                
                <div class="card-body">
                    <h5 class="card-title">Invoice Details</h5>
                    <p class="card-text"><strong><?=$companyName?></strong></br><?=$email?></br><?=$pn?></br><?=$street?>, <?=$apt?>, <?=$city?>, <?=$postal?></br><?=$country?></p>
                </div>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
                <label for="nama"><strong>Invoice Date</strong></label>
                <input type="date" class="form-control" id="nama" name= "nama"   value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">Invoice Due Date</label>
                <input type="date" class="form-control" id="nama" name= "nama"  value = "" required>
            </div>
            <div class="form-group">
                <label for="nama"><strong>Partial/Deposit</strong></label>
                <input type="text" class="form-control" id="nama" name= "nama"   value = "" required>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
                <label for="nama">Invoice #</label>
                <input type="text" class="form-control" id="nama" name= "nama"  placeholder="001" value = "" required>
            </div>
            <div class="form-group">
                <label for="nama">PO #</label>
                <input type="text" class="form-control" id="nama" name= "nama"  placeholder="001" value = "" required>
            </div>
            
            
          </div>
      </div>
      
      <form method="post" action="item.php">
                <input type="hidden" name="companyName" value="">
                <table class="table table-bordered table1">
					<tr>
						<th>
							No
						</th>
						<th>
							Item
						</th>
						<th>
							Descriptions
						</th>
						<th>
							Unit Cost 
							
						</th>
						<th>
							Quantity
						</th>
						<th>
							Line total
						</th>
					</tr>
					
					<?php if(isset($_POST['act']))
					{
					    $act = $_POST['act'];
					    $pre = $_POST['pre'];
					    $dur = $_POST['dur'];
					    $cost = $_POST['cost'];
					    $curr_cost = $_POST['current_cost'];
					    $act_size = count($act);
					    
					    for($x = 0; $x < $act_size; $x++){
			        ?>
			        <tr id="clone_<?php echo $x+1?>">
						<td class="no">
							<?php echo $x+1 ?>
						</td>
						<td>
							<input type="text" name="act[]" class="form-control act" required value="<?php echo $act[$x] ?>">
						</td>
						<td>
							<input type="text" name="dur[]" class="form-control dur number" placeholder="" required value="<?php echo $dur[$x] ?>">
						</td>
						<td>
							<input type="text" name="pre[]" class="form-control pre number" placeholder="" required value="<?php echo $pre[$x] ?>">
						</td>
						<td>
							<input type="text" name="cost[]" class="form-control cost number" placeholder="" required value="<?php echo $cost[$x] ?>">
						</td>
						<td>
							<input type="text" name="current_cost[]" class="form-control curr_cost number" placeholder="" value="<?php echo $curr_cost[$x] ?>">
						</td>
					</tr>
			        <?php
					    }
					    
					}else{
					    
					
				    ?>
					
					<tr id="clone_1">
						<td class="no">
							1
						</td>
						<td>
							<input type="text" name="act[]" class="form-control act" required>
						</td>
						<td>
							<input type="text" name="dur[]" class="form-control dur number" placeholder="" required>
						</td>
						<td>
							<input type="text" name="pre[]" class="form-control pre number" placeholder="" required>
						</td>
						<td>
							<input type="text" name="cost[]" class="form-control cost number" placeholder="" required>
						</td>
						<td>
							<input type="text" name="current_cost[]" class="form-control curr_cost number" placeholder="">
						</td>
					</tr>
					
					<?php 
					}
					?>
				</table>
				<div class="float-left">
    				<input type="button"  id="add_activity" class="btn btn-success " value="Add Item">
    				<input type="button" id="remove_activity" class="btn btn-secondary" value="Remove Item">
				</div>
				<div class="float-right">
				    <button type="reset" class="btn btn-warning">Reset</button>
    				<button type="submit" class="btn btn-primary">Generate My Invoice</button>
				</div>
			</form>
        

    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
</body>
</html>
<script>
    $(document).ready(function(){
        $("#remove_activity").hide();

        var count = 1;

        <?php 
            if(isset($_POST['act'])){
                $act_size = count($act);
        ?>
            count = <?php echo $act_size?>
        <?php    	    
            } 
        ?>
        
        $("#add_activity").on("click", function(){
            $("#remove_activity").show();
            
            count++;
            $("#clone_1").clone()
                .appendTo(".table1")
                .attr("id", "clone_" +  count)

            $("#clone_"+count+" .no").html(count);

            $("#clone_"+count+" .act") 			//activity
    //			.attr("name", "act_"+count)
                .val("");

            $("#clone_"+count+" .dur") 			//duration
    //			.attr("name", "dur_"+count)
                .val("");
            
            $("#clone_"+count+" .pre") 			//Predecessor
    //			.attr("name", "pre_"+count)
                .val("");

            $("#clone_"+count+" .cost") 			//cost
    //			.attr("name", "cost_"+count)
                .val("");

            $("#clone_"+count+" .curr_cost") 			//curr_cost
    //		.attr("name", "cost_"+count)
            .val("");
            
        });

        $("#remove_activity").on("click", function(){
            $("#clone_"+count).remove();

            count--;

            if(count == 1){
                $("#remove_activity").hide();
            }
        });
        
        var regExp = new RegExp('[a-zA-Z]');

        $(".number").on('keydown keyup', function(e) {

            if (e.which < 48 || e.which > 57)
            {
                if(e.keyCode == 8){
                }else{
                    e.preventDefault();
                }
            }

        }); // End of 'keydown keyup' method.

    });
</script>