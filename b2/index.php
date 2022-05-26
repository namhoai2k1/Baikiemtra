<!-- <?php 
    include './control.php';
	$get_data = new Data();
?> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h1>them khach hang moi</h1>
                    <form method="post">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Ten khach hang</td>
                                    <td>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            placeholder="input name author"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gioi tinh</td>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="radio1" name="sex" value="nam" checked>
                                            <label class="form-check-label" for="radio1">nam</label>
                                        </div>
                                        <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="sex" value="nu">
                                        <label class="form-check-label" for="radio2"> nu</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dia chi</td>
                                    <td><input
                                        type="text"
                                        class="form-control"
                                        name="address"
                                    /></td>
                                </tr>
                                <tr>
                                    <td>Dien thoai</td>
                                    <td><input
                                        type="text"
                                        class="form-control"
                                        name="phone"
                                    /></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                    /></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- them button-->
                        <button type="submit" class="btn btn-primary" name="submit">
                            Them
                        </button>
                    </form>
                    <!-- <?php 
                    if(isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $sex = $_POST['sex'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $data = $get_data->addnew($name, $sex, $address, $phone, $email);
                        if($data) {
                            echo '<div class="alert alert-success">Add new success</div>';
                        } else {
                            echo '<div class="alert alert-danger">Add new fail</div>';
                        }
                    }
                ?> -->
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </body>
</html>
