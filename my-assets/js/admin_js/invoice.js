//Add Input Field Of Row
var row = 1;
var count = 2;
var limits = 500;
setTimeout(() => {
    row = $("#normalinvoice tbody tr").length;
    count = row + 1;
}, 1000);


function addInputField(t) {
    var taxnumber = $("#txfieldnum").val();
    var tbfild = '';
    for (var i = 0; i < taxnumber; i++) {
        var taxincrefield = '<input id="total_tax' + i + '_' + count + '" class="total_tax' + i + '_' + count + '" type="hidden"><input id="all_tax' + i + '_' + count + '" class="total_tax' + i + '" type="hidden" name="tax[]">';
        tbfild += taxincrefield;
    }
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
        count
        var a = "product_name_" + count,
            tabindex = count * 5,
            e = document.createElement("tr");
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        tab7 = tabindex + 7;
        tab8 = tabindex + 8;
        tab9 = tabindex + 9;
        tab10 = tabindex + 10;
        tab11 = tabindex + 11;
        e.innerHTML = "<td><input type='text' name='product_name' onkeyup='invoice_productList(" + count + ");' onkeypress='invoice_productList(" + count + ");' class='form-control productSelection' placeholder='Product Name' id='" + a + "' required tabindex='" + tab1 + "'><input type='hidden' class='autocomplete_hidden_value  product_id_" + count + "' name='product_id[]' id='SchoolHiddenId'/></td><td><select class='form-control' required id='batch_id_" + count + "'  name='batch_id[]' onchange='product_stock(" + count + ")' tabindex='" + tab2 + "'><option></option></select>     <td><input type='text' name='available_quantity[]' id='available_quantity_" + count + "' class='form-control text-right available_quantity_" + count + "' value='0' readonly='readonly' /></td> <td id='expire_date_" + count + "'></td><!--td><input class='form-control text-right unit_" + count + " valid' value='None' readonly='' aria-invalid='false' type='text'></td--><td> <input type='text' name='product_quantity[]' onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='total_qntt_" + count + "' class='total_qntt_" + count + " form-control text-right' placeholder='0.00' min='0' tabindex='" + tab3 + "' required/></td><td><input type='text' name='product_rate[]' onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='price_item" + count + " form-control text-right' required placeholder='0.00' readonly min='0' /></td><!--td><input type='text' name='discount[]' onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='discount_" + count + "' class='form-control text-right' placeholder='0.00' min='0'/><input type='hidden' value='' name='discount_type' id='discount_type_" + count + "'></td--><td class='text-right'><input class='total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td>" + tbfild + "<input type='hidden' id='all_discount_" + count + "' class='total_discount dppr'/><a style='text-align: right;' class='btn btn-danger'  value='Delete' onclick='deleteRow(this)'><i class='fa fa-close'></i></a></td>",
            document.getElementById(t).appendChild(e),
            // theParent = document.getElementById(t),
            // theParent.insertBefore(e, theParent.firstChild);
            document.getElementById(a).focus(),
            document.getElementById("add_invoice_item").setAttribute("tabindex", tab7);
        document.getElementById("invdcount").setAttribute("tabindex", tab8);
        document.getElementById("paidAmount").setAttribute("tabindex", tab9);
        document.getElementById("full_paid_tab").setAttribute("tabindex", tab10);
        document.getElementById("add_invoice").setAttribute("tabindex", tab11);
        count++
    }
}

