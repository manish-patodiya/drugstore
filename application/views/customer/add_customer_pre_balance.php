<!-- Previous balance adjustment start -->
<h2><?php echo display('previous_balance_adjustment') ?></h2>
<div class="form-container">
    <form class="form-vertical" action="<?php echo base_url('Ccustomer/insert_customer') ?>" id="insert_customer"
        method="post" name="insert_product" enctype="multypart/formdata">
        <legend><?php echo display('previous_balance_adjustment') ?></legend>
        <div class="row-fluid">
            <table class="table table-condensed table-striped">
                <thead>
                    <tr>
                        <th class="span5 text-right"><?php echo 'Patient Name' ?></th>
                        <th class="span5 text-right"><?php echo display('previous_balance') ?></th>
                    </tr>
                </thead>
                <tbody id="form-actions">
                    <tr class="">
                        <td class="span5">
                            <input type="text" tabindex="2" class="span13" name="customer_name"
                                placeholder="Customer Name" required />
                        </td>
                        <td class="span5">
                            <input type="text" tabindex="3" class="span13" name="pre_balance"
                                placeholder="Previous Balance" required />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-actions">
            <input type="submit" id="add-customer" class="btn btn-primary btn-large" name="add-customer"
                value="<?php echo display('save') ?>" />
            <input type="submit" value="<?php echo display('save_and_add_another_one') ?>" name="add-customer-another"
                class="btn btn-large" id="add-customer-another">
        </div>
    </form>
</div>
<!-- Previous balance adjustment start -->