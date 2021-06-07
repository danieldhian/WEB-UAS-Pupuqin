
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" href="css/layout.css">
	</head>
	<body>
    
		<div class="container-flex">
			<div class="product-container">
				<h3>Keranjang Belanja</h3>
				<div class="product-listbox">
					<div class="item" id="item-box">
						<div class="item-content d-flex">
							<img src="images/anorganik1.jpg" width="100">
							<div class="item-title">
								<h4>Pupuk Anorganik Phonska</h4>
			
								
							</div>
							<br>
							<div class="d-flex item-counter">
								<button class="btn-decrement" id="decrement">-</button>
								<input class="form-control counter" id="counter" value="1" readonly="true">
								<button class="btn-increment" id="increment">+</button>
							</div>
							<div class="item-price">
								<h4 id="item-price">Rp 135000</h4>
							</div>
							<div class="delete-item" id="delete-item">
								<h4>x</h4>
							</div>
						</div>
					</div>
				</div>
                <br>
                <h4> Deskripsi Produk</h4>
                <p font-size="20px">Salah satu jenis pupuk anoganik yang mengandung Nitrogen, Phosfor dan Kalium.
                    Kandungan unsur hara disetiap butir pupuk merata. Larut dalam air sehingga mudah diserap tanaman dan 
                    dapat menambah daya tahan tanaman terhadap gangguan hama.</p>
                <a 
                href="produk.php">
                <button class ="buttonback" type="button" >Kembali</button>
                </a>
			</div>
			<div class="summary-container">
				<div class="summary-title" style="margin-bottom: 30px">
					Ringkasan Pembelian
				</div>
				<div class="info">
					<p>Item</p>
					<p id="item-price2">135000</p>
				</div>
				<div class="info">
					<p>Diskon</p>
					<p>0</p>
				</div>
				<div class="info">
					<p>Ongkir</p>
					<p>30000</p>
				</div>
				<div class="d-flex justify-content-between">
					<p> </p>
					<p id="total">165000</p>
				</div>
				<div class="container" height="80">
					
                <button class="btn-checkout" type="button" onclick="alert('Selamat Barang Telah Terbeli')">Checkout</button>
                
					
            </div>
        
		</div>
       
		<script src="js/script.js"></script>
	</body>
</html>