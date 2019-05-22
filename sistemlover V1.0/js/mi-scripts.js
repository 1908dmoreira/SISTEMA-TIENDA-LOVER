var inimenu = document.querySelector('#inicio-menu');
var inidatos = document.querySelector('#inicio-datos');

var nosmenu = document.querySelector('#nosotros-menu');
var nosdatos = document.querySelector('#nosotros-datos');

var prodmenu = document.querySelector('#productos-menu');
var proddatos = document.querySelector('#productos-datos');

var almohadones = document.querySelector('#almohadones');
var submenu2 = document.querySelector('#submenu2');
var iconadd = document.querySelector('#iconadd')
// console.log(iconadd);

var pie = document.querySelector('#footer');
var menu2 = document.querySelector('#submenu2');

var nav = document.querySelector('.navegation');

//--------------------- rs 360-----------------------------------------------
var pila = document.querySelector('#pila');
var submenu = document.querySelector('.submenu')
var submenu360 = document.querySelector('.submenu-rs360')

// ------------------------CATEGORIAS------------------------------------------
var contem = document.querySelector('#contem');
var em = document.querySelector('#em');

var contpf = document.querySelector('#contpf');
var pf = document.querySelector('#pf');

var contautos = document.querySelector('#contautos');
var autos = document.querySelector('#autos');

var contpers = document.querySelector('#contpers');
var personalizados = document.querySelector('#personalizados');

var contfutbol = document.querySelector('#contfutbol');
var futbol = document.querySelector('#futbol');

var continfant = document.querySelector('#continfant');
var infant = document.querySelector('#infant');

var controman = document.querySelector('#controman');
var roman = document.querySelector('#roman');

var contborda = document.querySelector('#contborda');
var bordados = document.querySelector('#bordados');

var contvarios = document.querySelector('#contvarios');
var varios = document.querySelector('#varios');

var contfundas = document.querySelector('#contfundas');
var fundas = document.querySelector('#fundas');

var contperch = document.querySelector('#contperch');
var perch = document.querySelector('#percheros');

// -------------------------------------------------------------------------- //

//--------------------------- rs 360 -----------------------------------------//
pila.addEventListener('click', function () {
	 if (submenu.style.display == 'block') {
    		submenu.style.display = 'none'
	 } else {
        submenu.style.display = 'block'
	 }
	 submenu2.style.display = 'none'
	 iconadd.src='img/add-icon.png'
	 submenu.style.height = '45%'
});



// ---------------------EVENTOS EN CATEGORIAS ------------------------------- //
perch.addEventListener('click', function () {
	contperch.style.display = 'block'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

fundas.addEventListener('click', function () {
	contfundas.style.display = 'block'
	contperch.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

varios.addEventListener('click', function () {
	contvarios.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

bordados.addEventListener('click', function () {
	contborda.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

roman.addEventListener('click', function () {
	controman.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

infant.addEventListener('click', function () {
	continfant.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

futbol.addEventListener('click', function () {
	contfutbol.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contpers.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

personalizados.addEventListener('click', function () {
	contpers.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contautos.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

autos.addEventListener('click', function () {
	contautos.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contpf.style.display = 'none'
	contem.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

em.addEventListener('click', function () {
	contem.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contpf.style.display = 'none'
	contautos.style.display = 'none'

	if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

pf.addEventListener('click', function () {
	contpf.style.display = 'block'
	contperch.style.display = 'none'
	contfundas.style.display = 'none'
	contvarios.style.display = 'none'
	contborda.style.display = 'none'
	controman.style.display = 'none'
	continfant.style.display = 'none'
	contfutbol.style.display = 'none'
	contpers.style.display = 'none'
	contem.style.display = 'none'
	contautos.style.display = 'none'

  if (screen.width < 1200){
		 submenu.style.display = 'none'
	}

});

// ------------------------------------------------------------------------- //

nosmenu.addEventListener('click', function () {
	nosdatos.style.display = 'block'
  inidatos.style.display = 'none'
  // contdatos.style.display = 'none'
  proddatos.style.display = 'none'

	contem.style.display = 'none'
	contpf.style.display = 'none'
	contautos.style.display = 'none'
	contpers.style.display = 'none'
	contfutbol.style.display = 'none'
	continfant.style.display = 'none'
	controman.style.display = 'none'
	contborda.style.display = 'none'
	contvarios.style.display = 'none'
	contfundas.style.display = 'none'
	contperch.style.display = 'none'
});

prodmenu.addEventListener('click', function () {
	proddatos.style.display = 'block'
  inidatos.style.display = 'none'
  contdatos.style.display = 'none'
	nosdatos.style.display = 'none'
	submenu2.style.display = 'none'

	contem.style.display = 'none'
	contpf.style.display = 'none'
	contautos.style.display = 'none'
	contpers.style.display = 'none'
	contfutbol.style.display = 'none'
	continfant.style.display = 'none'
	controman.style.display = 'none'
	contborda.style.display = 'none'
	contvarios.style.display = 'none'
	contfundas.style.display = 'none'
	contperch.style.display = 'none'
});

inimenu.addEventListener('click', function () {
	nosdatos.style.display = 'none'
  inidatos.style.display = 'block'
  contdatos.style.display = 'none'
  proddatos.style.display = 'none'
	submenu2.style.display = 'none'

	contem.style.display = 'none'
	contpf.style.display = 'none'
	contautos.style.display = 'none'
	contpers.style.display = 'none'
	contfutbol.style.display = 'none'
	continfant.style.display = 'none'
	controman.style.display = 'none'
	contborda.style.display = 'none'
	contvarios.style.display = 'none'
	contfundas.style.display = 'none'
	contperch.style.display = 'none'
});

almohadones.addEventListener('click', function(){
	if (submenu2.style.display != 'none') {
		submenu2.style.display = 'none'
		iconadd.src='img/add-icon.png'

		if (screen.width < 1200){
			submenu.style.height = '45%'
		}

	} else {
		submenu2.style.display = 'block'
		iconadd.src='img/Min-icon.png'

		if (screen.width < 1200){
	 		submenu.style.height = '77%'
		}

	}
});

window.addEventListener('scroll', function(e) {
	scroll_position = window.scrollY;
  if (scroll_position == 0) {
  	 // slider.style.display = 'block'
		 nav.style.position = 'inherit'

  } else {
  	 // slider.style.display = 'none'
		 nav.style.position = 'fixed'
  }
});
