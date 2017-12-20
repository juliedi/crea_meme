function afficherImage( id) {
	var divImage = document.getElementById('affichageImage');
	
	if (divImage.hasChildNodes()) {
		divImage.removeChild(node);
	}
	
	var hrefImg = id +".jpg";
	node = document.createElement('img');
	node.id = id + "Image";
	node.src = hrefImg;
	node.alt = 
	divImage.appendChild(node);
}