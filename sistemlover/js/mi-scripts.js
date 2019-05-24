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







// var contenedor = document.querySelector('.container');
// console.log(contenedor);

// var divs = document.getElementsByTagName("div");
//
// var numDivs = divs.length;
//
// var contador = 0;
// for(var i = 0; i < numDivs; i++) {
//  if (divs[i].className == "container") {
// 	contador++;
//  }
// }
//
// 	console.log(contador++);















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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'pr'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}
				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}

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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
				submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'fn'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'va'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'bo'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'ro'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'in'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'fu'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'pe'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'au'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

  cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'em'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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

	cont = '';
	conxcat = '';
	if (screen.width < 1200){
		 		submenu.style.display = 'none';
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'block';
				}
	} else {
				var contenedor = document.getElementsByClassName('container');
				for (var i = 0; i < contenedor.length; i++) {
					cont = contenedor[i];
					cont.style.display = 'none';
				}

				for (var i = 1; i < 11; i++) {
					valor = 'pf'+i;
					conxcat = document.querySelector('#'+valor);
					if (conxcat!=null){
						conxcat.style.display = 'block';
					}
				}

				var paginador = document.getElementsByClassName('container-pagination');
				for (var i = 0; i < paginador.length; i++) {
					pg = paginador[i];
					pg.style.display = 'block';
				}
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
