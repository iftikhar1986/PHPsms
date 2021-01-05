<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managment System</title>
</head>
<body>

<h1 align="center">Wellcome To Student Managment System</h1>
<h5 align="center"><a href="login.php">
<button type="button" class="btn btn-danger" >Admin Login</button>

</a></h5>




<form action="index.php" method="post">
    
<table align="center" class="table col-sm-6"  style="background-color:#EAEAEA;">


<thead>
    <tr>
      
      <th>Student Information</th>
     
      
    </tr>
  </thead>

    <tbody >
 
    
        
        <tr>
            <td scope="row">Standerd</td>
            <td>
            
                <select class="custom-select" name="std">
                    <option selected>Select one</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                </select>
            
            </select> 
            </td>
            
        </tr>
        <tr>
            <td scope="row">Enter Roll Number</td>
            <td> <input type="text" name="rollno" required> </td>
            
        </tr>

        <tr>
            <td scope="row">Submit</td>
            <td> <input type="submit" name="submit" value="Show Details"> </td>
            
        </tr>
    </tbody>
</table> 

</form>


    
</body>
</html>