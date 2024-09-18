        <header>
            
			<nav id="menu-bar">		
				<input type="checkbox" name="" id="input-menu">
				<label id="label-menu" for="input-menu">
					<img src="imagens/menu-black.webp" alt="cardapio">
				</label>
				
				<div id="menu">
					<input type="checkbox" name="" id="input-close-menu">
					<label id="close-menu" for="input-menu">
						<span>Menu</span>
						<p><i class="fa-solid fa-xmark"></i></p>
					</label>

					<div>
						<a href="index.php">Início</a>
						<a href="petiscos.php">Petiscos</a>
						<a href="pasteis.php">Pastéis</a>
						<a href="salgados.php">Salgados</a>
						<a href="bebidas.php">Bebidas</a>
					</div>
					
					

					<a id="link-wp" href="https://api.whatsapp.com/send?phone=5588988250424&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido." target="_blank">
						<p>Contato</p>
						<img src="imagens/whatsapp.webp" alt="contato">
					</a>
				</div>

<script>
  

    // Adiciona um ouvinte de evento para fechar o menu quando o usuário clica fora dele
    document.addEventListener("click", function (event) {
        var menu = document.getElementById("menu");
        var checkbox = document.getElementById("input-menu");

        if (!checkbox.contains(event.target) && !menu.contains(event.target)) {
            checkbox.checked = false;
            menu.style.marginLeft = '0';
        }
    });
</script>

				
			</nav>

			<a id="logo" href="index.php">CARDÁPIO</a>
			<a id="instagram" href="https://www.instagram.com/lanchonetedocesedelicias_/" target="_blank"><img src="imagens/instagram-black.webp" alt="instagram"></a>
        </header>
		