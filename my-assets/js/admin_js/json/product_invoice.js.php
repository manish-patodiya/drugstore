<?php
$cache_file = "product.json";
    header('Content-Type: text/javascript; charset=utf8');
?>
var productList = <?php echo file_get_contents($cache_file); ?> ; 

APchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function invoice_productList(cName) {
       
		var priceClass = 'price_item'+cName;
	
		var unit = 'unit_'+cName;
		var tax = 'total_tax_'+cName;
		var discount_type = 'discount_type_'+cName; 
		var batch_id = 'batch_id_'+cName;

        $( ".productSelection" ).autocomplete(
		{
            source: productList,
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
				var dataString = 'product_id='+ id;
				var base_url = $('.baseUrl').val();

				$.ajax
				   ({
						type: "POST",
						url: base_url+"Cinvoice/retrieve_product_data_inv",
						data: dataString,
						cache: false,
						success: function(data)
						{
							var obj = jQuery.parseJSON(data);
								for (var i = 0; i < (obj.txnmber); i++) {
							var txam = obj.taxdta[i];
							var txclass = 'total_tax'+i+'_'+cName;
                           $('.'+txclass).val(txam);
							}

                         $('.'+priceClass).val(obj.price);
							$('.'+unit).val(obj.unit);
							$('.'+tax).val(obj.tax);
							$('#txfieldnum').val(obj.txnmber);
							$('#'+discount_type).val(obj.discount_type);
                            $('#'+batch_id).html(obj.batch);
							
							//This Function Stay on others.js page
							quantity_calculate(cName);
							
						} 
					});
				
				$(this).unbind("change");
				return false;
			}
		});
		$( ".productSelection" ).focus(function(){
			$(this).change(APchange);
		
		});
    }


