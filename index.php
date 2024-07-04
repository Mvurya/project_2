<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
  <?php include_once("templates/nav.php"); ?>
    <div class="banner">
      <h1>ALL SPECS</h1>
    </div>

    <div class="content">
    <p>Welcome to all spects, where we bring clarity to your world through our premium eyewear solutions. <br>
       At all spects, we believe that seeing is not just about vision; it’s about experiencing life in vivid detail. <br>
        Our mission is to provide you with stylish and innovative spectacles that not only enhance your vision but <br>
        also reflect your unique style. With a commitment to quality, comfort, and cutting-edge design, we invite you <br>
         to explore our collection and discover the perfect frames for your individuality. See the world differently with all spects.

    </p>
    <ul> 
        <li>black</li>
        <li>red</li>
        <li>pink</li>
        <li>purple</li>
    </ul>

    <ol type="a">
        <li>hassan</li>
        <li>wanini</li>
        <li>issa</li>
        <li>ummi</li>
    </ol>

    <ol type="I" starts="4">
        <li>black</li>
        <li>red</li>
        <li>pink</li>
        <li>purple</li>
    </ol>

    <table border="1px" style="border: 1px solid
    #373737; width: 50%; border-collapse: collapse ;">
      <tr>
        <td>Item quantity</td>
        <td>Quantity</td>
        <td>Unit price</td>
        <td>Total price</td>
      </tr>
      <tr>
        <td>Book</td>
        <td>2</td>
        <td>Ksh 300</td>
        <td>Ksh 400</td>
      </tr>
      <tr>
        <td>pen</td>
        <td>4</td>
        <td>Ksh 20</td>
        <td>Ksh 700</td>
      </tr>
      <tr>
        <td>Book</td>
        <td>2</td>
        <td>Ksh 300</td>
        <td>Ksh 400</td>
      </tr>
      <tr>
        <td>pen</td>
        <td>4</td>
        <td>Ksh 20</td>
        <td>Ksh 700</td>
      </tr>
      <tr>
        <th colspan="3">Total</th>
        <th>Ksh 700</th>
      </tr>
      </table>
    </div>

    <?php include_once("templates/sidebar.php"); ?>

</body>
</html>