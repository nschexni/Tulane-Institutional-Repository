
function change_tech_tab() {
	if(document.getElementById('comm_content')){
		document.getElementById('comm_content').style.display="none";
	}
	if(document.getElementById('serv_content')){
		document.getElementById('serv_content').style.display="none";
	}
	if(document.getElementById('tech_content')){
		document.getElementById('tech_content').style.display="block";
	}
	
	if(document.getElementById('tech_btn')){
		document.getElementById('tech_btn').src="http://highwire.stanford.edu/icons/3/tech_on.gif";
	}
	if(document.getElementById('comm_btn')){
		document.getElementById('comm_btn').src="http://highwire.stanford.edu/icons/3/comm_off.gif";
	}
	if(document.getElementById('serv_btn')){
		document.getElementById('serv_btn').src="http://highwire.stanford.edu/icons/3/serv_off.gif";
	}
	
}

function change_comm_tab() {
	if(document.getElementById('comm_content')){
		document.getElementById('comm_content').style.display="block";
	}
	if(document.getElementById('serv_content')){
		document.getElementById('serv_content').style.display="none";
	}
	if(document.getElementById('tech_content')){
		document.getElementById('tech_content').style.display="none";
	}
	
	if(document.getElementById('tech_btn')){
		document.getElementById('tech_btn').src="http://highwire.stanford.edu/icons/3/tech_off.gif";
	}
	if(document.getElementById('comm_btn')){
		document.getElementById('comm_btn').src="http://highwire.stanford.edu/icons/3/comm_on.gif";
	}
	if(document.getElementById('serv_btn')){
		document.getElementById('serv_btn').src="http://highwire.stanford.edu/icons/3/serv_off.gif";
	}
	
}

function change_serv_tab() {
	if(document.getElementById('comm_content')){
		document.getElementById('comm_content').style.display="none";
	}
	if(document.getElementById('serv_content')){
		document.getElementById('serv_content').style.display="block";
	}
	if(document.getElementById('tech_content')){
		document.getElementById('tech_content').style.display="none";	
	}
	if(document.getElementById('tech_btn')){
		document.getElementById('tech_btn').src="http://highwire.stanford.edu/icons/3/tech_off.gif";
	}
	
	if(document.getElementById('comm_btn')){
		document.getElementById('comm_btn').src="http://highwire.stanford.edu/icons/3/comm_off.gif";
	}
	if(document.getElementById('serv_btn')){
		document.getElementById('serv_btn').src="http://highwire.stanford.edu/icons/3/serv_on.gif";
	}
}

