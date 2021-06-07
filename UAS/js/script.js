document.getElementById("decrement").onclick = function() {
	if(document.getElementById("counter").value > 0) {
		document.getElementById("counter").value--;
		var i = document.getElementById("counter").value;
		document.getElementById("item-price").innerHTML = `Rp ${i * 135000}`; 
		document.getElementById("item-price2").innerHTML = `${i * 135000}`;
		document.getElementById("total").innerHTML = `${i * 135000 + 30000}`;
	}
}

document.getElementById("increment").onclick = function() {
	document.getElementById("counter").value++;
	var i = document.getElementById("counter").value;
	document.getElementById("item-price").innerHTML = `Rp ${i * 135000}`; 
	document.getElementById("item-price2").innerHTML = `${i * 135000}`;
	document.getElementById("total").innerHTML = `${i * 135000 + 30000}`; 
}

document.getElementById("delete-item").onclick = function() {
	document.getElementById("item-box").remove();
	
	setTimeout(function(){ 
		alert("Keranjang Kosong"); 
		window.location = '';
	}, 1000);
	
}