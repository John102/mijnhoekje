
window.onload = function() { sticky(); };
window.onscroll = function() {	sticky(); };

let nav		=	document.querySelector("nav");

// AUTO REFRESH


// STICKY NAV FUNCTION
function sticky() {
	if(window.pageYOffset > (nav.style.height)) {
		nav.classList.add("sticky");		
	} else {
		nav.classList.remove("sticky");
	}
};

// SHRINK HEADER
function shrinkHeader() {
	let header = document.querySelector('header');
	header.style.height = '250px';
	header.style.transition = 'height 500ms ease-out 150ms';	
}


// RESPONSIVE NAV FUNCTION
function navFunction() {
	let nav 	=	document.querySelector('nav');

	if(nav.className === '' || nav.className === 'sticky') {
		nav.className += " nav-responsive";
	} 
	else if(nav.className === 'sticky nav-responsive') {
		nav.className = 'sticky';
	}
	else {
		nav.className = '';
	}
}

// IMAGE POPUP
function popImage(_src) {
	let modal 			= document.getElementById('modal');
	let modalImage 		= document.getElementById('modal-image');

	if(modal.style.display == 'none') {
		modal.style.display = 'block';
		modalImage.innerHTML += '<img class="image-responsive" src="' + _src + '" />';
	} else {
		modalImage.innerHTML = '';
		modal.style.display = 'none';
	}

}

// FP CALCULATOR
const calc = function() {
	let totaalFP 			= 	document.getElementById('totaalfp').value;		// totaal FP nodig in gebouw
	let huidigeFP 			=	document.getElementById('huidigefp').value;		// huidige FP in gebouw
	let gebouwNogNodig 		=	totaalFP - huidigeFP;							// FP nog nodig om te levelen gebouw

	let spelerBovenMij 		=	document.getElementById('plaatsboven').value;	// aantal FP speler boven mij
	let mijnPlaats			=	document.getElementById('plaatsmijn').value;	// aantal FP door mij
	let nodigInhaal 		= 	(spelerBovenMij - mijnPlaats) + 1;				// Minimaal nodig om in te halen

	let uitslag 			=	document.getElementById('uitslag');


	if(Math.floor((((gebouwNogNodig - nodigInhaal) / 2)) + nodigInhaal) < gebouwNogNodig) {
		uitslag.style.color = '#58b047';
		uitslag.innerHTML = `Om je positie veilig te stellen moet je minimaal ${Math.floor(((gebouwNogNodig - nodigInhaal) / 2)) + nodigInhaal} forgepunten storten.`;
	} else {
		uitslag.style.color  = '#a60a0a';
		uitslag.innerHTML = `Het is niet meer mogelijk om de speler boven je in te halen.`;
	}
}
