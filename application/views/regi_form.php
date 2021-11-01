
<div class="card-body">
    <form action="" method="post">
        <br/><br/>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <center><h5>Registered Office Address</h5></center><br>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Address</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ro_add" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ro_distt" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ro_city" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">State/UT</label>
                    <?php ?>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ro_state" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Pin Code</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ro_pin" required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Telephone</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="ro_tel" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Mobile</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="ro_mob" required="required">
                    </div>
                </div>
                <!--fax starts-->
                <input class="form-control" type="hidden" name="ro_fax">
                <!--fax starts-->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                        <input class="form-control" type="email" name="ro_email" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">GST</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="ro_gst">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <center><h5>Regional/State Office Address</h5></center><br>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Address</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="rs_add" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="rs_distt" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="rs_city" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">State/UT</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="rs_state" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Pin Code</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="rs_pin">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Telephone</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="rs_tel">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Mobile</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="rs_mob" >
                    </div>
                </div>
                <!--Fax starts-->
                <input class="form-control" type="hidden" name="rs_fax">
                <!--Fax Ends-->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                        <input class="form-control" type="email" name="rs_email" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">GST</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="rs_gst">
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <center>
            <input type="submit" name="save_data" value="Next" class="btn btn-success" />
        </center>
								
    </form>
</div>