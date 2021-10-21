<?php require_once 'includes/header.php'; ?>
<div class="container" id="page">
  <!--Main page content Here-->
  <div class="row">
    <div class="col-lg-8">
      <h3 class="bold">
        <i class="glyphicon glyphicon-pencil"></i> Shipping Information
      </h3>

      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="bold">Personal Information</h4>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Title</label>
                <select name="title" id="title" class="form-control">
                  <option value="">Mr</option>
                  <option value="">Mrs</option>
                  <option value="">Miss</option>
                </select>
              </div>
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" value=""
                  placeholder="Your firstname" />
              </div>
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value=""
                  placeholder="Your lastname" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" value=""
                  placeholder="Your phone number" />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" value="" placeholder="Your email" />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <h4 class="bold">Address</h4>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" id="address" class="form-control" value=""
                  placeholder="Your address" />
              </div>
              <div class="form-group">
                <label>Address 2</label>
                <input type="text" name="address_2" id="address_2" class="form-control" value=""
                  placeholder="Your address_2" />
              </div>
              <div class="form-group">
                <label>City</label>
                <input type="text" name="city" id="city" class="form-control" value="" placeholder="Your city" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>State</label>
                <select name="state" id="state" class="form-control">
                  <option value="">Washington</option>
                  <option value="">California</option>
                  <option value="">Los Angeles</option>
                </select>
              </div>
              <div class="form-group">
                <label>Country</label>
                <select name="state" id="state" class="form-control">
                  <option value="">US</option>
                  <option value="">UK</option>
                  <option value="">France</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <h4 class="bold">Shipping Method</h4>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Shipping Method</label>
                <select name="shipping_method" id="shipping_method" class="form-control">
                  <option value="">Next Day Delivery (&dollar;10)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <h4 class="bold">Payment</h4>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Payment Option</label>
                <select name="payment_type" id="payment_type" class="form-control">
                  <option value="">Pay By Check</option>
                  <option value="">Pay By Bank Wire Transfer</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="" />
                    I agree to the terms of service.
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel-footer">
          <button type="button" class="btn btn-primary btn-sm">
            Submit My Order
          </button>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <h3 class="bold"><i class="glyphicon glyphicon-th-list"></i> Cart Details</h3>

      <div class="panel panel-primary">
        <div class="panel-body">Current Cart Value</div>
        <ul class="list-group">
          <li class="list-group-item">
            <p>3 Items <strong class="pull-right">&dollar;122.97</strong></p>
            <p>24hr Shipping <strong class="pull-right">&dollar;10</strong></p>
          </li>
          <li class="list-group-item">
            <p>Total <strong class="pull-right">&dollar;132.97</strong></p>
            <p>Taxes <strong class="pull-right">&dollar;0.00</strong></p>
          </li>
        </ul>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Benefits</h3>
        </div>
        <div class="panel-body">
          Some of the benefits of shopping with us include:
        </div>
        <ul class="list-group">
          <li class="list-group-item">Buyer Protection</li>
          <li class="list-group-item">Next Day Delivery</li>
          <li class="list-group-item">Flexible Payment Options</li>
          <li class="list-group-item">7day Money Back Guarantee</li>
        </ul>
      </div>
    </div>
  </div>

  <footer>
    <div class="row pad">
      <div class="col-lg-12 text-center">
        Copyright &copy; 2017 <strong>Trendy Fashion Store</strong>
      </div>
    </div>
  </footer>
</div>

<?php require_once 'includes/footer.php'; ?>