//para que na versão Desktop o dropdown do Bootstrap apareça só com hover e não com clique 
let dropdown = document.querySelector(".dropdown");

 dropdown.addEventListener("mouseleave", function(event) {
	let width = $(window).width();
	if (width >= 992){
		$(".dropdown-menu").dropdown('hide');
	}
 }, false);