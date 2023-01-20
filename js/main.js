
function requisitarpagina(url){
	
	let ajax = new XMLHttpRequest();
	console.log(ajax);

	document.getElementById('content').innerHTML = "";
	
	if(!document.getElementById('loading')){
		let content = document.getElementById('content');
		let loadingImg = document.createElement('img');
		loadingImg.id = 'loading';
		content.appendChild(loadingImg);
		loadingImg.src = 'images/loading.gif';
		loadingImg.className = 'rounded mx-auto d-block';
	}

	ajax.open('GET', url);

	ajax.onreadystatechange = () => {
		
		if(ajax.readyState === 4 && ajax.status === 200){
			document.getElementById('content').innerHTML = ajax.responseText;
		}

		if(ajax.readyState === 4 && ajax.status === 404){
			document.getElementById('content').innerHTML = '<h1 class="mt-5 text-center fs-3">Tente novamente mais tarde...</h1';
		}		
	}

	ajax.send();		
}