//Edit invoice field
function editInputField(t) {
    var row = $("#normalinvoice tbody tr").length;
    var count = row + 1;
    var limits = 500;
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
        var a = "product_name" + count,
            tabindex = count * 5,
            e = document.createElement("tr");
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        tab7 = tabindex + 7;
        tab8 = tabindex + 8;
        tab9 = tabindex + 9;
        e.innerHTML = "<td><input type='text' name='product_name' onkeyup='invoice_productList(" + count + ");' class='form-control productSelection' placeholder='Product Name' id='" + a + "' required tabindex='" + tab1 + "'><input type='hidden' class='autocomplete_hidden_value  product_id_" + count + "' name='product_id[]' id='SchoolHiddenId'/></td><td><select class='form-control' id='batch_id_" + count + "' name='batch_id[]' onchange='product_stock(" + count + ")'><option></option></select>     <td><input type='text' name='available_quantity[]' id='available_quantity_" + count + "' class='form-control text-right available_quantity_" + count + "' value='0' readonly='readonly' /></td> <td id='expire_date_" + count + "'></td><!--td><input class='form-control text-right unit_" + count + " valid' value='None' readonly='' aria-invalid='false' type='text'></td--><td> <input type='text' name='product_quantity[]' onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='total_qntt_" + count + "' class='total_qntt_" + count + " form-control text-right' placeholder='0.00' min='0' tabindex='" + tab2 + "'/></td><td><input type='text' name='product_rate[]' readonly onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' readonly class='price_item" + count + " form-control text-right' required placeholder='0.00' min='0'/></td><!--td><input type='text' name='discount[]' onkeyup='quantity_calculate(" + count + "),checkqty(" + count + ");' onchange='quantity_calculate(" + count + ");' id='discount_" + count + "' class='form-control text-right' placeholder='0.00' min='0' tabindex='" + tab4 + "' /><input type='hidden' value='' name='discount_type' id='discount_type_" + count + "'></td--><td class='text-right'><input class='total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td><input type='hidden' id='total_tax_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_tax_" + count + "' class=' total_tax' name='tax[]'/><input type='hidden'  id='total_discount_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_discount_" + count + "' class='total_discount'/><button tabindex='" + tab5 + "' style='text-align: right;' class='btn btn-danger' type='button' value='Delete' onclick='deleteRow(this)'>Delete</button></td>",
            document.getElementById(t).appendChild(e),
            document.getElementById(a).focus(),
            document.getElementById("add_invoice_item").setAttribute("tabindex", tab6);
        document.getElementById("paidAmount").setAttribute("tabindex", tab7);
        document.getElementById("full_paid_tab").setAttribute("tabindex", tab8);
        document.getElementById("add_invoice_item").setAttribute("tabindex", tab9);
        count++
    }
}

