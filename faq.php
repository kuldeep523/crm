<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif
        }
        .body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        }
        .container1
        {
            margin: 0px 30px;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .container1 h1
        {
            color: red;
        }
        .container1 .features_tab
        {
            position: relative;
            background: white;
            padding: 0 20px 20px;
            box-shadow: 0 5px 15px gray;
            border-radius: 5px;
            overflow: hidden;
        }
        .container1 .features_tab input
        {
            appearance: none;
        }
        .container1 .features_tab label
        {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .container1 .features_tab label::after
        {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 2em;
            color: gray;
            transition: transform 1s;
        }
        .container1 .features_tab:hover label::after
        {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 2em;
            color: black;
            transition: transform 1s;
        }
        .container1 .features_tab input:checked ~ label::after
        {
            transform: rotate(135deg);
        }
        .container1 .features_tab label h2
        {
            width: 50px;
            height: 50px;
            background-color: aqua;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            border-radius: 5px;
            margin-right: 10px;
        }
        .container1 .features_tab label h3
        {
            position: relative;
            font-weight: 400;
            color: red;
            z-index: 10;
        }
        .container1 .features_tab .features_content
        {
            max-height: 0px;
            transition: 1s;
            overflow: hidden;
        }
        .container1 .features_tab input:checked ~ .features_content
        {
            max-height: 100vh;
        }
    </style>
</head>
<body style="background-color: aliceblue;" >
    <div class="container1">
        <h1>Features</h1>
        <div class="features_tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
            <h2>01</h2>
            <h3>Order Management</h3>
            </label>
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
        <div class="features_tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
            <h2>02</h2>
            <h3>Order Management</h3>
            </label>
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
        <div class="features_tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
            <h2>03</h2>
            <h3>Order Management</h3>
            </label>
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif
        }
        .body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        }
        .container1
        {
            margin: 0px 30px;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .container1 h1
        {
            color: red;
        }
        .container1 .features_tab
        {
            position: relative;
            background: white;
            padding: 0 20px 20px;
            box-shadow: 0 5px 15px gray;
            border-radius: 5px;
            overflow: hidden;
        }
        .container1 .features_tab input
        {
            appearance: none;
        }
        .container1 .features_tab label
        {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        /* .container1 .features_tab label::after
        {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 2em;
            color: gray;
            transition: transform 1s;
        } */
        .container1 .features_tab:hover label::after
        {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 2em;
            color: black;
            transition: transform 1s;
        }
        .container1 .features_tab input:checked ~ label::after
        {
            transform: rotate(135deg);
        }
        .container1 .features_tab label h2
        {
            width: 50px;
            height: 50px;
            background-color: aqua;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            border-radius: 5px;
            margin-right: 10px;
        }
        .container1 .features_tab label h3
        {
            position: relative;
            font-weight: 400;
            color: red;
            z-index: 10;
        }
        .container1 .features_tab .features_content
        {
            max-height: 0px;
            transition: 1s;
            overflow: hidden;
        }
        .container1 .features_tab input:checked ~ .features_content
        {
            max-height: 100vh;
        }
        .container1 .features_tab input:checked ~ .btn_click
        {
            display: none;
        }
    </style>
</head>
<body style="background-color: aliceblue;" >
    <div class="container1">
        <h1>Features</h1>
        <div class="features_tab">
          
            <input type="radio" name="acc" id="acc1">
            <label for="acc1" class="btn_click">
                <!-- <a href="">Click Here</a> -->
                <p>View More</p>
            </label>
           
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
        <div class="features_tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
            <h2>02</h2>
            <h3>Order Management</h3>
            </label>
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
        <div class="features_tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
            <h2>03</h2>
            <h3>Order Management</h3>
            </label>
            <div class="features_content">
                <p>
                The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.
                The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM
                Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer
                </p>
            </div>
        </div>
    </div>
</body>
</html>