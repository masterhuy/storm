<?php
/* Smarty version 3.1.32, created on 2018-11-14 05:02:27
  from 'D:\xamppp\htdocs\jms_storm\modules\jmsmaplocation\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bebf2b3c31259_60976774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76aac9872c214b9fe96b3ab1c98fbdb5a93e72f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmsmaplocation\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebf2b3c31259_60976774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69105bebf2b3c256d3_34030927', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_69105bebf2b3c256d3_34030927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_69105bebf2b3c256d3_34030927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'map') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC7dBv2gOklszmw9xcyI1BCIL2_bzZpjdc"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		 function codeAddress() {
			var geocoder = new google.maps.Geocoder(); 
			var address = document.getElementById("address").value;
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			  }
			});
		  }
			
		  function initialize() {
			var mapOptions = {
			  center: new google.maps.LatLng(-33.8688, 151.2195),
			  zoom: 13,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

			var input = document.getElementById('address');
			var autocomplete = new google.maps.places.Autocomplete(input);
			
			autocomplete.bindTo('bounds', map);
			
			var infowindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker({
			  map: map
			});
			//hainn add
			var geocoder = new google.maps.Geocoder(); 
			var address = input.value;
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				  var current_location = results[0].geometry.location;	    	  
				  map.setCenter(current_location);
				  map.setZoom(17);  // Why 17? Because it looks good.	          
				  marker.setPosition(current_location);
				  marker.setVisible(true);
					
			  }
			});
			// If the place has a geometry, then present it on a map.	        
				   
			//hainn end add		
			google.maps.event.addListener(autocomplete, 'place_changed', function() {          
			  infowindow.close();
			  marker.setVisible(false);
			  input.className = '';
			  
			  var place = autocomplete.getPlace();
			  if (!place.geometry) {
				// Inform the user that the place was not found and return.
				input.className = 'notfound';
				return;
			  }

			  // If the place has a geometry, then present it on a map.
			  if (place.geometry.viewport) {
				//map.fitBounds(place.geometry.viewport);
			  } else {
				map.setCenter(place.geometry.location);
				map.setZoom(17);  // Why 17? Because it looks good.
			  }
			 
			  var image = {
				url: place.icon,
				size: new google.maps.Size(71, 71),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17, 34),
				scaledSize: new google.maps.Size(35, 35)
			  };
			  marker.setIcon(image);
			  marker.setPosition(place.geometry.location);
			  marker.setVisible(true);
			  document.getElementById('latitude').value 	= place.geometry.location.lat();
			  document.getElementById('longitude').value 	= place.geometry.location.lng();
			  var address = '';
			  if (place.address_components) {
				address = [
				  (place.address_components[0] && place.address_components[0].short_name || ''),
				  (place.address_components[1] && place.address_components[1].short_name || ''),
				  (place.address_components[2] && place.address_components[2].short_name || '')
				].join(' ');
			  }

			  infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			  infowindow.open(map, marker);
			});

			// Sets a listener on a radio button to change the filter type on Places
			// Autocomplete.
			function setupClickListener(id, types) {
			  var radioButton = document.getElementById(id);
			  google.maps.event.addDomListener(radioButton, 'click', function() {
				autocomplete.setTypes(types);
			  });
			}

			setupClickListener('changetype-all', []);
			setupClickListener('changetype-establishment', ['establishment']);
			setupClickListener('changetype-geocode', ['geocode']);
		  }
		  google.maps.event.addDomListener(window, 'load', initialize);
	<?php echo '</script'; ?>
>
		<div class="row">			
					<div class="col-lg-6">												
						<div id="map-canvas"></div>	
					</div>			
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
