<!DOCTYPE html>
<html>
  <head>
    <title>Be a Creditor</title>
    <style>
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Be a Debtor</h1>
      <div class="creditor-sign-up-form-area">
        <form class="creditor-sign-up-form" action="registerDebtor.php" method="post" enctype="multipart/form-data">
          <label for="proof-of-residence">Proof of Residence<br><small>(Water Bill, Electric Bill)</small></label>
          <input type="file" id="proof-of-residence" name="proof-of-residence">
          <label for="proof-of-income">Proof of Income<br><small>(Pay-slips and/or Pay-stubs)</small></label>
          <input type="file" id="proof-of-income" name="proof-of-income">
          <label for="proof-of-employment">Proof of Employment<br><small>(Letter of Employment)</small></label>
          <input type="file" id="proof-of-employment" name="proof-of-employment">
          <label for="proof-of-indebtedness">Proof of Indebtedness<br><small>(Credit History)</small></label>
          <input type="file" id="proof-of-indebtedness" name="proof-of-indebtedness">
          <input type="submit" value="Sign Up">
        </form>
      </div>
    </div>
  </body>
</html>
