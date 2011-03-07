
jQuery(function(){

  // Tabs
  jQuery("#fbfwTabs").tabs();
	
	// Hide Donation and twitter stuff on tabs other than Info
  jQuery("#fbfwTabs li a").click(function(){
		jQuery("#mfbfwd").hide();
  });
	
	jQuery("#show-mfbfwd").click(function(){
		jQuery("#mfbfwd").show();
  });
	
	
	// Hide form fields when not needed (swithed by checkbox)
	function switchBlock(button,block) {
		var blockvalue = jQuery(block + "#:checked").val();
		if (blockvalue == "on") { jQuery(button).css("display", "inline"); }
		else { jQuery(button).css("display", "none"); }
		
		jQuery(block).click(function(){
			jQuery(button).animate({opacity: "toggle", height: "toggle"}, 500);
		});
	}
	
	switchBlock("#borderColorBlock","#border");
	switchBlock("#closeButtonBlock","#showCloseButton");
	switchBlock("#overlayBlock","#overlayShow");
	switchBlock("#titleBlock","#titleShow");
	switchBlock("#callbackBlock","#callbackEnable");
	switchBlock("#extraCallsBlock","#extraCallsEnable");
	
	
	// Hide Title Color if not needed
  var titlePosition = jQuery("input:radio[class=titlePosition]:checked").val();

  switch (titlePosition) {
	case "float":
	case "outside":
	case "over":
	  jQuery("#titleColorBlock").css("display", "none");
  }

  jQuery("#titlePositionFloat, #titlePositionOutside, #titlePositionOver").click(function () {
		jQuery("#titleColorBlock").hide("slow");
  });

  jQuery("#titlePositionInside").click(function () {
		jQuery("#titleColorBlock").show("slow");
  });
	
	
	// Gallery Type
	var galleryType = jQuery("input:radio[class=galleryType]:checked").val();

	switch (galleryType) {
		case "all":
		case "none":
		case "post":
			jQuery("#customExpressionBlock").css("display", "none");
	}

	jQuery("#galleryTypeAll, #galleryTypeNone, #galleryTypePost").click(function () {
		jQuery("#customExpressionBlock").hide("slow");
	});

	jQuery("#galleryTypeCustom").click(function () {
		jQuery("#customExpressionBlock").show("slow");
	});
	
	
	// Easing
	var easingEnable = jQuery("input:checkbox[id=easing]").attr("checked");

	if (easingEnable == false ) {
			jQuery("#easingBlock").css("display", "none");
	}

	jQuery("#easing").click(function () {
		jQuery("#easingBlock").toggle("slow");
	});
	
	/*
	function checkTransitionIn() {
		var easingIn = jQuery("#transitionIn").val();
		if ( easingIn == "elastic" ) {
			jQuery("#easingIn").removeAttr('disabled');
		} else {
			jQuery("#easingIn").attr('disabled', 'disabled');
		}
	}
	jQuery("#transitionIn").change(checkTransitionIn);
	checkTransitionIn();
	
	function checkTransitionOut() {
		var easingOut = jQuery("#transitionOut").val();
		if ( easingOut == "elastic" ) {
			jQuery("#easingOut").removeAttr('disabled');
		} else {
			jQuery("#easingOut").attr('disabled', 'disabled');
		}
	}
	jQuery("#transitionOut").change(checkTransitionOut);
	checkTransitionOut();
	*/

})

function confirmDefaults() {
	if (confirm(defaults_prompt) == true)
return true;
	else
return false;
}

var defaults_prompt = "Are you sure you want to restore FancyBox for WordPress to default settings?";
