<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <div class="container cart-page" style="width: 60%;">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/meat2.png" alt="meat">
                        <div>
                            <h6>Wagyu Meat</h6>
                            <p>Price: Rp 200.000</p>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp 200.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/meat2.png" alt="meat">
                        <div>
                            <h5>Wagyu Meat</h5>
                            <p>Price: Rp 200.000</p>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp 200.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/meat2.png" alt="meat">
                        <div>
                            <h5>Wagyu Meat</h5>
                            <p>Price: Rp 200.000</p>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp 200.000</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td style="width: 80%;">Subtotal</td>
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td><h4>Total</h4></td>
                    
                    <td>Rp 400.000</td>
                </tr>
            </table>
        </div>
        <button>Checkout</button>
    </div>
    
</body>
</html>