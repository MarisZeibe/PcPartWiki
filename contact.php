<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PC Part Wiki</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$name = $surname = $email = $select = $option = $msg = $agree = '';
$nameValid = $surnameValid = $emailValid = $selectValid = $optionValid = $msgValid = $agreeValid = '';

if(isset($_POST['submit'])) {
    $name = "{$_POST['name']}";
    $surname = "{$_POST['surname']}";
    $email = "{$_POST['email']}";
    $select = "{$_POST['select']}";
    $option = "{$_POST['option']}";
    $msg = "{$_POST['msg']}";

    $nameValid = !empty($name) && ctype_alpha($name) ? 'is-valid' : 'is-invalid';

    $surnameValid = !empty($surname) && ctype_alpha($surname) ? 'is-valid' : 'is-invalid';

    $emailValid = !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ? 'is-valid' : 'is-invalid';

    $selectValid = 'is-valid';

    $optionValid = 'is-valid';

    $msgValid = !empty($msg) ? 'is-valid' : 'is-invalid';

    $agree = !empty($_POST['agree']);
    $agreeValid = $agree ? '' : 'is-invalid';

    /*echo "<p>$name</p>";
    echo "<p>$surname</p>";
    echo "<p>$email</p>";
    echo "<p>$select</p>";
    echo "<p>$option</p>";
    echo "<p>$msg</p>";
    echo $agree ? "<p>true</p>" : "<p>false</p>";*/
}
?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-12 col-lg-10 main">
        <div class="col-md-12 nb">
            <nav class="navbar navbar-expand-sm bg-light fixed-top">
                <a class="navbar-brand" href="./">
                    <img src="img/logo.png" alt="logo">
                    PC Part Wiki
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-success" href="./">HOME</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="btn btn-success" href="gallery">GALLERY</a>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Pictures</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="gallery/cpu">CPU</a></li>
                                        <li><a class="dropdown-item" href="gallery/ram">RAM</a></li>
                                        <li><a class="dropdown-item" href="gallery/other">Other</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="gallery/video">Videos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="login">LOGIN</a>
                    </li>
                </ul>
                <div class="dropdown phonemenu">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        Menu
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index">HOME</a>
                        <a class="dropdown-item" href="gallery">GALLERY</a>
                        <a class="dropdown-item" href="contact">CONTACT</a>
                        <a class="dropdown-item" href="about">ABOUT</a>
                        <a class="dropdown-item" href="login">LOGIN</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2 left">
                <div id="accordion" class="sticky-top">
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" href="#collapseOne">PC Parts</div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <p><a href="./#CPU">CPU</a></p>
                                <p><a href="./#RAM">RAM</a></p>
                                <p><a href="./#GPU">GPU</a></p>
                                <p><a href="./#MB">Motherboard</a></p>
                                <p><a href="./#PSU">PSU</a></p>
                                <p><a href="">Storage Device (W.I.P.)</a></p>
                                <p><a href="">PC Case (W.I.P.)</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" href="#collapseTwo">2</div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                content 2
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" href="#collapseThree">3</div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                content 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 center">
                <div class="row post full-height">
                    <div class="p-4">
                        <a>Contact</a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In fringilla lectus sit amet quam placerat ullamcorper.
                            In vehicula felis vitae rhoncus finibus. Fusce malesuada mollis velit,
                            a tincidunt dui consequat id. Etiam non euismod nunc.
                            Praesent posuere euismod enim, eu efficitur dui mollis sit amet.
                            Vestibulum interdum dui in nisi bibendum, id cursus massa aliquam.
                            Nulla et arcu non mi viverra tempor. Quisque placerat nulla non metus fringilla vehicula.
                            In sed eleifend ante, vitae rutrum ipsum. Vestibulum facilisis, eros ac euismod placerat,
                            felis lectus iaculis libero, sit amet vestibulum justo neque a lorem.
                        </p>
                        <form method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control <?php echo $nameValid;?>" id="name" placeholder="First Name" name="name" value="<?php echo $name;?>">
                                    <input type="text" class="form-control <?php echo $surnameValid;?>" id="surname" placeholder="Last Name" name="surname" value="<?php echo $surname;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="text" class="form-control <?php echo $emailValid;?>" id="email" placeholder="email@example.com" name="email" value="<?php echo $email;?>">
                            </div>
                            <select name="select" class="custom-select mb-3 <?php echo $selectValid;?>" value="<?php echo $select;?>">
                                <option <?php echo $select == 'select1' ? 'selected' : '' ?> value="select1">Select1</option>
                                <option <?php echo $select == 'select2' ? 'selected' : '' ?> value="select2">Select2</option>
                                <option <?php echo $select == 'select3' ? 'selected' : '' ?> value="select3">Select3</option>
                                <option <?php echo $select == 'select4' ? 'selected' : '' ?> value="select4">Select4</option>
                            </select>
                            <div class="custom-control custom-radio custom-control mb-1">
                                <input type="radio" class="custom-control-input <?php echo $optionValid;?>" id="option1" name="option" value="option1" checked>
                                <label class="custom-control-label" for="option1">Option 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control mb-3">
                                <input type="radio" class="custom-control-input <?php echo $optionValid;?>" id="option2" name="option" value="option2" <?php echo $option == 'option2' ? 'checked' : '' ?>>
                                <label class="custom-control-label" for="option2">Option 2</label>
                            </div>
                            <label for="msg">Message:</label>
                            <textarea class="form-control mb-3 <?php echo $msgValid;?>" rows="5" id="msg" name="msg" placeholder="Write your message here" ><?php echo $msg;?></textarea>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <div class="custom-control custom-switch pl-3">
                                        <input type="checkbox" class="custom-control-input <?php echo $agreeValid;?>" id="agree" name="agree">
                                        <label class="custom-control-label" for="agree">I agree on something</label>
                                    </div>
                                </label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 right">
                <div class="jumbotron sticky-top">
                    YOUR<br>
                    AD<br>
                    HERE<br>
                </div>
            </div>
        </div>
        <div class="col-md-12 footer">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            In fringilla lectus sit amet quam placerat ullamcorper.
            In vehicula felis vitae rhoncus finibus. Fusce malesuada mollis velit,
            a tincidunt dui consequat id. Etiam non euismod nunc.
            Praesent posuere euismod enim, eu efficitur dui mollis sit amet.
            Vestibulum interdum dui in nisi bibendum, id cursus massa aliquam.
            Nulla et arcu non mi viverra tempor. Quisque placerat nulla non metus fringilla vehicula.
            In sed eleifend ante, vitae rutrum ipsum. Vestibulum facilisis, eros ac euismod placerat,
            felis lectus iaculis libero, sit amet vestibulum justo neque a lorem.
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>