
(function (){
    let bout = document.querySelectorAll('.ctrl-carrousel input');
	console.log(bout.length);
	let carrousel_2 = document.querySelectorAll('.carrousel-2');
	console.log(carrousel_2.tagName);
	let noBouton =0;
	bout[0].checked = true;
	for (const bt of bout){
		bt.value = noBouton++;
		console.log(bt.value);
		bt.addEventListener('mousedown', function(){
			carrousel_2.style.transform = "translateX(" + (-this.value*100) + "vw)";
			console.log(carrousel_2.style.transform);
		})
	}
}())
    
	