<?php include('../database/connection.php');
$id=$_GET['id'];
$d=$_GET['d'];
$sql2 = "SELECT * from active where id=".$id;
$result2 = mysqli_query($conn, $sql2);
$name="";
$num="";
$th="";
$dt="";
while($row2 = mysqli_fetch_assoc($result2)) 
{
        $name=$row2['ename'];
        $num=$row2['phone'];
        $th=$row2['therapy'];
        $dt=$row2['dt'];
}

$ser=explode(",", $th);

$sdetail=array();
$sprice=array();
$sql11 = "SELECT * from services";
$result11 = mysqli_query($conn, $sql11);
while($row11 = mysqli_fetch_assoc($result11)) {
        $dm0=$row11['price'];
        $dm1=$row11['service_name'];
        array_push($sdetail, $dm1);
        array_push($sprice, $dm0);
     }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-57x57.75760eaa.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-60x60.9a0e0fe8.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-72x72.3ad0cc3c.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-76x76.6ae2b99d.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-114x114.3691b390.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-120x120.fc72522a.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-144x144.5bf944a6.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-152x152.9756786f.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://d1m57r24ku159u.cloudfront.net/static/apple-icon-180x180.91590aef.png"/>
    <link rel="icon" type="image/png" sizes="192x192"  href="https://d1m57r24ku159u.cloudfront.net/static/android-icon-192x192.09699fe6.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="https://d1m57r24ku159u.cloudfront.net/static/favicon-32x32.38618aed.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="https://d1m57r24ku159u.cloudfront.net/static/favicon-96x96.77d710dc.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1m57r24ku159u.cloudfront.net/static/favicon-16x16.180d3e7a.png"/>
    <link rel="manifest" href="/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="https://d1m57r24ku159u.cloudfront.net/static/ms-icon-144x144.5bf944a6.png"/>
    <meta name="theme-color" content="#ffffff"/>

        <link rel="alternate" media="print" type="application/pdf" title="Click Download Invoice to print" href="/print.pdf" />
    
    <link href="https://d1m57r24ku159u.cloudfront.net/static/vendor.583690e0.css" type="text/css" rel="stylesheet" />
    <link href="https://d1m57r24ku159u.cloudfront.net/static/app.572c0c88.css" type="text/css" rel="stylesheet" />

</head>
<body>

            <div class="papers">
                <div class="invoice">
                    <div class="two-col clearfix">
                        <div class="title">
                            <input type="text" class="form-control input-label" name="header" value="HAIR CREATION" />
                            <div class="subtitle">
                                <div class="input-group">
                                    <span class="input-group-addon">ID</span>
                                    <input class="form-control" type="text" value="<?php echo $id; ?>" name="number" />
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="contact from">
                                <div class="field">
                                    <input type="text" class="input-label form-control" name="from_title" value="From" />
                                </div>
                                <div class="value">
                                    <b><input type="text" class="input-label form-control" name="to_title" value="Receipt" /></b>
                                </div>
                            </div>

                            <div class="contact to">
                                <div class="field">
                                    <input type="text" class="input-label form-control" name="to_title" value="Bill To" />
                                </div>
                                <div class="value">
                                   <b> <input type="text" class="input-label form-control"  value=<?php echo $name; ?> /></b>
								<b>	<input type="text" class="input-label form-control"  value=<?php echo $num; ?> /> </b>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group addon-input">
                                <input class="input-label form-control" type="text" name="date_title" value="Date" />
                                <div class="input-group-addon">
                                    <input id="invoiceDate" class="form-control datepicker" type="text" name="date" value=<?php echo $dt; ?> />
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="items-holder">
                        <div class="items-table-header">
                            <div class="amount">
                                <div class="field bordered">
                                    <input type="text" class="input-label form-control" value="Amount" name="amount_header" />
                                </div>
                            </div>
                            <div class="unit_cost">
                                <div class="field bordered">
                                    <input type="text" class="input-label form-control" value="" name="unit_cost_header" />
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="field bordered">
                                    <input type="text" class="input-label form-control" value="" name="quantity_header" />
                                </div>
                            </div>
                            <div class="name">
                                <div class="field bordered">
                                    <input type="text" class="input-label form-control" value="Service" name="item_header" />
                                </div>
                            </div>
                        </div>
                        <div class="items-table">
                            <?php 
                            $sub=0;
                            foreach($ser as $key)
                            {
                            ?>
                                                        <div class="item-row">
                                <div class="main-row">
                                    <div class="delete"></div>
                                    <div class="amount value">
                                        <span class="currency-symbol">₹</span><?php echo $sprice[$key-1];?>
                                    </div>


                                    <div class="name">
                            <textarea class="item-calc form-control" rows=1 placeholder="<?php echo $sdetail[$key-1];?>" ></textarea>
		
                                    </div>
                                </div>
                            </div>
<?php 
$sub += $sprice[$key-1];
} 
$dd=($sub * $d)/100;
$fprice=$sub-$dd;
?>





                                                       

                       

                                                    </div>
                    </div>

                    <div class="two-col clearfix">
                        <div class="col col-offset">
                            <div class="input-group addon-input">
                                <input class="input-label form-control" type="text" name="subtotal_title" value="Subtotal" />
                                <div class="input-group-addon value"><span class="currency-symbol">₹</span><?php echo $sub;?></div>
                            </div>

                            <div class="input-group addon-input">
                                <input class="input-label form-control" type="text" name="discounts_title" value="Discounts" />
                                <div class="input-group-addon">
                                    <input type="text" class="form-control" value="<?php echo $d;?> %" name="discounts" />
                                </div>
                            </div>





                            <div class="input-group addon-input">
                                <input class="input-label form-control" type="text" name="total_title" value="Total" />
                                <div class="input-group-addon value"><span class="currency-symbol">₹</span><?php echo $fprice;?></div>
                            </div>

                        </div>
                    </div>
<?php
$qq1="insert into records(ename,phone,therapy,price,discount,dt) values ('".$name."','".$num."','".$th."','".$fprice."','".$d."','".$dt."')";
mysqli_query($conn, $qq1);

$qq2="delete from active where id=".$id;
mysqli_query($conn, $qq2);
?>

                </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>
