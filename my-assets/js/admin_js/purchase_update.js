    // Add input field for new Invoice 
   var row = $("#purchaseTable tbody tr").length;

   var count = row +1;
  
    var limits = 500;

    //Add purchase input field
    function addPurchaseInputField(e) {
        var t = $("tbody#addPurchaseItem tr:first-child").html();
        count == limits ? alert("You have reached the limit of adding " + count + " inputs") : $("tbody#addPurchaseItem").append("<tr>" + t + "</tr>")
    }

    //Calcucate Invoice Add Items
    function quantity_calculate(item)
    {
        var qnty =$("#total_qntt_"+item).val();
        var rate =$("#price_item_"+item).val();

        var total_amnt = qnty * rate;
        $("#total_price_"+item).val(total_amnt);
        calculateSum();
    }

    //Calculate summation 
    function calculateSum() {

    var t = 0,
        a = 0,
        e = 0,
        o = 0,
        p = 0;

        //Total Discount
        $(".total_discount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (p += parseFloat(this.value))
        }), 
        
        $("#total_discount_ammount").val(p.toFixed(2,2)), 

        //Total Price
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
        }), 
     
        e = t.toFixed(2,2);
        f = p.toFixed(2,2);

        var test = +e+ -f;
        $("#grandTotal").val(test.toFixed(2,2));
    }
        
    //Qnty calculate
    $("body").on("keyup change", ".qty_calculate", function() {
        var item    = $(this).val();
        var price   = $(this).parent().next().children().val();
        var discount = $(this).parent().next().next().children().val();
        var all_discount = $(this).parent().next().next().next().next().children().next();
        var dis_type = $(this).parent().next().next().children().next().val();

        if (item > 0) {
            if (dis_type == 1) {
                var total_price = item * price;

                // Discount cal per product
                var dis   = total_price * discount / 100;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().next().next().children().val(total_price);

            }else if(dis_type == 2){

                var total_price = item * price;

                // Discount cal per product
                var dis   = discount * item;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().next().next().children().val(total_price);

            }else if(dis_type == 3){
                var total_price = item * price;

                // Discount cal per product
                all_discount.val(discount);

                //Total price calculate per product
                var temp   = total_price - discount;
                $(this).parent().next().next().next().children().val(total_price);
            }
        }else {
            var total_price = item * price;
            $(this).parent().next().next().next().children().val(total_price);
        }
        calculateSum();
    });  

    //Qnty calculate by rate
    $("body").on("keyup change", ".qty_calculate_rate", function() {
        var price   = $(this).val();
        var item    = $(this).parent().prev().children().val();

        var discount = $(this).parent().next().children().val();
        var dis_type = $(this).parent().next().children().next().val();
        var all_discount = $(this).parent().next().next().next().children().next();

        if (item > 0) {
            if (dis_type == 1) {
                var total_price = item * price;

                // Discount cal per product
                var dis   = total_price * discount / 100;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().next().children().val(total_price);

            }else if(dis_type == 2){
                var total_price = item * price;

                // Discount cal per product
                var dis   = discount * item;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().next().children().val(total_price);

            }else if(dis_type == 3){
                var total_price = item * price;

                // Discount cal per product
                all_discount.val(discount);

                //Total price calculate per product
                var temp   = total_price - discount;
                $(this).parent().next().next().children().val(total_price);
            }
        }else {
            var total_price = item * price;
            $(this).parent().next().next().children().val(total_price);
        }
        calculateSum();
    });


    //Qnty calculate by discount
    $("body").on("keyup change", ".qty_calculate_discount", function() {
        var discount     = $(this).val();
        var item         = $(this).parent().prev().prev().children().val();

        var price        = $(this).parent().prev().children().val();
        var dis_type     = $(this).next().val();
        var all_discount = $(this).parent().next().next().children().next();

        if (item > 0) {
            if (dis_type == 1) {
                var total_price = item * price;

                // Discount cal per product
                var dis   = total_price * discount / 100;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().children().val(total_price);

            }else if(dis_type == 2){
                var total_price = item * price;

                // Discount cal per product
                var dis   = discount * item;
                all_discount.val(dis);

                //Total price calculate per product
                var temp = total_price - dis;
                $(this).parent().next().children().val(total_price);

            }else if(dis_type == 3){
                var total_price = item * price;

                // Discount cal per product
                all_discount.val(discount);

                //Total price calculate per product
                var temp   = total_price - discount;
                $(this).parent().next().children().val(total_price);
            }
        }else {
            var total_price = item * price;
            $(this).parent().next().children().val(total_price);
        }
        calculateSum();
    });
    
    //Quantity calculate
    $("body").on("keyup change", ".quantity_calculate", function() {
        var qnty   = $(this).parent().parent().children().next().children().val();
        var rate   = $(this).parent().parent().children().next().next().children().val();
        $(this).parent().parent().children().next().next().next().next().children().val(qnty * rate);
        calculateSum();
    });

    //Delete row
    function deleteRow(e) {
        var t = $("#purchaseTable > tbody > tr").length;
        if (1 == t) alert("There only one row you can't delete.");
        else {
            var a = e.parentNode.parentNode;
            a.parentNode.removeChild(a)
        }
        calculateSum()
    }