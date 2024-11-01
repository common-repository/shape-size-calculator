jQuery( document ).ready(function($) {
    jq=$.noConflict(true);
jq("#slider123").roundSlider({
    radius: 100,
    circleShape: "pie",
    sliderType: "min-range",
    //showTooltip: false,
	min: 69,
	max: 108.5,
    value: 69,
	step: 0.5,
    startAngle: 315,
	change: function (e) {
                                    sizecal();
                                }
});

jq("#slider1234").roundSlider({
    radius: 100,
	min: 94,
	max: 127,
    circleShape: "pie",
    sliderType: "min-range",
    //showTooltip: false,
    value: 94,   
    startAngle: 315,
change: function (e) {
                                    sizecal();
                                }
});

{

	 var obj = jq("#slider1234").data("roundSlider");
	 var obj2 = jq("#slider123").data("roundSlider");
	 progress=obj2.option("value");
	 progress2=obj.option("value");

	  var size ='N/A';
	  
 if (progress >= 69 && progress <= 78.5 && progress2>=94 && progress2<=102)
					size = "M";
	 if (progress >= 79 && progress <= 88.5 && progress2>=104 && progress2<=113)
					size = "L";
	 if (progress >= 89 && progress <= 98.5 && progress2>=114 && progress2<=120)
					size = "XL";
	 if (progress >= 99 && progress <= 108.5 && progress2>=121 && progress2<=127)
					size = "XXL"; 
	
	/* if (progress >= 69 && progress <= 78.5)
					size = "M";
				if (progress >= 79 && progress <= 88.5)
					size = "L";
				if (progress >= 89 && progress <= 98.5)
					size = "XL";
				if (progress >= 99 && progress <= 108.5)
					size = "XXL";
*/

//alert(size);
var msg="Your size is: ";
    var data=size;
	//document.getElementById("sizemsg").innerhtml=data;
 jq('#sizemsg').html(data);
}
});

function sizecal()
