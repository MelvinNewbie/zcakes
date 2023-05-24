<?php
    include_once "conn_db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" 
	content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cake Customization Form</title>
<style>

body {
            background-image: url("images/bgg.jpg");
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: flex;
            background-repeat: repeat;
            height: 100%;
        }
        .navbar-nav li a {
            color: black !important;
        }

    .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }

.step {
    display: none;
}

.summary {
    margin-top: 20px;
}

.progress-bar {
    transition: width 0.3s ease-in-out;
}

.options {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.options .form-check-input {
    display: none;
}

.next-btn,
.prev-btn {
    margin-top: 10px;
}

.image-size{
    width: 100px; 
    height: 100px;"
}
</style>

</head>
<?php
        include 'user_navbar_func.php';
        renderCustomNavbar();

        include("user_customize_func.php");
    ?>
<body>

    <div class="container">
        <form action="user_customize_insert.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3 border border-dark" style="background-color: pink;">
                        <div class="card-body">
                            <h1 class="card-title text-center">Cake Customization Form</h1>
                        </div>
                            <?php
                                $cat_details = getCategory(1, $conn); // Replace 1 with the desired product ID
                                if ($cat_details) {
                                    $cat_id = $cat_details['category_id'];
                                    echo "<input type='hidden' name='cat_id' value='$cat_id'>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="mt-4 progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progressBar">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">Progress</div>
                </div>
          
                <!-- Cake Shape -->

                <div class="card mt-3 border border-dark" style="background-color: pink;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Step 1: Select Cake Shape</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $shape = getShape(1, $conn);
                                        if ($shape) {
                                            $shape_id = $shape['shape_id'];
                                            $cake_shape = $shape['cake_shape'];
                                            $shape_photo = $shape['shape_photo'];
	                                        $shape_price = $shape['shape_price']; ?>
                                    <input class="form-check-input" type="radio" name="shape" id="<?php echo "shape$shape_id"; ?>" value="<?php echo $shape_id; ?>" onchange="updateProgressBar(25, 'shape')">
                                    <label class="form-check-label" for="<?php echo "shape$shape_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $shape_photo; ?>" alt="<?php echo $cake_shape; ?>">
                                        <div class="text-center"><?php echo $cake_shape; ?></div>

                                        <?php echo "<input type='hidden' name='shape_price' value='$shape_id'>"; ?>
                                        <?php echo "<input type='hidden' name='shape_id' value='$shape_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Shape not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $shape = getShape(2, $conn);
                                        if ($shape) {
                                            $shape_id = $shape['shape_id'];
                                            $cake_shape = $shape['cake_shape'];
                                            $shape_photo = $shape['shape_photo'];
	                                        $shape_price = $shape['shape_price']; ?>
                                    <input class="form-check-input" type="radio" name="shape" id="<?php echo "shape$shape_id"; ?>" value="<?php echo $shape_id; ?>" onchange="updateProgressBar(25, 'shape')">
                                    <label class="form-check-label" for="<?php echo "shape$shape_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $shape_photo; ?>" alt="<?php echo $cake_shape; ?>">
                                        <div class="text-center"><?php echo $cake_shape; ?></div>

                                        <?php echo "<input type='hidden' name='shape_price' value='$shape_id'>"; ?>
                                        <?php echo "<input type='hidden' name='shape_id' value='$shape_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Shape not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $shape = getShape(3, $conn);
                                        if ($shape) {
                                            $shape_id = $shape['shape_id'];
                                            $cake_shape = $shape['cake_shape'];
                                            $shape_photo = $shape['shape_photo'];
	                                        $shape_price = $shape['shape_price']; ?>
                                    <input class="form-check-input" type="radio" name="shape" id="<?php echo "shape$shape_id"; ?>" value="<?php echo $shape_id; ?>" onchange="updateProgressBar(25, 'shape')">
                                    <label class="form-check-label" for="<?php echo "shape$shape_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $shape_photo; ?>" alt="<?php echo $cake_shape; ?>">
                                        <div class="text-center"><?php echo $cake_shape; ?></div>

                                        <?php echo "<input type='hidden' name='shape_price' value='$shape_id'>"; ?>
                                        <?php echo "<input type='hidden' name='shape_id' value='$shape_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Shape not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $shape = getShape(4, $conn);
                                        if ($shape) {
                                            $shape_id = $shape['shape_id'];
                                            $cake_shape = $shape['cake_shape'];
                                            $shape_photo = $shape['shape_photo'];
	                                        $shape_price = $shape['shape_price']; ?>
                                    <input class="form-check-input" type="radio" name="shape" id="<?php echo "shape$shape_id"; ?>" value="<?php echo $shape_id; ?>" onchange="updateProgressBar(25, 'shape')">
                                    <label class="form-check-label" for="<?php echo "shape$shape_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $shape_photo; ?>" alt="<?php echo $cake_shape; ?>">
                                        <div class="text-center"><?php echo $cake_shape; ?></div>

                                        <?php echo "<input type='hidden' name='shape_price' value='$shape_id'>"; ?>
                                        <?php echo "<input type='hidden' name='shape_id' value='$shape_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Shape not found."; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cake Flavor -->

                <div class="card mt-3 border border-dark" style="background-color: pink;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Step 2: Select Cake Size</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $size = getSize(1, $conn); // Replace 1 with the desired size ID
                                        if ($size) {
                                            $size_id = $size['cake_size_id'];
                                            $cake_size = $size['cake_size'];
                                            $size_price = $size['size_price'];
                                        ?>
                                    <input class="form-check-input" type="radio" name="size" id="<?php echo "size$size_id"; ?>" value="<?php echo $size_id; ?>" onchange="updateProgressBar(25, 'size')">
                                    <label class="form-check-label" for="<?php echo "size$size_id"; ?>">
                                        <div class="text-center"><?php echo $cake_size; ?></div>

                                        <?php echo "<input type='hidden' name='size_price' value='$size_price'>"; ?>
                                        <?php echo "<input type='hidden' name='size_id' value='$size_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Size not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $size = getSize(2, $conn); // Replace 1 with the desired size ID
                                        if ($size) {
                                            $size_id = $size['cake_size_id'];
                                            $cake_size = $size['cake_size'];
                                            $size_price = $size['size_price'];
                                        ?>
                                    <input class="form-check-input" type="radio" name="size" id="<?php echo "size$size_id"; ?>" value="<?php echo $size_id; ?>" onchange="updateProgressBar(25, 'size')">
                                    <label class="form-check-label" for="<?php echo "size$size_id"; ?>">
                                        <div class="text-center"><?php echo $cake_size; ?></div>

                                        <?php echo "<input type='hidden' name='size_price' value='$size_price'>"; ?>
                                        <?php echo "<input type='hidden' name='size_id' value='$size_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Size not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $size = getSize(3, $conn); // Replace 1 with the desired size ID
                                        if ($size) {
                                            $size_id = $size['cake_size_id'];
                                            $cake_size = $size['cake_size'];
                                            $size_price = $size['size_price'];
                                        ?>
                                    <input class="form-check-input" type="radio" name="size" id="<?php echo "size$size_id"; ?>" value="<?php echo $size_id; ?>" onchange="updateProgressBar(25, 'size')">
                                    <label class="form-check-label" for="<?php echo "size$size_id"; ?>">
                                        <div class="text-center"><?php echo $cake_size; ?></div>

                                        <?php echo "<input type='hidden' name='size_price' value='$size_price'>"; ?>
                                        <?php echo "<input type='hidden' name='size_id' value='$size_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Size not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $size = getSize(4, $conn); // Replace 1 with the desired size ID
                                        if ($size) {
                                            $size_id = $size['cake_size_id'];
                                            $cake_size = $size['cake_size'];
                                            $size_price = $size['size_price'];
                                        ?>
                                    <input class="form-check-input" type="radio" name="size" id="<?php echo "size$size_id"; ?>" value="<?php echo $size_id; ?>" onchange="updateProgressBar(25, 'size')">
                                    <label class="form-check-label" for="<?php echo "size$size_id"; ?>">
                                        <div class="text-center"><?php echo $cake_size; ?></div>

                                        <?php echo "<input type='hidden' name='size_price' value='$size_price'>"; ?>
                                        <?php echo "<input type='hidden' name='size_id' value='$size_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Size not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $size = getSize(5, $conn); // Replace 1 with the desired size ID
                                        if ($size) {
                                            $size_id = $size['cake_size_id'];
                                            $cake_size = $size['cake_size'];
                                            $size_price = $size['size_price'];
                                        ?>
                                    <input class="form-check-input" type="radio" name="size" id="<?php echo "size$size_id"; ?>" value="<?php echo $size_id; ?>" onchange="updateProgressBar(25, 'size')">
                                    <label class="form-check-label" for="<?php echo "size$size_id"; ?>">
      
                                        <div class="text-center"><?php echo $cake_size; ?></div>

                                        <?php echo "<input type='hidden' name='size_price' value='$size_price'>"; ?>
                                        <?php echo "<input type='hidden' name='size_id' value='$size_id'>"; ?>

                                    </label>
                                    <?php 
                                    } else { echo "Size not found."; } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Cake Size -->

                <div class="card mt-3 border border-dark" style="background-color: pink;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Step 3: Select Cake Flavor</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $flavor = getFlavor(1, $conn); // Replace 1 with the desired flavor ID
                                        if ($flavor) {
                                            $flavor_id = $flavor['flavor_id'];
                                            $cake_flavor = $flavor['cake_flavor'];
                                            $flavor_img = $flavor['flavor_img'];
                                            $flavor_price = $flavor['flavor_price']; ?>
                                    <input class="form-check-input" type="radio" name="flavor" id="<?php echo "flavor$flavor_id"; ?>" value="<?php echo $flavor_id; ?>" onchange="updateProgressBar(25, 'flavor')">
                                    <label class="form-check-label" for="<?php echo "flavor$flavor_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $flavor_img; ?>" alt="<?php echo $flavor_img; ?>">
                                        <div class="text-center"><?php echo $cake_flavor; ?></div>

                                        <?php echo "<input type='hidden' name='flavor_price' value='$flavor_price'>"; ?>
                                        <?php echo "<input type='hidden' name='flavor_id' value='$flavor_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "Flavor not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $flavor = getFlavor(2, $conn); // Replace 1 with the desired flavor ID
                                        if ($flavor) {
                                            $flavor_id = $flavor['flavor_id'];
                                            $cake_flavor = $flavor['cake_flavor'];
                                            $flavor_img = $flavor['flavor_img'];
                                            $flavor_price = $flavor['flavor_price']; ?>
                                    <input class="form-check-input" type="radio" name="flavor" id="<?php echo "flavor$flavor_id"; ?>" value="<?php echo $flavor_id; ?>" onchange="updateProgressBar(25, 'flavor')">
                                    <label class="form-check-label" for="<?php echo "flavor$flavor_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $flavor_img; ?>" alt="<?php echo $flavor_img; ?>">
                                        <div class="text-center"><?php echo $cake_flavor; ?></div>

                                        <?php echo "<input type='hidden' name='flavor_price' value='$flavor_price'>"; ?>
                                        <?php echo "<input type='hidden' name='flavor_id' value='$flavor_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "Flavor not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $flavor = getFlavor(3, $conn); // Replace 1 with the desired flavor ID
                                        if ($flavor) {
                                            $flavor_id = $flavor['flavor_id'];
                                            $cake_flavor = $flavor['cake_flavor'];
                                            $flavor_img = $flavor['flavor_img'];
                                            $flavor_price = $flavor['flavor_price']; ?>
                                    <input class="form-check-input" type="radio" name="flavor" id="<?php echo "flavor$flavor_id"; ?>" value="<?php echo $flavor_id; ?>" onchange="updateProgressBar(25, 'flavor')">
                                    <label class="form-check-label" for="<?php echo "flavor$flavor_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $flavor_img; ?>" alt="<?php echo $flavor_img; ?>">
                                        <div class="text-center"><?php echo $cake_flavor; ?></div>

                                        <?php echo "<input type='hidden' name='flavor_price' value='$flavor_price'>"; ?>
                                        <?php echo "<input type='hidden' name='flavor_id' value='$flavor_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "Flavor not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $flavor = getFlavor(4, $conn); // Replace 1 with the desired flavor ID
                                        if ($flavor) {
                                            $flavor_id = $flavor['flavor_id'];
                                            $cake_flavor = $flavor['cake_flavor'];
                                            $flavor_img = $flavor['flavor_img'];
                                            $flavor_price = $flavor['flavor_price']; ?>
                                    <input class="form-check-input" type="radio" name="flavor" id="<?php echo "flavor$flavor_id"; ?>" value="<?php echo $flavor_id; ?>" onchange="updateProgressBar(25, 'flavor')">
                                    <label class="form-check-label" for="<?php echo "flavor$flavor_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $flavor_img; ?>" alt="<?php echo $flavor_img; ?>">
                                        <div class="text-center"><?php echo $cake_flavor; ?></div>

                                        <?php echo "<input type='hidden' name='flavor_price' value='$flavor_price'>"; ?>
                                        <?php echo "<input type='hidden' name='flavor_id' value='$flavor_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "Flavor not found."; } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Cake Frosting -->

                <div class="card mt-3 border border-dark" style="background-color: pink;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Step 4: Select Cake Frosting</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $frosting = getFrosting(1, $conn); // Replace 1 with the desired frosting ID
                                        if ($frosting) {
                                            $frosting_id = $frosting['frosting_id'];
                                            $cake_frosting = $frosting['cake_frosting'];
                                            $frosting_img = $frosting['frosting_img'];
                                            $frosting_price = $frosting['frosting_price']; ?>
                                    <input class="form-check-input" type="radio" name="frosting" id="<?php echo "frosting$frosting_id"; ?>" value="<?php echo $frosting_id; ?>" onchange="updateProgressBar(25, 'frosting')">
                                    <label class="form-check-label" for="<?php echo "frosting$frosting_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $frosting_img; ?>" alt="<?php echo $cake_frosting; ?>">
                                        <div class="text-center"><?php echo $cake_frosting; ?></div>

                                        <?php echo "<input type='hidden' name='frosting_price' value='$frosting_price'>"; ?>
                                        <?php echo "<input type='hidden' name='frosting_id' value='$frosting_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "frosting not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $frosting = getFrosting(2, $conn); // Replace 1 with the desired frosting ID
                                        if ($frosting) {
                                            $frosting_id = $frosting['frosting_id'];
                                            $cake_frosting = $frosting['cake_frosting'];
                                            $frosting_img = $frosting['frosting_img'];
                                            $frosting_price = $frosting['frosting_price']; ?>
                                    <input class="form-check-input" type="radio" name="frosting" id="<?php echo "frosting$frosting_id"; ?>" value="<?php echo $frosting_id; ?>" onchange="updateProgressBar(25, 'frosting')">
                                    <label class="form-check-label" for="<?php echo "frosting$frosting_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $frosting_img; ?>" alt="<?php echo $cake_frosting; ?>">
                                        <div class="text-center"><?php echo $cake_frosting; ?></div>

                                        <?php echo "<input type='hidden' name='frosting_price' value='$frosting_price'>"; ?>
                                        <?php echo "<input type='hidden' name='frosting_id' value='$frosting_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "frosting not found."; } ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-check">
                                    <?php
                                        $frosting = getFrosting(3, $conn); // Replace 1 with the desired frosting ID
                                        if ($frosting) {
                                            $frosting_id = $frosting['frosting_id'];
                                            $cake_frosting = $frosting['cake_frosting'];
                                            $frosting_img = $frosting['frosting_img'];
                                            $frosting_price = $frosting['frosting_price']; ?>
                                    <input class="form-check-input" type="radio" name="frosting" id="<?php echo "frosting$frosting_id"; ?>" value="<?php echo $frosting_id; ?>" onchange="updateProgressBar(25, 'frosting')">
                                    <label class="form-check-label" for="<?php echo "frosting$frosting_id"; ?>">
                                        <img class="image-size border border-dark" src="<?php echo $frosting_img; ?>" alt="<?php echo $cake_frosting; ?>">
                                        <div class="text-center"><?php echo $cake_frosting; ?></div>

                                        <?php echo "<input type='hidden' name='frosting_price' value='$frosting_price'>"; ?>
                                        <?php echo "<input type='hidden' name='frosting_id' value='$frosting_id'>"; ?>
                                    </label>
                                    <?php 
                                    } else { echo "frosting not found."; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col text-center">
        <button type="submit" class="btn btn-success mb-5 mt-3 btn-lg btn-block">CHECKOUT</button>
    </div>
</form>

</body>
    <script src="js/bootstrap.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <script>
  const selectedCards = {};

  function updateProgressBar(value, cardType) {
    if (!selectedCards[cardType]) {
      const progressBar = document.getElementById('progressBar');
      const currentWidth = parseInt(progressBar.getAttribute('aria-valuenow'));
      const newWidth = currentWidth + value;
      progressBar.setAttribute('aria-valuenow', newWidth);
      progressBar.style.width = newWidth + '%';

      selectedCards[cardType] = true;
    }
  }
</script>

</html>