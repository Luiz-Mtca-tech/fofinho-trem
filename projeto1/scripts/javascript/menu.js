

// coletando o icone do menu
let component = document.getElementById('menu-img')
let menu = document.getElementById('menu')//nó pai
let menuBar = document.getElementById('lista')//nó filho

//criando uma lista dos itens do menu
let itens = ['<a href="../index/index.php" target="_self">home</a>',
			'<a href="../loja/loja.php" target="_self">Loja</a>',
			'<a href="../sobrenos/sobrenos.html" target="_self">Sobre Nós</a>']
			
let menuAberto = false// variável para verificar se o menu está aberto
let itemMenu = null// variável para verificar se o menu está aberto
var listaMenu = []


// se o usuario clicar no botão do menu, o mesmo será aberto
component.onclick = function ()
{   
	//se o menu estiver fechado 
	if (menuAberto == false){
		
		/* Vai acrescentar todos os itens do menu em um array, aplicar 
		 * css neles e adicionalos na 'listaMenu'
		 */
		for (let i = 0; i < 3; i++) {
			
			menuAberto = true
			itemMenu = document.createElement('li')
			
			itemMenu.innerHTML = `${itens[i]}`
			
			listaMenu.push(itemMenu)
			
			menuBar.appendChild(listaMenu[i])
			
		}
		menu.appendChild(menuBar)
		
	}else {// se o menu estiver aberto, o mesmo será fechado
		
		menuAberto = false// o menu está fechado
		/*
		 * para cada item no menu, um loop no for()
		 */
		for (let i = 0; i < 3; i++){
			
			//item removido
			menuBar.removeChild(listaMenu[i])
			menu.style.backgroundColor = '#3470FA'
			
		}
		menu.removeChild(menuBar)// removendo lista de itens
		
		
	}
    

}




