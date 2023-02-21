with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && pass.value!= pass2.value){
			ok=false;
			alert("Las contraseñas no coinciden");
			// validar_pass.focus();
		}

		if(ok){ submit(); }
	}
}