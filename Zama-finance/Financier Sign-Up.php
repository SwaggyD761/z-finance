<!DOCTYPE html>
<html>
<head>
	<title>Be a Financier</title>
	<style>
		.container {
			margin: 0 auto;
			max-width: 800px;
			padding: 20px;
			text-align: center;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h1>Be a Financier</h1>
		
		<div class="financier-sign-up-form-area">
		  <form class="financier-sign-up-form" action="registerFinancier.php" method="post">
		    <div class="form-group">
		      <label for="financier-wallet-name">Financier Wallet Name:</label>
		      <input type="text" id="financier-wallet-name" name="financier-wallet-name" required>
		    </div>
		    <div class="form-group">
		      <label for="financier-brand-name">Financier Brand Name:</label>
		      <input type="text" id="financier-brand-name" name="financier-brand-name" required>
		    </div>
		    <div class="form-group">
    		  <label for="start-amount">Start Amount:</label>
		      <input type="range" id="start-amount-slider" name="start-amount-slider" min="100" max="9910" step="50" value="100">
		      <input type="text" id="start-amount-text" name="start-amount-text" class="slider-value" required>
		    </div>
		    <button type="submit">Submit</button>
		  </form>
		  
		</div>
		
	</div>
	
</body>
</html>
