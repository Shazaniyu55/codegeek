var togglebtn = document.getElementsByClassName('toggle-button')[0]
var brandlink = document.getElementsByClassName('brand-links')[0]
togglebtn.addEventListener('click', ()=>{
	brandlink.classList.toggle('active')
})




var tabLink = document.getElementsByClassName('tab-link')
var tabContent = document.getElementsByClassName('tab-contents')


function openTab(tabname){
	for(tabLinks of tabLink){
		tabLinks.classList.remove("active-link")

	}
	for(tabContents of tabContent){
		tabContents.classList.remove("active-tab")

	}
	event.currentTarget.classList.add("active-link")
	document.getElementById(tabname).classList.add("active-tab")

}