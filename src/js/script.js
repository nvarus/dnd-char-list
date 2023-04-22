// создаем AJAX объект
function createAjaxObject() {
	let ajax = null;
	try {
		ajax = new XMLHttpRequest();
		console.log("запускаю XMLHttpRequest")
	} catch (e) {
		try {
			ajax = new ActiveXObject("MicrosoftXMLHTTP");
			console.log("запускаю MicrosoftXMLHTTP")
		} catch (e) {
			alert("AJAX не поддерживается вашим браузером!")
			return false;
		}
	}
	return ajax;
}
const ajax = createAjaxObject();

function editChar(idChar) {
	console.log(`ID персонажа ${idChar}`)
}