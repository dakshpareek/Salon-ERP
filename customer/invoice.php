<?php include('../database/connection.php');
$id=$_GET['id'];
$d=$_GET['d'];
$sql2 = "SELECT * from active where id=".$id;
$result2 = mysqli_query($conn, $sql2);
$name="";
$num="";
$th="";
$dt="";
$gen="";
while($row2 = mysqli_fetch_assoc($result2)) 
{
        $name=$row2['ename'];
        $num=$row2['phone'];
        $th=$row2['therapy'];
        $dt=$row2['dt'];
        $gen=$row2['gender'];
}

$ser=explode(",", $th);

#$sdetail=array();
#$sprice=array();
$sql11 = "SELECT * from services";
$result11 = mysqli_query($conn, $sql11);
while($row11 = mysqli_fetch_assoc($result11)) {
        $dm0=$row11['price'];
        $dm1=$row11['service_name'];
        $sdetail[$row11['id']]=$dm1;
        $sprice[$row11['id']]=$dm0;
        #array_push($sdetail, $dm1);
        #$array_push($sprice, $dm0);
     }

#print_r($sprice[$sprice]);
#print_r($ser);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                             <a href="../index.php"> <img  src="logo.png" style="width:100%; max-width:300px;"></a>
                            </td>
                            
                            <td>
                                Invoice #: <?php echo $id; ?><br>
                                Created: <?php echo $dt; ?><br>
                             
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                G-3, 4, Anirudh Appt<br>
                                 Mahaveer Ngr, Tonk Rd, Durgapura<br>
                                Jaipur
                            </td>
                            
                            <td>
								<b>To</b></br>
                                <?php echo $name; ?><br>
                                <?php echo $num; ?><br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    ID
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash
                </td>
                
                <td>
                    <?php echo $id; ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Service
                </td>
                
                <td>
                    Price
                </td>
            </tr>
           
<?php 
        $sub=0;
         foreach($ser as $key)
             {
         ?>

            <tr class="item last">
                <td>
                    <?php echo $sdetail[$key];?>
                </td>
                
                <td>
                    <?php echo $sprice[$key];?>
                </td>
            </tr>


<?php 
$sub += $sprice[$key];
} 
$dd=($sub * $d)/100;
$fprice=$sub-$dd;
?>

            <tr class="total">
                <td></td>
                
                <td>
                   Sub Total: ₹ <?php echo $sub;?>
                </td>
				
            </tr>
            <tr class="total">
                <td></td>
                
                <td>
                   Discount: <?php echo $d;?> %
                </td>
				
            </tr>
            <tr class="total">
                <td></td>
                
                <td>
                   Total: ₹ <?php echo $fprice;?>
                </td>
				
            </tr>
			
        </table>
    </div>
<?php
if($num='')
{
$num=0;
}
$qq1="insert into records(ename,phone,therapy,price,discount,dt,gender) values ('".$name."','".$num."','".$th."','".$sub."','".$d."','".$dt."','".$gen."')";
#echo $qq1;
mysqli_query($conn, $qq1);
echo mysqli_error($conn);
$qq2="delete from active where id=".$id;
mysqli_query($conn, $qq2);
?>
</body>
</html>