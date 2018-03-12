<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
<section id="my-account-security-form" class="page container">
    <form id="userSecurityForm" class="form-horizontal" action="dashboard.html" method="post">
        <div class="container">
            <div class="alert alert-block alert-info">
                <p>
                    Enter updated security information for your account as desired.<br>Note all fields mandatory fields.</br>
                </p>
            </div>
            <div class="row">
                <div id="acct-row" class="span7">
                    <fieldset>
                        <legend>Registration</legend><br>
                        <div class="control-group ">
                            <label class="control-label">First Name <span class="required"></span></label>
                            <div class="controls">
                                <input id="first-name" name="firstname" class="span4" type="text" value="" autocomplete="false" required>

                            </div>
                            <div class="control-group ">
                                <p>&nbsp;</p>
                                <label class="control-label">Last Name<span class="required"></span> </label>
                                <div class="controls">
                                    <input id="last-name" name="lastname" class="span4" type="text" value="" autocomplete="false" required>

                                </div>
                                <div class="control-group ">
                                    <p>&nbsp;</p>
                                    <label class="control-label">E-mail<span class="required"></span> </label>
                                    <div class="controls">
                                        <input id="email" name="E-mail" class="span4" type="email" value="" autocomplete="false" required>

                                    </div>

                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input id="new-pass" name="password" class="span4" placeholder="password" type="password" value="" autocomplete="false" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Confirm Password</label>
                                    <div class="controls">
                                        <input id="confirm-pass" name="confirmpassword" placeholder="confirmpassword" class="span4" type="password" value="" autocomplete="false" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                    </div>
                                </div>
                                </fieldset>
                            </div>
                            <p>&nbsp;</p>
                            <div id="acct-verify-row" class="span9">
                                <fieldset>
                                    <legend> </LEGEND>
                                    <p>&nbsp;</p>
                                    <div class="control-group">
                                        <label for="challengeQuestion" class="control-label">State</label>
                                        <div class="controls">
                                            <select id="challenge_question_control" class="span5">
                                                <option value="" required>-- Select Your State --</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttaranchal">Uttaranchal</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label class="control-label">Phone Number</label>
                                        <div class="controls">
                                            <input id="phone-number" name="phonenumber" class="span5" type="tel" value="+91 " maxlength="14" autocomplete="false">

                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label class="control-label">Zipcode</label>
                                        <div class="controls">
                                            <input id="zipcode" name="zipcode" class="span5" type="" maxlength="6" value="" autocomplete="false">

                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <footer id="submit-actions" class="form-actions">
                            <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Submit</button>
                        </footer>
        </div>
    </form>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-transition.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-alert.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-modal.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-dropdown.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-scrollspy.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-tab.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-tooltip.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-popover.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-button.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-collapse.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-carousel.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-typeahead.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-affix.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-tablesorter.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-chosen.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/virtual-tour.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-validatepass.js" type="text/javascript"></script>
</section>


