window.onload = init;
function init(){
	urlload();
}
function urlload(){
}
/*Form Generation*/
function createForm(){
	var num = document.getElementById("participants").selectedIndex;
	
  for(var i=1;i<=num;i++){		
	if(document.getElementById("user"+i).innerHTML == ""){		
		var newForm = document.getElementById("formLayout").cloneNode(true);
		var inputs = newForm.getElementsByTagName('input');
		var labels = newForm.getElementsByTagName('label');
		for (var r=0;r<inputs.length;r++){
			inputs[r].name += i-1;
			inputs[r].id += i-1;
			labels[r].setAttribute("for","user"+(1-r)+(i-1));
		}
			
		var newFormX = document.getElementById("form_1").cloneNode(true);
		var newFormXLabels = newFormX.getElementsByTagName('label');
		for (var r=0;r<newFormX.length;r++){
			newFormX.elements[r].name += i-1;
			newFormX.elements[r].id = newFormX.elements[r].name;
			newFormXLabels[r].setAttribute("for",newFormX.elements[r].id);
		}
		newFormX.name ="form" + (i-1);
		newFormX.id = newFormX.name;
		newForm.appendChild(newFormX);
		document.getElementById("user"+i).innerHTML = newForm.innerHTML;
	}
  }
	
	for(var i=4;i>num;i--){
		document.getElementById("user"+i).innerHTML = "";
	}
	if(num) document.getElementById("submit").innerHTML = "<input type='submit' value='Register'/>";
	else document.getElementById("submit").innerHTML = "";
}

function changeForm(id,index){
	var i = id.charAt(4);	
	var newFormX = document.getElementById("form_"+index).cloneNode(true);
	var newFormXLabels = newFormX.getElementsByTagName('label');
	for (var r=0;r<newFormX.length;r++){
		newFormX.elements[r].name += i-1;
		newFormX.elements[r].id = newFormX.elements[r].name;
		newFormXLabels[r].setAttribute("for",newFormX.elements[r].id);
	}
	document.getElementById("form"+(i-1)).innerHTML = newFormX.innerHTML;
}

/*Event Registration Validation*/
function validateForms(){
	var num = document.getElementById("participants").selectedIndex;
	var flags=0;
	for(var i=0;i<num;i++){
		if(!validateForm("form"+i))flags++;
	}
	if(flags!=0) {return false;}
}

/*Registration Validation*/
function validateForm(formId){
	fields = document.getElementById(formId);
	table = fields.getElementsByTagName('table')[0];
	var flag=0;
	for(var r=0;r<fields.length;r++){
		var fieldValue = table.rows[r].cells[0].innerHTML;
		fieldValue = fieldValue.split(" :");
		if(fields.elements[r].value=="" || fields.elements[r].value==fieldValue[0]){
			table.rows[r].setAttribute("class","invalid");flag++;
		}
		else{
			table.rows[r].setAttribute("class","");
		}
	}
	if(fields.length>1){
		if(!validEmail(fields.elements[1].value)){table.rows[1].setAttribute("class","invalid");flag++;}
		if(!checkPassword()){table.rows[2].setAttribute("class","invalid");table.rows[3].setAttribute("class","invalid");flag++;}
	}
	else{
		if(!validEmail(fields.elements[0].value)){table.rows[0].setAttribute("class","invalid");flag++;}
	}
	if(flag!=0) return false;
	return true;
}

/*Email Validation*/
function validEmail(email) {
	var invalidChars = " /:,;";
	if (email == "") {
		return false;
	}
	for (var k=0; k<invalidChars.length; k++) {
		var badChar = invalidChars.charAt(k);
		if (email.indexOf(badChar) > -1) {
			return false;
		}
	}
	var atPos = email.indexOf("@",1);
	if (atPos == -1) {
		return false;
	}
	if (email.indexOf("@",atPos+1) != -1) {
		return false;
	}
	var periodPos = email.indexOf(".",atPos);
	if (periodPos == -1) {	
		return false;
	}
	if (periodPos+3 > email.length)	{
		return false;
	}
	return true;
}

/*Password Check*/
function checkPassword(){
	var invalidChars = " /:,;";
	var password = fields.elements[2].value;
	var rePassword = fields.elements[3].value;
	if(password!=rePassword){
		return false;
	}
	for (var k=0; k<invalidChars.length; k++){
		var badChar = invalidChars.charAt(k);
		if (password.indexOf(badChar) > -1) {
			return false;
		}
	}
	return true;
}