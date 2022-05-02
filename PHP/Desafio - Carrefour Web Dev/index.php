<html>
	<head>
		<title>Linguagens</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
		<style type="text/css">
			#titleLP {
				font-weight: bold;
				color: blue;
				padding-left: 5px;
				line-height: 25px;
			}	
		</style>
	</head>
	<body>
		<div id="titleLP"><h1>Linguagens dos computadores</h1></div>
		<div id="accordion">
			<h3>C++</H3>
			<div>
				<p>
				É uma linguagem de programação compilada multi-paradigma e de uso geral. 
				Desde os anos 1990 é uma das linguagens comerciais mais populares, sendo 
				bastante usada também na academia por seu grande desempenho e base de utilizadores.
				<p/>
			</div>
			<h3>Rust</H3>
			<div>
				<p>
				É uma linguagem de programação multiparadigma compilada desenvolvida pela
				Mozilla Research. É projetada para ser "segura, concorrente e prática", mas 
				diferente de outras linguagens seguras, Rust não usa coletor de lixo. Possui 
				suporte nativo ao WebAssembly.
				<p/>
			</div>
			<h3>Javascript</H3>
			<div>
				<p>
				É uma linguagem de programação interpretada estruturada, de 
				script em alto nível com tipagem dinâmica fraca e multiparadigma. Juntamente
				com HTML e CSS, o JavaScript é uma das três principais tecnologias da 
				World Wide Web.
				<p/>
			</div>
			<h3>HTML5</H3>
			<div>
				<p>
				É uma linguagem de marcação para a World Wide Web e é uma tecnologia
				chave da Internet, originalmente proposto por Opera Software. É a quinta 
				versão da linguagem HTML.
				<p/>
			</div>
			<h3>CSS</H3>
			<div>
				<p>
				Cascading Style Sheets é um mecanismo para adicionar estilo a um documento web.
				O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das 
				tags "style". Também é possível, em vez de colocar a formatação dentro do 
				documento, criar um link para um arquivo CSS que contém os estilos. 
				<p/>
			</div>
		</div>
	</body>
	<script>
		$("#accordion").accordion();
	</script>
</html>