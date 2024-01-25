<?php
$cache_file = "service.json";
    header('Content-Type: text/javascript; charset=utf8');
?>
var serviceList = <?php echo file_get_contents($cache_file); ?> ; 

APchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function invoice_serviceList(cName) {

		var priceClass = 'price_item'+cName;
		var discount_type = 'discount_type_'+cName;
        var tax = 'total_tax_'+cName;
        var tax2 = 'total_tax2_'+cName;
        var tax3 = 'total_tax3_'+cName;
        $( ".serviceSelection" ).autocomplete(
		{
            source: serviceList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				
				var id=ui.item.value;

				var dataString = 'service_id='+ id;
				var base_url = $('.baseUrl').val();

				
				$.ajax
				   ({
						type: "POST",
						url: base_url+"Cservice/retrieve_service_data_inv",
						data: dataString,
						cache: false,
						success: function(data)
						{
                            

							var obj = jQuery.parseJSON(data);
							console.log(obj);
							for (var i = 0; i < (obj.txnmber); i++) {
							var txam = obj.taxdta[i];
							var txclass = 'total_tax'+i+'_'+cName;
                           $('.'+txclass).val(obj.taxdta[i]);
							}
							//alert(obj.txnmber);
							$('.'+priceClass).val(obj.price);
							$('#'+discount_type).val(obj.discount_type);
							$('#txfieldnum').val(obj.txnmber);
							//This Function Stay on others.js page
							quantity_calculate(cName);
							
						} 
					});
				
				$(this).unbind("change");
				return false;
			}
		});
		$( ".serviceSelection" ).focus(function(){
			$(this).change(APchange);
		
		});
    }


