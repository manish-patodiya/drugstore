<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('hrm') ?></h1>
            <small><?php echo $title ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('hrm') ?></a></li>
                <li class="active"><?php echo $title ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('message');
        }
        $error_message = $this->session->userdata('error_message');
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('error_message');
        }
        ?>

        <!-- New Employee Type -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                  
                    <div class="panel-body">

                         <?php echo form_open_multipart('Chrm/update_employee') ?>
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-div"><?php echo display('first_name') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <input name="first_name" class="form-control" type="text" placeholder="<?php echo display('first_name') ?>" id="first_name" value="<?php echo $employee_data[0]['first_name']?>">
                            <input type="hidden" name="id" value="<?php echo $employee_data[0]['id'];?>">
                            <input type="hidden" name="old_first_name" value="<?php echo $employee_data[0]['first_name']?>">
                        </div>
                         <label for="last_name" class="col-sm-2 col-form-div"><?php echo display('last_name') ?><i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <input name="last_name" class="form-control" type="text" placeholder="<?php echo display('last_name') ?>" id="last_name" value="<?php echo $employee_data[0]['last_name']?>">
                             <input type="hidden" name="old_last_name" value="<?php echo $employee_data[0]['last_name']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="designation" class="col-sm-2 col-form-div"><?php echo display('designation') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <?php echo form_dropdown('designation',$desig,$employee_data[0]['designation'],'class="form-control" style="width:100%"') ?>
                        </div>
                         <label for="phone" class="col-sm-2 col-form-div"><?php echo display('phone') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <input name="phone" class="form-control" type="number" placeholder="<?php echo display('phone') ?>" id="phone" value="<?php echo $employee_data[0]['phone']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rate_type" class="col-sm-2 col-form-div"><?php echo display('rate_type') ?></label>
                        <div class="col-sm-4">
                          <select name="rate_type" class="form-control">
                              <option value="">Select type</option>
                              <option value="1" <?php if($employee_data[0]['rate_type']==1){echo 'selected';}?>><?php echo display('hourly')?></option>
                              <option value="2"  <?php if($employee_data[0]['rate_type']==2){echo 'selected';}?>><?php echo display('salary')?></option>
                          </select>
                        </div>
                         <label for="hour_rate_or_salary" class="col-sm-2 col-form-div"><?php echo display('hour_rate_or_salary') ?> </label>
                        <div class="col-sm-4">
                            <input name="hrate" class="form-control" type="text" placeholder="<?php echo display('hour_rate_or_salary') ?>" id="hrate" value="<?php echo $employee_data[0]['hrate']?>">
                        </div>
                         
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-div"><?php echo display('email') ?></label>
                        <div class="col-sm-4">
                            <input name="email" class="form-control" type="email" placeholder="<?php echo display('email') ?>" id="email" value="<?php echo $employee_data[0]['email']?>">
                        </div>
                         <label for="blood_group" class="col-sm-2 col-form-div"><?php echo display('blood_group') ?> </label>
                        <div class="col-sm-4">
                            <input name="blood_group" class="form-control" type="text" placeholder="<?php echo display('blood_group') ?>" id="blood_group" value="<?php echo $employee_data[0]['blood_group']?>">
                        </div>
                         
                    </div>
                     <div class="form-group row">
                    <label for="address_line_1" class="col-sm-2 col-form-div"><?php echo display('address_line_1') ?></label>
                        <div class="col-sm-4">
                           <textarea name="address_line_1" class="form-control" placeholder="<?php echo display('address_line_1') ?>" id="address_line_1"><?php echo $employee_data[0]['address_line_1']?></textarea> 
                        </div>
                       <label for="address_line_2" class="col-sm-2 col-form-div"><?php echo display('address_line_2') ?></label>
                        <div class="col-sm-4">
                           <textarea name="address_line_2" class="form-control" placeholder="<?php echo display('address_line_2') ?>" id="address_line_2"><?php echo $employee_data[0]['address_line_2']?></textarea> 
                        </div>
                        
                    </div>
                    <div class="form-group row">
                    <label for="picture" class="col-sm-2 col-form-div"><?php echo display('picture') ?></label>
                        <div class="col-sm-4">
                            <input type="file" name="image" class="form-control"  placeholder="<?php echo display('picture') ?>" id="image">
                            <input type="hidden" name="old_image" value="<?php echo $employee_data[0]['image'];?>">
                        </div>
                        <label for="country" class="col-sm-2 col-form-div"><?php echo display('country') ?> </label>
                        <div class="col-sm-4">
                          <select name="country" class="form-control" style="width: 100%">
               <option value="<?php echo $employee_data[0]['country'];?>" selected><?php echo $employee_data[0]['country'];?></option>
                <option value="Afganistan" rel="">Afghanistan</option>
                <option value="Albania" rel="">Albania</option>
                <option value="Algeria" rel="">Algeria</option>
                <option value="American Samoa" rel="">American Samoa</option>
                <option value="Andorra" rel="">Andorra</option>
                <option value="Angola" rel="">Angola</option>
                <option value="Anguilla" rel="">Anguilla</option>
                <option value="Antigua &amp; Barbuda" rel="">Antigua &amp; Barbuda</option>
                <option value="Argentina" rel="">Argentina</option>
                <option value="Armenia" rel="">Armenia</option>
                <option value="Aruba" rel="">Aruba</option>
                <option value="Australia" rel="">Australia</option> 
                <option value="Austria" rel="">Austria</option>
                <option value="Azerbaijan" rel="">Azerbaijan</option>
                <option value="Bahamas" rel="">Bahamas</option>
                <option value="Bahrain" rel="">Bahrain</option>
                <option value="Bangladesh" rel="">Bangladesh</option>
                <option value="Barbados" rel="">Barbados</option>
                <option value="Belarus" rel="">Belarus</option>
                <option value="Belgium" rel="">Belgium</option>
                <option value="Belize" rel="">Belize</option>
                <option value="Benin" rel="">Benin</option>
                <option value="Bermuda" rel="">Bermuda</option>
                <option value="Bhutan" rel="">Bhutan</option>
                <option value="Bolivia" rel="">Bolivia</option>
                <option value="Bonaire" rel="">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina" rel="">Bosnia &amp; Herzegovina</option>
                <option value="Botswana" rel="">Botswana</option>
                <option value="Brazil" rel="">Brazil</option>
                <option value="British Indian Ocean Ter" rel="">British Indian Ocean Ter</option>
                <option value="Brunei" rel="">Brunei</option>
                <option value="Bulgaria" rel="">Bulgaria</option>
                <option value="Burkina Faso" rel="">Burkina Faso</option>
                <option value="Burundi" rel="">Burundi</option>
                <option value="Cambodia" rel="">Cambodia</option>
                <option value="Cameroon" rel="">Cameroon</option>
                <option value="Canada" rel="">Canada</option>
                <option value="Canary Islands" rel="">Canary Islands</option>
                <option value="Cape Verde" rel="">Cape Verde</option>
                <option value="Cayman Islands" rel="">Cayman Islands</option>
                <option value="Central African Republic" rel="">Central African Republic</option>
                <option value="Chad" rel="">Chad</option>
                <option value="Channel Islands" rel="">Channel Islands</option>
                <option value="Chile" rel="">Chile</option>
                <option value="China" rel="">China</option>
                <option value="Christmas Island" rel="">Christmas Island</option>
                <option value="Cocos Island" rel="">Cocos Island</option>
                <option value="Colombia" rel="">Colombia</option>
                <option value="Comoros" rel="">Comoros</option>
                <option value="Congo" rel="">Congo</option>
                <option value="Cook Islands" rel="">Cook Islands</option>
                <option value="Costa Rica" rel="">Costa Rica</option>
                <option value="Cote DIvoire" rel="">Cote D'Ivoire</option>
                <option value="Croatia" rel="">Croatia</option>
                <option value="Cuba" rel=""Cuba</option>
                <option value="Curaco" rel="">Curacao</option>
                <option value="Cyprus" rel="">Cyprus</option>
                <option value="Czech Republic" rel="">Czech Republic</option>
                <option value="Denmark" rel="">Denmark</option>
                <option value="Djibouti" rel="">Djibouti</option>
                <option value="Dominica" rel="">Dominica</option>
                <option value="Dominican Republic" rel="">Dominican Republic</option>
                <option value="East Timor" rel="">East Timor</option>
                <option value="Ecuador" rel="">Ecuador</option>
                <option value="Egypt" rel="">Egypt</option>
                <option value="El Salvador" rel="">El Salvador</option>
                <option value="Equatorial Guinea" rel="">Equatorial Guinea</option>
                <option value="Eritrea" rel="">Eritrea</option>
                <option value="Estonia" rel="">Estonia</option>
                <option value="Ethiopia" rel="">Ethiopia</option>
                <option value="Falkland Islands" rel="">Falkland Islands</option>
                <option value="Faroe Islands" rel="">Faroe Islands</option>
                <option value="Fiji" rel="">Fiji</option>
                <option value="Finland" rel="">Finland</option>
                <option value="France" rel="">France</option>
                <option value="French Guiana" rel="">French Guiana</option>
                <option value="French Polynesia" rel="">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany" rel="">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece" rel="">Greece</option>
                <option value="Greenland" rel="">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong" rel="">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India" rel="">India</option>
                <option value="Indonesia" rel="">Indonesia</option>
                <option value="Iran" rel=""Iran</option>
                <option value="Iraq" rel="">Iraq</option>
                <option value="Ireland" rel="">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy" rel="">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan" rel="">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya" rel="">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North" rel="">Korea North</option>
                <option value="Korea Sout" rel="">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines" rel="">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar" rel="">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia" rel="">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia" rel="">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore" rel="">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa" rel="">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka" rel="">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden" rel="">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand" rel="">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates" rel="">United Arab Emirates</option>
                <option value="United Kingdom" rel="">United Kingdom</option>
                <option value="United States of America" rel="">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State" rel="">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen" rel="">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                         
                    </div>
                 
                <div class="form-group row">
                 <label for="city" class="col-sm-2 col-form-div"><?php echo display('city') ?></label>
                        <div class="col-sm-4">
                            <input name="city" class="form-control" type="text" placeholder="<?php echo display('city') ?>" id="city" value="<?php echo $employee_data[0]['city'];?>">
                            
                        </div>
                     <label for="zip" class="col-sm-2 col-form-div"><?php echo display('zip') ?></label>
                        <div class="col-sm-4">
                            <input name="zip" class="form-control" type="text" placeholder="<?php echo display('zip') ?>" id="zip" value="<?php echo $employee_data[0]['zip'];?>">
                        </div>
                 </div>
                    

                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
</div>
