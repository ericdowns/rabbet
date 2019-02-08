jQuery(document).ready(function(){
	setupAccordion();
});
function setupAccordion(){
	jQuery(".accordion h3").click(function(){
		var selectedHeader = jQuery(this);
		var closeOnly = false;
		if(selectedHeader.hasClass("open"))
			closeOnly = true;
		var parent = selectedHeader.parents(".accordion");
		var previousSelectedHeader = jQuery(".open", parent);	
		jQuery(" + div", previousSelectedHeader).removeClass("active").slideToggle(300);
		previousSelectedHeader.removeClass("open");
		if(!closeOnly){
			selectedHeader.toggleClass("open");
			jQuery(" + .accordion-content", this).addClass("active").slideToggle(300);
		}
	});
}
