

<footer>
    <div class="container">
        <div class="row inner">
            <div class="col-sm-3">
                <h5>my account</h5>
                <ul class="list-unstyled">
                    <li><a>Sign up</a></li>
                    <li><a>Sign in</a></li>
                    {{--<li><a href="#">My Account</a></li>--}}
                    {{--<li><a href="#">Order History</a></li>--}}
                    {{--<li><a href="#">Wishlist</a></li>--}}
                    {{--<li><a href="#">Newsletter</a></li>--}}
                    {{--<li><a href="reservation.html">My Reservation</a></li>--}}
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li><a href="about_us.html">About us</a></li>
                    <li><a href="#">Our Menu</a></li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Working Time</h5>
                <ul class="list-unstyled">
                    <li>Monday - Friday : 9 am to 12 am.</li>
                    <li>Saturday - Sunday : 24 Hour Open</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Contact Us</h5>
                <ul class="list-unstyled contact">
                    <li><a href="#"><i class="icofont icofont-social-google-map"></i> {{\App\Http\adminHelper::getRestaurantData()->address}}</a></li>
                    <li><a href="#"><i class="icofont icofont-phone"></i>{{\App\Http\adminHelper::getRestaurantData()->telephone}}</a></li>
                    <li><a href="#"><i class="icofont icofont-ui-message"></i>{{\App\Http\adminHelper::getRestaurantData()->email_address}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 footer__tnc">
                <hr>
                <ul class="list-inline">
                      <li  style="
                      font-size: 14px;
                      font-weight: 100;
                  " class="list-inline-item float-md-right">© {{ date('Y') }} Kathmandu Spice Pvt. Ltd. All Rights Reserved.</li>
                </ul>
            </div>
    </div>
</footer>