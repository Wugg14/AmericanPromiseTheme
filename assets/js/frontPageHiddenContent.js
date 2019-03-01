var slideCount = 0;

jQuery(document).ready( function () {
  jQuery('#1').hide();
  jQuery('#2').hide();
});

jQuery('#next').on('click', Next);
jQuery('#prev').on('click', Prev);

function Next(){
  if (slideCount == 0){
    jQuery('#0').hide("slide", { direction: "left" }, 1000);
    jQuery('#1').show("slide", { direction: "right" }, 1000);
    slideCount = 1;
  } else if (slideCount == 1){
    jQuery('#1').hide("slide", { direction: "left" }, 1000);
    jQuery('#2').show("slide", { direction: "right" }, 1000);
    slideCount = 2;
  } else if (slideCount == 2){
    jQuery('#2').hide("slide", { direction: "left" }, 1000);
    jQuery('#0').show("slide", { direction: "right" }, 1000);
    slideCount = 0;
  }
}

function Prev(){
  if (slideCount == 0){
    jQuery('#2').show("slide", { direction: "left" }, 1000);
    jQuery('#0').hide("slide", { direction: "right" }, 1000);
    slideCount = 2;
  } else if (slideCount == 1){
    jQuery('#0').show("slide", { direction: "left" }, 1000);
    jQuery('#1').hide("slide", { direction: "right" }, 1000);
    slideCount = 0;
  } else if (slideCount == 2){
    jQuery('#1').show("slide", { direction: "left" }, 1000);
    jQuery('#2').hide("slide", { direction: "right" }, 1000);
    slideCount = 1;
  }
}
