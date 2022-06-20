<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        } -->
        <link rel="stylesheet" href="questinire.css">
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <!-- <p>Please fill this form and submit to add employee record to the database.</p> -->
                    <form action="resultdietscreen.php" method="post">
        <div class="form">
        <div class="input_field">
            <label >
                Name
            </label>
            <input id="name" name="name" type="text" class="input">
        </div>
        <div class="input_field">
            <label >
              Age
            </label>
            <input id="age" name="age" type="text" class="input">
        </div>
        <div class="input_field">
            <label >
                Sex
            </label>
            <div class="custom_selection">
                <select name="sex" id="language" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

    <div class="boxing">
        <div class="wet">
            <label for="">Weight</label>
        </div>
    
   
    <input id="weight" type="number" name="weight" placeholder="kg" class="input1" required>
    <div class="het">
        <label for="">Height</label>
    </div>
  
    <input id="height" name="height" type="number" placeholder=" cm" class="input2" required>
                   
        </div>
























       
   
    
        <div class="input_field">
            <label >
                Life Style
            </label>
            <div class="custom_selection">
                <select>
            <option value="">Select</option>
                    <option value="Sedentary">Sedentary</option>
                    <option value="Moderate">Moderate</option>
                    <option value="Active">Active</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label >
                Any Food Allergies
            </label>
            <div class="custom_selection">
                <select>
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label >
              Fluid Intake/Day
            </label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label >
                Medical Condition
            </label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label >
              Other Details
            </label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
    </div>

    <ul class="list">
    <input type="submit" class="btn btn-primary" name="submit" value="Submit"></li>
        <li class="li">
             <a href="login.html">
                <input class="btn" type="button" name="" value="Back"><br>
            </a>
        </li>
    </ul>

      </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>