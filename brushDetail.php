<?php
include 'includes/header.php';
$a = '';
if (isset($_GET['type']))
{
    $a = $_GET['type'];
}
include __DIR__ . '/database/database.php';
if (isset($products->{$a}) && count((array)$products->{$a}) <> 0)
{
    $product = $products->{$a};
}
else{
    $product = $products->{'twistedwirecup'};
}

?>

<body>
    <div class="container d-flex flex-wrap">
        <div class="col-md-5 col-12">
            <div id="brushimg" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#brushimg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#brushimg" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#brushimg" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/Product/NSK inox WEB.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Product/NSK inox WEB.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Product/NSK inox WEB.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#brushimg" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#brushimg" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col">
            <div class="container d-flex flex-column justify-content-center align-items-center h-100 mx-md-3 my-1 my-sm-3">
                <h1><?php echo $product->{'titleEN'} ?></h1>
                <h5><?php echo $product->{'titleVN'} ?></h5>
            </div>
        </div>
        <div class="col-12">
            <div class="container bg-dark bg-gradient text-white rounded-3 p-3 mt-5">
                <h5>Description</h5>
                <hr class="container" style="height: 2px; color:white">
                <p class="text-white m-0"><?php echo $product->{'descriptionTitle'} ?></p>
                <ul>
                    <?php foreach ($product->{'description'} as $key) : ?>
                        <li><?php echo $key; ?></li>
                    <?php endforeach; ?>
                </ul>
                <hr class="container" style="height: 2px; color:white">
                <p class="text-white m-0"> DIMENSION DETAIL</p>
                <div class="table-responsive text-white my-2 rounded-3">
                    <table class="table table-secondary table-striped ">
                        <thead>
                            <tr>
                                <?php for ($i = 0; $i < count($product->{'tablehead'}); $i++)
                                {
                                    if ($i == 0)
                                    {
                                        echo "<th scope='col w-100'>{$product->{'tablehead'}[$i]}</th>";
                                    }
                                    else
                                    {
                                        echo "<th scope='col '>{$product->{'tablehead'}[$i]}</th>";
                                    }
                                } ?>
                                <!-- <th scope="col w-100">Item NO</th>
                                <th scope="col">Diameter</th>
                                <th scope="col">Nut Size</th>
                                <th scope="col">Wire length</th>
                                <th scope="col">Wire size</th>
                                <th scope="col">Packing <br> (Pcs/carton)</th>
                                <th scope="col">RPM</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product->{'items'} as $item) : ?>
                                <tr>
                                    <th scope="row" class="text-nowrap"><?php echo $item[0] ?></th>
                                    <td><?php echo $item[1] ?></td>
                                    <td><?php echo $item[2] ?></td>
                                    <td><?php echo $item[3] ?></td>
                                    <td><?php echo $item[4] ?></td>
                                    <td><?php echo $item[5] ?></td>
                                    <td><?php echo $item[6] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- <tr>
                                <th scope="row" class="text-nowrap"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-nowrap">99575-B</th>
                                <td>75mm</td>
                                <td>M10*1.5</td>
                                <td>27</td>
                                <td>0.35</td>
                                <td>100</td>
                                <td>12500</td>
                            </tr>

                            <tr>
                                <th scope="row" class="text-nowrap">99575-B</th>
                                <td>75mm</td>
                                <td>M10*1.5</td>
                                <td>27</td>
                                <td>0.35</td>
                                <td>100</td>
                                <td>12500</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


</body>
<?php
include 'includes/footer.php' ?>