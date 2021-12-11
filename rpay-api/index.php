<html>
  <head>
    <style type="text/css">
      @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800";
      .payUForm{
        background: #a9d7d7;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 2px 3px 6px #878787;}
      table tr td{font-size: 15px;font-family:'poppins',sans-serif;}
      table tr td input{height: 35px;width:300px;padding:7px 15px;border: none;border-radius: 7px;margin-bottom:7px;margin-right:10px;}
      .btn-success{background:#1da1b7;border-radius:50px;width:180px;color: #fff;font-size: 17px;font-family:'poppins',sans-serif;line-height: 1;}

    </style>

  </head>
  <body onload="submitPayuForm()" style="width:800px;margin:80px auto;">
    <h2 style="color: #3d5656;font-family:'poppins',sans-serif;text-align:center;font-size: 64px;margin-bottom: 0;">RazorPay Form</h2>

    <form action="pay.php" method="post" class="payUForm">
      <table>
        <tr>
          <td>Price: </td>
          <td><input type="text" name="price" /></td>
        </tr>
        <tr>
          <td>Name: </td>
          <td><input type="text" name="name" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input type="email" name="email"/></td>
        </tr>
        <tr>
          <td>Phone: </td>
          <td><input type="tel" maxlength="10" name="phone" /></td>
        </tr>
        <tr>
          <td>Adress: </td>
          <td colspan="3"><input type="text" name="address" ></td>
        </tr>

        <tr>
            <td colspan="4"><input class="btn btn-success" type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>