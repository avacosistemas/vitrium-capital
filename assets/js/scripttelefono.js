function formatTelephoneNumber () {
	
	var telephone = document.getElementById("telephone");
	var mobile = document.getElementById("mobile");
	//telephone.value = telephone.value.replace(/(\d{3}(?!\d?$))\-?/g, '$1-');
	
	switch (country.value) {
		case "arg":
				
			break;
		case "chi":
								
			break;	
		case "mex":
				
			break;	
		case "pan":
				
			break;	
		case "cos":
				
			break;	
		case "par":
				
			break;
			case "vnz":
				
			break;
			case "ecu":
				
			break;
			case "per":
				
			break;
			case "bol":
				
			break;
			case "uru":
				
			break;case "bra":
				
			break;
			case "esp":
				
			break;
			case "eua":
				
			break;
	}
	
	
}

function changeCountry () {

	var telephone = document.getElementById("telephone");
	var mobile = document.getElementById("mobile");
	var country = document.getElementById("country");

	switch (country.value) {
		case "arg":
				telephone.focus();
				telephone.value = "(54)-";
				telephone.placeholder="(54)-123412345678";
				document.getElementById('telephone').addEventListener('input', function (e) {
					var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,4})(\d{0,8})/);
					e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' +  x[2]  +  x[3] ;
				});
				
				mobile.value = "(54)-(9)-";
				mobile.placeholder="(54)-(9)-123412345678";
				document.getElementById('mobile').addEventListener('input', function (e) {
					var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,1})(\d{0,12})/);
					e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + '(' + x[2] + ')-' + x[3] ;
				});
			
			break;
		case "chi":
			
			telephone.focus();
			telephone.value = "(569)-";
			telephone.placeholder="(569)-12345678";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,8})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			mobile.value = "(569)-";
			mobile.placeholder="(569)-1234123456789";
			document.getElementById('mobile').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,9})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			break;	
		case "col":
			
			telephone.focus();
			telephone.value = "(57)-";
			telephone.placeholder="(57)-(1)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,1})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + '(' + x[2] + ')-' +  x[3] ;
			});
			
			mobile.value = "(57)-";
			mobile.placeholder="(57)-12341234567890";
			document.getElementById('mobile').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,10})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			break;	
		case "cos":
				
			telephone.focus();
			telephone.value = "(506)-";
			telephone.placeholder="(506)-12345678";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,8})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			mobile.value = "(506)-";
			mobile.placeholder="(506)-12345678";
			document.getElementById('mobile').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,8})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;	
		case "mex":
				telephone.focus();
				telephone.value = "(52)-";
				telephone.placeholder="(52)-12312345678";
				document.getElementById('telephone').addEventListener('input', function (e) {
					var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,8})/);
					e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' +  x[2]  +  x[3] ;
				});
				
				mobile.value = "(52)-(1)-";
				mobile.placeholder="(52)-(1)-12341234567890";
				document.getElementById('mobile').addEventListener('input', function (e) {
					var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,1})(\d{0,10})/);
					e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + '(' + x[2] + ')-' + x[3] ;
				});
			break;	
		case "pan":
			telephone.focus();
			telephone.value = "(507)-";
			telephone.placeholder="(507)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			mobile.value = "(507)-";
			mobile.placeholder="(507)-12345678";
			document.getElementById('mobile').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,8})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			
		case "par":
	telephone.focus();
			telephone.value = "(595)-";
			telephone.placeholder="(595)-12345678";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,8})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			
			mobile.value = "(595)-";
			mobile.placeholder="(595)-123456789";
			document.getElementById('mobile').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,9})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			
			
			
			case "vnz":
			telephone.focus();
			telephone.value = "(58)-";
			telephone.placeholder="(58)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "per":
			telephone.focus();
			telephone.value = "(51)-";
			telephone.placeholder="(51)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "ecu":
			telephone.focus();
			telephone.value = "(593)-";
			telephone.placeholder="(593)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "bol":
			telephone.focus();
			telephone.value = "(591)-";
			telephone.placeholder="(591)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "uru":
			telephone.focus();
			telephone.value = "(598)-";
			telephone.placeholder="(598)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "bra":
			telephone.focus();
			telephone.value = "(55)-";
			telephone.placeholder="(55)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "esp":
			telephone.focus();
			telephone.value = "(34)-";
			telephone.placeholder="(34)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
			case "eua":
			telephone.focus();
			telephone.value = "(1)-";
			telephone.placeholder="(1)-1234567";
			telephone.focus();
			document.getElementById('telephone').addEventListener('input', function (e) {
				var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,7})/);
				e.target.value = !x[2] ? x[1] : '(' + x[1] + ')-' + x[2] ;
			});
			break;
	}
}

                                