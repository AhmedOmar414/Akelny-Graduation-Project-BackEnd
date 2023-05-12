<!------------------------footer--------------------->
<section class="footer">
    <div class="container-footer">
        <div class="row-footer">
            <div class="col-footer" style="grid-column: span 2;">
                <div style=" width: 65px;">
                    <img src="{{asset("website/images/spoon-and-a-fork-in-a-circle-640w.png")}}" class="logo bg-white" alt="">
                </div>
                <Div class="content-footer ">
                    <h5>About Us</h5>
                    <p>some short text about company like you might <br> remember the Dell computer commercials in <br> which a youth report</p>
                    <span>

        </span>
                </Div>
            </div>




            <div class="col-footer">
                <Div class="content-footer ">
                    <h5>For users</h5>
                    <a href="{{route('client.login')}}">User login</a><br>
                    <a href="{{route('client.register')}}">User register</a><br>
                    <a href="{{route('user_profile.index')}}">Profile</a><br>
                    <a href="{{route('contact_us')}}">Contact Us</a>
                </Div>
            </div>

            <div class="col-footer">
                <Div class="content-footer ">

                    <a href="{{route('trending')}}">Trending</a><br>
                    <a href="{{route('most.popular')}}">Most Popular</a><br>
                    <a href="{{route('most.sale')}}">Most Sale</a><br>
                </Div>
            </div>
            <div class="col-footer">
                <Div class="content-footer ">
                    <a href="{{route('offer.page')}}">Offers</a><br>
                    <a href="{{route('favorite.restaurants')}}">Favorite Restaurants</a><br>
                    <a href="{{route('favorite.products')}}">Favorite products</a>
                </Div>
            </div>
        </div>
    </div>
</section>

