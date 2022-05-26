<?php 
    include './control.php';
	$get_data = new Data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post">
                    <div class="card bg-dark text-white">
                        <div class="card-header d-flex align-center justify-content-between">
                            <h4 class="">Add new</h4>
                        </div>
                        <div class="card-body">
                            <!-- <form method="POST" enctype="multipart/form-data"> -->
                                <div class="row mb-1">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" name="title" placeholder="input title">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" name="author" placeholder="input name author">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="form-group col">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="form-group col">
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            name="Scontent"
                                            rows="5"
                                        >Short content</textarea>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="form-group col">
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            name="Lcontent"
                                            rows="5"
                                        >Long content</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="addnew">Add new</button>
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($_POST['addnew'])) {
                        $title = $_POST['title'];
                        $author = $_POST['author'];
                        $date = $_POST['date'];
                        $Scontent = $_POST['Scontent'];
                        $Lcontent = $_POST['Lcontent'];
                        $data = $get_data->addnew($title, $author, $date, $Scontent, $Lcontent);
                        if($data) {
                            echo '<div class="alert alert-success">Add new success</div>';
                        } else {
                            echo '<div class="alert alert-danger">Add new fail</div>';
                        }
                    }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>