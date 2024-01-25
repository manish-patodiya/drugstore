<!-- Manage service Start -->
<div class="content-wrapper">
    

    <section class="content">

  
        <!-- Manage service -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                         <h1>service list</h1>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table  border="1" width="100%" style="margin-top:25px;border-collapse:collapse;">
                                  <caption style="text-align: center;">
                               {company_info}
                                     <address style="margin-top:10px">
                                        <strong style="font-size: 20px; ">{company_name}</strong><br>
                                        {address}<br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr> {mobile}<br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr> 
                                        {email}<br>
                                        <abbr><b><?php echo display('website') ?>:</b></abbr> 
                                        {website}
                                    </address>

                               {/company_info}
                           </caption>
                                <thead>
                                    <tr>
                                        <th> <?php echo display('sl')?></th>
                                        <th class="text-center"><?php echo display('service_name') ?></th>
                                         <th class="text-center"><?php echo display('charge') ?></th>
                                         <th class="text-center"><?php echo display('description') ?></th>
                                          <th class="text-center"><?php echo display('tax') ?>1</th>
                                          <th class="text-center"><?php echo display('tax') ?>2</th>
                                          <th class="text-center"><?php echo display('tax') ?>3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($service_list) {
                                        ?>
                                        {service_list}
                                        <tr>
                                          <td> {sl}</td>
                                          <td class="text-center">{service_name}</td>
                                          <td class="text-center">{charge}</td>
                                          <td class="text-center">{description}</td>
                                          <td class="text-center">{tax1}</td>
                                          <td class="text-center">{tax2}</td>
                                          <td class="text-center">{tax3}</td>

                                    </tr>
                                    {/service_list}
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


  </div>

        
    </section>
</div>