//Quantity calculat
function quantity_calculate(item) {
    // alert(item);
    var quantity = $("#total_qntt_" + item).val() || 0;
    var price_item = $("#price_item_" + item).val();
    //var discount = $("#discount_" + item).val();
    var invoice_discount = $("#invdcount").val();
    var total_tax = $("#total_tax_" + item).val();
    var total_discount = $("#total_discount_" + item).val();
    //var dis_type = $("#discount_type_" + item).val();
    var taxnumber = $("#txfieldnum").val();

    var available_quantity = $("#available_quantity_" + item).val();
    if (parseInt(quantity) > parseInt(available_quantity)) {
        var message = "You can Sale maximum " + available_quantity + " Items";
        $("#total_qntt_" + item).val('');
        var quantity = 0;
        alert(message);
        $("#total_price_" + item).val(0);
        for (var i = 0; i < taxnumber; i++) {
            $("#all_tax" + i + "_" + item).val(0);
            // quantity_calculate(item);
        }


    }


    if (quantity >= 0) {
        let tax_rate = 0;
        for (var i = 0; i < taxnumber; i++) {
            tax_rate += $("#total_tax" + i + "_" + item).val()
        }
        var price_mrp = quantity * price_item;
        var price = (quantity * price_item * 100 / (100 + (tax_rate * 100))).toFixed(2);

        $("#total_price_" + item).val(price_mrp.toFixed(2));
        //             alert(dis_type+"distype");

        // Discount cal per product
        //            var dis = +(price * discount / 100) + +invoice_discount;
        //var dis = +(price * discount / 100) + + invoice_discount;


        //$("#all_discount_" + item).val(dis);

        //Total price calculate per product
        var temp = price;
        var ttletax = 0;
        for (var i = 0; i < taxnumber; i++) {
            var tax = (temp - ttletax) * $("#total_tax" + i + "_" + item).val();
            ttletax += Number(tax);
            $("#all_tax" + i + "_" + item).val(tax);
        }

    } else {
        let tax_rate = 0;
        for (var i = 0; i < taxnumber; i++) {
            tax_rate += Number($("#total_tax" + i + "_" + item).val());
        }
        var price_mrp = quantity * price_item;
        var n = (quantity * price_item * 100 / (100 + (tax_rate * 100))).toFixed(2);
        $("#total_price_" + item).val(price_mrp.toFixed(2));
        var temp = n;
        var ttletax = 0;
        for (var i = 0; i < taxnumber; i++) {
            var tax = (temp - ttletax) * $("#total_tax" + i + "_" + item).val();
            ttletax += Number(tax);
            $("#all_tax" + i + "_" + item).val(tax);
            console.log(tax);
        }
    }
    calculateSum();
    invoice_paidamount();
}
//Calculate Sum
function calculateSum() {
    document.getElementById("change").value = '';
    var taxnumber = $("#txfieldnum").val();

    var t = 0,
        a = 0,
        e = 0,
        o = 0,
        f = 0,
        p = 0,
        ad = 0,
        invdis = $("#invdcount").val();
    //Total Tax
    for (var i = 0; i < taxnumber; i++) {
        var j = 0;
        $(".total_tax" + i).each(function() {
            isNaN(this.value) || 0 == this.value.length || (j += parseFloat(this.value))
        });
        $("#total_tax_amount" + i).val(j.toFixed(2, 2));

    }
    //Total Discount
    $(".total_discount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (p += parseFloat(this.value))
        }),

        $("#total_discount_ammount").val(p.toFixed(2, 2)),

        $(".totalTax").each(function() {
            isNaN(this.value) || 0 == this.value.length || (f += parseFloat(this.value))
        }),
        $("#total_tax_amount").val(f.toFixed(2, 2)),

        //Total Price
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
        }),
        $(".dppr").each(function() {
            isNaN(this.value) || 0 == this.value.length || (ad += parseFloat(this.value))
        }),

        o = a.toFixed(2, 2),
        e = t.toFixed(2, 2);
    tx = f.toFixed(2, 2),
        ds = p.toFixed(2, 2);

    var grand_total = +e + -ds + -invdis + +ad;;
    // var invdis    = $("#invdcount").val();
    var totaldiscount = +ds + +invdis;
    $("#grandTotal").val(grand_total.toFixed(2, 2));
    $("#total_discount_ammount").val(totaldiscount.toFixed(2, 2));
    //var previous = $("#previous").val();
    var gt = $("#grandTotal").val();

    var grnt_totals = +gt;
    $("#n_total, #paidAmount").val(grnt_totals.toFixed(2, 2));
    $('#paidAmount').val(Math.round(grnt_totals).toFixed(2, 2));
    let round_of = $('#paidAmount').val() - $("#grandTotal").val();
    $('#round-of-price').val(round_of.toFixed(2, 2));
}

//Invoice Paid Amount
function invoice_paidamount() {

    var t = $("#n_total").val(),

        a = $("#paidAmount").val(),
        e = t - a;
    d = a - t;
    if (e > 0) {
        $("#dueAmmount").val(e.toFixed(2, 2))
    } else {
        $("#dueAmmount").val(0)
        $("#change").val(d.toFixed(2, 2))

    }
}
//Stock Limit
function stockLimit(t) {
    var a = $("#total_qntt_" + t).val(),
        e = $(".product_id_" + t).val(),
        o = $(".baseUrl").val();
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function(e) {
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0")
            }
        }
    })
}

function stockLimitAjax(t) {
    var a = $("#total_qntt_" + t).val(),
        e = $(".product_id_" + t).val(),
        o = $(".baseUrl").val();
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function(e) {
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0.00"), calculateSum()
            }
        }
    })
}

//Invoice full paid
function full_paid() {
    var grandTotal = $("#n_total").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculateSum();
}

function invoice_discount() {
    var gt = $("#n_total").val();
    var invdis = $("#invdcount").val();
    var grnt_totals = gt - invdis;

    $("#total_discount_ammount").val(grnt_totals.toFixed(2, 2))
    $("#invtotal").val(grnt_totals.toFixed(2, 2))
    $("#dueAmmount").val(grnt_totals.toFixed(2, 2))

}
//Delete a row of table
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) alert("There only one row you can't delete.");
    else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e),
            calculateSum();
        invoice_paidamount();
    }
}