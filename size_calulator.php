<?php
/*
	Plugin Name: Shape Size Calculator
	Description: This plugin is developed to calculate custom size. Use this shortcode [shape-size-calculator] to show Size Calculator.
	Author: Ravi Yadav
   Plugin URI: http://www.sohamsolution.com/
	License: Public Domain
   Version: 1.1.0
*/
function custom_size_calulator_style_scripts() {
  
	wp_enqueue_script('jquery');
    
	wp_register_script('custom_size_calulator_slider_scripts', plugin_dir_url(__FILE__).'assets/js/roundslider.min.js',array('jquery'));
	wp_enqueue_script('custom_size_calulator_slider_scripts');

   	wp_register_script('custom_size_calulator_custom_scripts', plugin_dir_url(__FILE__).'assets/js/custom.js',array('jquery'));
	wp_enqueue_script('custom_size_calulator_custom_scripts');  	
	
	wp_register_style('search_form_css_slider_styles', plugin_dir_url(__FILE__).'assets/css/roundslider.min.css');
    wp_enqueue_style('search_form_css_slider_styles');

    wp_register_style('search_custom_form_css_styles', plugin_dir_url(__FILE__).'assets/css/style.css');
    wp_enqueue_style('search_custom_form_css_styles');


}
add_action('wp_enqueue_scripts', 'custom_size_calulator_style_scripts');


/*---ShortCode [shape-size-calculator]--*/

function custom_size_calulator_shortcode() {
	$html = '<div id="checknow">
   <ul>
      <li>
         <h2 style="text-align:center">Shape Size Calculator</h2>
         <br>
         <div style="display: block;">
            <h5 style="color: #ec0180;">Please enter your measurements in centimeters</h5>
            <form action="" enctype="multipart/form-data" method="post" name="size-chart"></form>
         </div>
      </li>
      <li>
         <div id="pagewrap">
            <div class="main_div">
               <div class="round-section">
                  <h2 style="background-color: white; font-family: inherit; margin-left: 0px; border: 0px; color: #ec0180;">Waist Size (cms)</h2>
                  <section id="firstdiv">
                     <div id="slider123" class="rslider rs-control rs-animation" style="height: 200px; width: 200px;">
                        <div class="rs-container full pie" style="height: 200px; width: 200px;">
                           <div class="rs-inner-container">
                              <div class="rs-block rs-outer rs-border rs-split">
                                 <div class="rs-path rs-transition rs-range-color" style="transform: rotate(315deg);"></div>
                                 <div class="rs-path rs-transition rs-range-color" style="opacity: 0; transform: rotate(135deg);"></div>
                                 <div class="rs-path rs-transition rs-path-color" style="transform: rotate(315deg); opacity: 1;"></div>
                                 <div class="rs-path rs-transition rs-path-color" style="opacity: 1; z-index: 1; transform: rotate(135deg);"></div>
                                 <span class="rs-block" style="padding: 18px;">
                                    <div class="rs-inner rs-bg-color rs-border"></div>
                                 </span>
                              </div>
                           </div>
                           <div class="rs-bar rs-transition rs-first" style="z-index: 4; transform: rotate(315deg);">
                              <div class="rs-handle rs-move" index="2" tabindex="0" role="slider" aria-label="slider123_handle" style="height: 18px; width: 18px; margin: -9px 0px 0px 1px;" aria-valuenow="69" aria-valuemin="69" aria-valuemax="108.5"></div>
                           </div>
                           <span class="rs-bar rs-transition rs-start" style="transform: rotate(315deg);"><span class="rs-seperator" style="width: 18px; margin-left: 1px;"></span></span><span class="rs-bar rs-transition rs-end" style="transform: rotate(585deg);"><span class="rs-seperator" style="width: 18px; margin-left: 1px;"></span></span>
                           <div class="rs-overlay rs-transition rs-bg-color" style="transform: rotate(585deg);"></div>
                           <span class="rs-tooltip rs-tooltip-text edit" style="margin-top: -20px; margin-left: -22px;">69</span>
                        </div>
                        <input type="hidden" name="slider123" value="69">
                     </div>
                  </section>
               </div>
               <div class="round-section">
                  <h2 style="background-color: white; font-family: inherit; margin-left: 0px; border: 0px; color: #ec0180;">Hip Size (cms)</h2>
                  <section id="middle">
                     <div id="slider1234" class="rslider rs-control rs-animation" style="height: 200px; width: 200px;">
                        <div class="rs-container full pie" style="height: 200px; width: 200px;">
                           <div class="rs-inner-container">
                              <div class="rs-block rs-outer rs-border rs-split">
                                 <div class="rs-path rs-transition rs-range-color" style="transform: rotate(315deg);"></div>
                                 <div class="rs-path rs-transition rs-range-color" style="opacity: 0; transform: rotate(175.909deg);"></div>
                                 <div class="rs-path rs-transition rs-path-color" style="transform: rotate(355.909deg); opacity: 1;"></div>
                                 <div class="rs-path rs-transition rs-path-color" style="opacity: 1; z-index: 1; transform: rotate(135deg);"></div>
                                 <span class="rs-block" style="padding: 18px;">
                                    <div class="rs-inner rs-bg-color rs-border"></div>
                                 </span>
                              </div>
                           </div>
                           <div class="rs-bar rs-transition rs-first" style="z-index: 4; transform: rotate(355.909deg);">
                              <div class="rs-handle rs-move" index="2" tabindex="0" role="slider" aria-label="slider1234_handle" style="height: 18px; width: 18px; margin: -9px 0px 0px 1px;" aria-valuenow="99" aria-valuemin="94" aria-valuemax="127"></div>
                           </div>
                           <span class="rs-bar rs-transition rs-start" style="transform: rotate(315deg);"><span class="rs-seperator" style="width: 18px; margin-left: 1px;"></span></span><span class="rs-bar rs-transition rs-end" style="transform: rotate(585deg);"><span class="rs-seperator" style="width: 18px; margin-left: 1px;"></span></span>
                           <div class="rs-overlay rs-transition rs-bg-color" style="transform: rotate(585deg);"></div>
                           <span class="rs-tooltip rs-tooltip-text edit" style="margin-top: -20px; margin-left: -22px;">99</span>
                        </div>
                        <input type="hidden" name="slider1234" value="99">
                     </div>
                  </section>
               </div>
               <!--<aside id="sidebar"><input class="button" style="outline: none; width: auto;" onclick="sizecal();" type="submit" value="Calculate" /></aside>-->
            </div>
         </div>
         <div style="clear: both;">&nbsp;</div>
      </li>
      <li class="sizeme">
         <div class="numberCircle">
            <div id="sizemsg">M</div>
         </div>
         <br>
        
      </li>
      <li>
         <div style="display: none;">
            <form action="" enctype="multipart/form-data" method="post" name="size-chart"></form>
         </div>
      </li>
      <li>
         <div style="display: none;">
            <form id="size-chart" action="" enctype="multipart/form-data" method="post" name="size-chart"></form>
         </div>
      </li>
      <li id="calculatedSize"></li>
   </ul>
</div>';
return $html;
}
add_shortcode( 'shape-size-calculator', 'custom_size_calulator_shortcode');
