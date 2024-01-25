<?php
$cache_file = "loan.json";
    header('Content-Type: text/javascript; charset=utf8');
?>
var loanList = <?php echo file_get_contents($cache_file); ?> ; 

APchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    $(function() {
      
        $( ".loanSelection" ).autocomplete(
		{
            source:loanList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".loan_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".loan_hidden_value").val(ui.item.value);
				$(this).val(ui.item.label);
				$(this).unbind("change");
				return false;
			}
		});
			$( ".loanSelection" ).focus(function(){
				$(this).change(APchange);
			
			});
    });
