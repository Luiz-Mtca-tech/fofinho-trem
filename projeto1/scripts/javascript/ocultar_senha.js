
/* 
 * neste arquivo vai fazer com que o cliente 
 * possa escolher em ocultar a senha ou deixa-la
 * a mostra
*/
   
/* pegando o botão que será precionado para usarmos 
 * como gatilho para mudar os atributos da input da senha
*/
let botao = document.getElementById('btn-vs')

// pegando o input da senha
let senha = document.getElementById('senha')

/* se clicarem na botão executa essa função,
 * se o atributo 'type' da senha for igual á 'password' ele será 'text'
 * caso contrálio ele será 'password'
 */ 
botao.onclick = function(){
	
	//se o atributo 'type' da senha for
	if(senha.getAttribute('type') == 'password'){
		
		senha.setAttribute('type', 'text')
		
		// o texto que apareçe no botão será mudao para: 'Ocultar Senha'
		botao.setAttribute('value', 'Ocultar Senha')
	}else{
		senha.setAttribute('type', 'password')
		
		// o texto que apareçe no botão será mudao para: 'Mostrar Senha'
		botao.setAttribute('value', 'Mostrar Senha')
	}

}



