<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
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
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                        <label >
                            Sex
                        </label>
                            <select name="sex" class="form-control"  required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>        
                        </div>

                        <div class="form-group">
                               <label for="">Weight</label>
                             <input type="text"  name="weight" placeholder="kg" class="form-control" required>
                          </div>

                          <div class="form-group">
                               <label for="">height</label>
                             <input type="text" name="height" placeholder="cm" class="form-control" required>
                          </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>