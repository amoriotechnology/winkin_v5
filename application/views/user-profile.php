<div class="main-content app-content">
    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Profile</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">

                <div class="card-body p-3">

                <form method="post" id="userform_update">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>">
                    <div class="pt-4"> <div class="login_res"></div> </div>  

                    <div class="pt-2 text-right"><span class="danger-text text-right">* &nbsp; Required Fields</span></div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name <span class="danger-text">*</span> </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="<?= isset($user['fld_name']) ? htmlspecialchars($user['fld_name']) : '' ?>">
                            <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name <span class="danger-text">*</span> </label>
                                <input type="text" name="last_name" id="last_name" class="form-control" value="<?= isset($user['fld_lastname']) ? htmlspecialchars($user['fld_lastname']) : '' ?>">
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="contactNumber" class="form-label">Contact Number <span class="danger-text">*</span></label>
                                <div class="input-group">
                                    <div class="col-3">
                                        <select name="countrycode" class="form-control" id="countrycode">
                                            <?php 
                                                foreach ($countrycodes as $country => $code) {
                                                   echo "<option value='".$code['fld_id'];
                                                   if($code['fld_countryname'] == "United States"){ 
                                                    echo "' selected >"; 
                                                    } else { 
                                                    echo "'>";
                                                    }
                                                   echo $code['fld_dialingcode']." "." - ".$code['fld_countryname']."</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <input type="number" name="contact_number" id="contactNumber" class="form-control" aria-label="Phone number" value="<?= isset($user['fld_phone']) ? htmlspecialchars($user['fld_phone']) : '' ?>" oninput="NumberOnly(this, 10)" >
                                </div>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="alternateNumber" class="form-label">Alternate Number</label>
                                <div class="input-group">
                                    <div class="col-3">
                                        <select name="countrycode2" class="form-control" id="countrycode2">
                                            <?php 
                                                foreach ($countrycodes as $country => $code) {
                                                   echo "<option value='".$code['fld_id'];
                                                   if($code['fld_countryname'] == "United States"){ 
                                                        echo "' selected >"; 
                                                    } else { 
                                                        echo "'>"; 
                                                    }
                                                   echo $code['fld_dialingcode']." "." - ".$code['fld_countryname']."</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <input type="number" name="alternateNumber" id="alternateNumber" class="form-control" aria-label="Alternate number" value="<?= isset($user['fld_alternatephone']) ? htmlspecialchars($user['fld_alternatephone']) : '' ?>" oninput="NumberOnly(this, 10)" >
                                </div>
                               <span class="profile-error-msg text-danger"></span>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                                <label for="email" class="form-label">Email <span class="danger-text">*</span> </label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= isset($user['fld_email']) ? htmlspecialchars($user['fld_email']) : '' ?>">
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="password" class="form-label">Password <span class="danger-text">*</span> </label>
                                <input type="password" name="password" id="password" class="form-control" value="<?= isset($user['fld_pass']) ? htmlspecialchars($user['fld_pass']) : '' ?>">
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="dob" class="form-label">Date of Birth <span class="danger-text">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="dob" class="selectdatepicker_dob form-control" id="dob" value="<?= isset($user['fld_dob']) ? htmlspecialchars($user['fld_dob']) : '' ?>" >
                                    <div class="input-group-text">
                                        <label for="dob" class="bi bi-calendar"></label>
                                    </div>
                                </div>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="gender" class="form-label">Gender <span class="danger-text">*</span> </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="">Select Option</option>
                                    <option value="Male" <?= isset($user['fld_gender']) && $user['fld_gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= isset($user['fld_gender']) && $user['fld_gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                    <option value="Other" <?= isset($user['fld_gender']) && $user['fld_gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-xl-6">
                                <div class="row">
                                    <label for="" class="form-label mb-1">Marital Status</label>
                                    <div class="col-xl-6 pt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault1" value="Married" 
                                                   <?= isset($user['fld_maritial_sts']) && $user['fld_maritial_sts'] == 'Married' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="flexRadioDefault1">Married</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 pt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault2" value="Single" 
                                                  <?= (isset($user['fld_maritial_sts']) && ($user['fld_maritial_sts'] == 'Single' || $user['fld_maritial_sts'] == '')) ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="flexRadioDefault2">Single</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 anniversaryField">
                                <label for="anni_date" class="form-label">Anniversary Date</label>
                                <div class="input-group">
                                    <input type="text" name="anni_date" id="anni_date" class="selectdatepicker_anniversary form-control" aria-label="annidate" value="<?= (isset($user['fld_anniversary']) && $user['fld_anniversary'] != '0000-00-00') ? htmlspecialchars($user['fld_anniversary']) : '' ?>">
                                    <div class="input-group-text">
                                        <label for="anni_date" class="bi bi-calendar bi-calendar-anni"></label>
                                    </div>
                                </div>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-12"></div>
                            <div class="col-md-6">
                                <label for="Address" class="form-label">Address <span class="danger-text">*</span> </label>
                                <textarea class="form-control" id="Address" name="address" rows="4" maxlength="500"><?= isset($user['fld_address']) ? htmlspecialchars($user['fld_address']) : '' ?></textarea>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                            <div class="col-md-6">
                                <label for="notes" class="form-label">Special Notes</label>
                                <textarea name="notes" id="notes" class="form-control" placeholder="Eg. I prefer only Male / Female. I do waxing, etc.," rows="4" maxlength="350"><?= isset($user['fld_notes']) ? htmlspecialchars($user['fld_notes']) : '' ?></textarea>
                                <span class="profile-error-msg text-danger"></span>
                            </div>

                        </div>
                      
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>                    
                </form>
                </div>

                </div>
            </div>
        </div>


</div>
<!-- End::content  -->



<script>
$(document).ready(function () {

    $('#userform_update').submit(function(e){

        return false;
        e.preventDefault();
        var name = $('#first_name').val();
        var lname = $('#last_name').val();
        var emailid = $('#email').val();
        var pwd = $('#password').val();
        var gender = $('#gender').val();
        var dob = $('#dob').val();
        var contactNumber = $('#contactNumber').val();
        var Address = $('#Address').val();

        var action = validation({'first_name':name, 'last_name':lname, 'email':emailid, 'password':pwd, 'gender':gender, 'dob':dob, 'contactNumber':contactNumber, 'Address':Address});
        if(action === false) { return action; }

        let formData = $(this).serializeArray();
        formData.push({
            name: $('meta[name="csrf-token"]').attr('name'), 
            value: $('meta[name="csrf-token"]').attr('content') 
        });

        $.ajax({
            url: '<?= base_url("user_update"); ?>',
            type: 'POST',
            data: formData, 
            dataType: 'json',
            success: function (res) {
                if (res.status === 1) {
                    $('.login_res').html('<div class="alert alert-success">Profile update successfully!</div>');
                } else {
                    $('.login_res').html('<div class="alert alert-danger">Sign up failed: ' + res.message + '</div>');
                }
                setTimeout(function () { location.reload(); }, 2600);
            },
            error: function () {
                $('.login_res').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
            }
        });

    });


    $('input[name="marital_status"]').on('change', function () {  

        const maritalStatus = $('input[name="marital_status"]:checked').val();
        if (maritalStatus == 'Married') {
            $('.anniversaryField').show();
        } else {
            $('.anniversaryField').hide();
        }
    });

});

var maritalStatuspageload = "<?= isset($user['fld_maritial_sts']) ? $user['fld_maritial_sts'] : ''  ?>";

if (maritalStatuspageload == 'Married') {
    $('.anniversaryField').show();
} else {
    $('.anniversaryField').hide();
}


flatpickr(".selectdatepicker_dob",{
    dateFormat:"M d/Y",
    disableMobile:!0,
    maxDate: "Jan 01/2006",
});


flatpickr(".selectdatepicker_anniversary",{
    dateFormat:"M d/Y",
    disableMobile:!0,
    maxDate: "today",
});
</script>




