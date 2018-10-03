<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Basiyn</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- FontAweasome Icon -->
  <link  href="font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="new-style.css" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" /> 
  <!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script> -->
  <style type="text/css">
  .navbar-default .navbar-nav > li > a {
    color: #000;
    font-weight: bold;
  }
  @media (min-width: 768px){
    .navbar-nav > li > a {
      padding-top: 25px;
      padding-bottom: 15px;
    }

    .navbar-nav > li > .dropdown > button {
      padding-top: 28px;
      padding-bottom: 15px;
    }
  }
</style>

</head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a  style="float:left;" href="#homeSlider"><img   style="width: 170px;" src="images/logo.png"></a> </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">

                <li><a href="#services">Our Ethos</a></li>
                <li><div class="dropdown" >
                  <button class="ddbtn" link="#" type="button" data-toggle="dropdown" style="margin-top: 0px">How Does It Work
                    <span class="caret"></span></button>
                    <div class="dropdown-content" style="margin-left: 40px;">
                      <a href="#seller" id="dd-seller">For Seller</a>
                      <a href="#customer" id="dd-customer">For Customer</a>
                    </div></div></li>
                    <li><div class="dropdown" >
                      <button class="ddbtn" link="#" type="button" data-toggle="dropdown" style="margin-top: 0px">Features
                        <span class="caret"></span></button>
                        <div class="dropdown-content" style="margin-left: 40px;">
                          <a href="#sellerf" id="dd-seller">For Seller</a>
                          <a href="#customerf" id="dd-customer">For Customer</a>
                        </div></div></li>
                        <li><div class="dropdown">
                          <button class="ddbtn" link="#" type="button" data-toggle="dropdown" style="margin-top: 0px">Benefits
                            <span class="caret"></span></button>
                            <div class="dropdown-content" style="margin-left: 11px;">
                              <a href="#sellerb" id="dd-seller">For Seller</a>
                              <a href="#customerb" id="dd-customer" style="border-bottom: none;">For Customer</a>
                            </div></div></li>

                            <li><a href="#">Login  / Signup</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>




<!-- Service Section
  ================================================== -->
  <div class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-6">
          <div class="service_tiem">
            <div class="iconabout" style="border-color: #02abf9"><img src="images/P1.png"></div>
            <h2 style="color: #02abf9">Your Connects</h2>
            <p>Connect directly with Sellers and Customers of your choice and make your own Bazaar</p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="service_tiem">
            <div class="iconabout" style="border-color: #f79125"><img src="images/P2.png"></div>
            <h2 style="color: #f79125">Buy, Sell, Both</h2>
            <p>Enjoy buying, selling, or both from the same platform</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service_tiem">
            <div class="iconabout" style="border-color: #26a040"><img src="images/P3.png" ></div>
            <h2 style="color: #26a040">For Everyone</h2>
            <p>BASIYN is for EVERYONE LITERALLY</p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="service_tiem">
            <div class="iconabout" style="border-color: #ffe605; padding-top: 25px; "><img style="width: 90%; height: 90%" src="images/P4new.png"></div>
            <h2 style="color:#ffe605 ">Just One</h2>
            <p>Single place for all the product categories of your interest</p>
          </div>

        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service_tiem">
            <div class="iconabout" style="border-color: #3F51B5"><img src="images/P5.png"></div>
            <h2 style="color:#3F51B5 ">Driven By Trust</h2>
            <p>For the ones who believe in trust and relationship – because no one can offer you a better price than your known and trusted sellers</p>
          </div>

        </div>
      </div>
      <div class="btns">  
        <div class="col-md-6 col-sm-6">
          <a class="getst" href="#seller" role="button" onclick="gotox('seller')" style="float:right;     background-color: #26a040;">I am a Seller</a>
        </div>
      </div>
      <div class="btns"> 
        <div class="col-md-6 col-sm-6">
          <a class="getst" href="#customer" role="button" onclick="gotox('customer')" style=" background-color: #3F51B5;">I am a Customer</a>
        </div>
      </div>


      <div class="feature" id="seller" style="margin-top: -40px; padding-top: 80px; z-index: -1; border-top: 2px solid #fff;">
        <div class="container" >
          <div class="head_section" >
            <h2>If you are a Seller</h2>
            <p style="font-size: 19px"><span style="color: #26a040; font-weight: bold">Boost your sales</span> by converting every shopper into a <span style="color: #26a040; font-weight: bold">permanent customer</span></p>
          </div>
          <div style="">

            <div class="box" style="margin-left: 1.5%">
              <h4 style="background: #3F51B5; color: #fff; width: 100%; margin-left: 0px; margin-right:0px; padding: 10px; font-size: 14px; " >For You</h4>
              <div class="useborder" style="border-color: #3F51B5"><img src="images/P31.png"></div>

              <p>Whatever category your product belongs to, you can use BASIYN.</p>
            </div>
          </div>
          <div>
            <div class="box">
              <h4 style="background: #f79125; color: #fff; width: 100%; margin: 0px; padding: 10px; font-size: 14px; " >Your Customer</h4>


              <div class="useborder" style="border-color: #f79125"><img src="images/P32.png"></div>
              <p>Add mobile no. of your customer to establish direct connect between you and your customer.</p>
            </div>
          </div>
          <div>

            <div class="box">
              <h4 style="background: #26a040; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >Engage Customer</h4>

              <div class="useborder" style="border-color: #26a040"><img src="images/P33.png"></div>
              <p>Offering discount and adding new products trigger instant notification to your customers and keep them engaged.</p>
            </div>
            <div class="box">
              <h4 style="background: #f70d04; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >Receive Orders</h4>

              <div class="useborder" style="border-color: #f70d04"><img src="images/P34.png"></div>
              <p>Your customers can see your products with complete details and can place orders</p>
            </div>
            <div class="box" id="lastbox1" style="margin: 0px 0px 0px 0px">
              <h4 style="background: #848383; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >Increase Sales</h4>

              <div class="useborder" style="border-color: #848383"><img src="images/P35.png"></div>
              <p>This boosts your sales by converting every shopper into a permanent customer</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="btns">  
      <div class="col-md-6 col-sm-6">
        <a class="getst" href="#sellerf" role="button" style="float:right;background-color: #8a04f7;">Features</a>
      </div>
    </div>
    <div class="btns"> 
      <div class="col-md-6 col-sm-6">
        <a class="getst" href="#sellerb" role="button" style=" background-color: #8a04f7;">Benefits</a>
      </div>
    </div>
  </div>
  
  <!-- / Services Close --> 

  <!-- Consumer Section-->

  <div class="feature" id="customer" style="margin-top: -20px; padding-top: 20px; z-index: -1;">
    <div class="container" >
      <div class="head_section">
        <h2 style="color: #3F51B5; margin-top: 55px;">If you are a Customer</h2>
        <p style="font-size: 19px"><span style="color: #3F51B5; font-weight: bold;">One Platform</span> for <span style=" color: #3F51B5; font-weight: bold;">All the Products of Your Interest</span> by the <span style="color: #3F51B5; font-weight: bold;">Sellers of Your Choice</span></p>
      </div>
      <!--<div style="">-->

        <div class="box" style="margin-left: 2.5%">
          <h4 style="background: #3F51B5; color: #fff; width: 100%; margin-left: 0px; margin-right:0px; padding: 10px; font-size: 14px; " >Your Seller</h4>
          <div class="useborder" style="border-color: #3F51B5"><img src="./images/P41.png"></div>

          <p>Add Sellers of Your Choice by adding their mobile numbers or accepting their invitations to directly connect with your sellers</p>
        </div>
        <!--</div>-->
        <div>
          <div class="box">
            <h4 style="background: #f79125; color: #fff; width: 100%; margin: 0px; padding: 10px; font-size: 14px; " >Instant Updates</h4>

            
            <div class="useborder" style="border-color: #f79125"><img src="./images/P42.png"></div>
            <p>Receive instant updates of Product Addition & Discount from your connected seller</p>
          </div>
        </div>
        <!--<div>-->

          <div class="box">
            <h4 style="background: #26a040; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >Smart Buying</h4>

            <div class="useborder" style="border-color: #26a040"><img src="./images/P43.png"></div>
            <p>Discover products of the connected sellers in structured manner, make informed purchase decisions, and place orders with utmost ease</p>
          </div>
          <div class="box">
            <h4 style="background: #f70d04; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >Personalized</h4>

            <div class="useborder" style="border-color: #f70d04"><img src="./images/P44.png"></div>
            <p>Experience personalized shopping by customizing the way you like to see the products and removing the ones that are not required</p>
          </div>
          <div class="box" id="lastbox2" style="margin: 0px 0px 0px 0px">
            <h4 style="background: #848383; color: #fff; width: 100%; margin: 0px;padding: 10px; font-size: 14px; " >One For All</h4>

            <div class="useborder" style="border-color: #848383"><img src="./images/P45.png"></div>
            <p>Single platform for all the product categories of your interest. Fashion, Grocery, Electronics, Fruits & Vegetables, Medicine, Home Furnishing are just to name few</p>
          </div>
          <!--</div>-->

        </div>
      </div>



      <div>

        <div class="btns" style="z-index: 2; margin-top: 30px;">  
          <div class="col-md-6 col-sm-6">
            <a class="getstnew" href="#customerf"  style="float:right; display: block;  margin-top: 30px;   background-color: #8a04f7;">Features</a>
          </div>
        </div>
        <div class="btns" style="z-index: 2;"> 
          <div class="col-md-6 col-sm-6">
            <a class="getstnew" href="#customerb"  style="background-color: #8a04f7;  margin-top: 30px; float: left;">Benefits</a>
          </div>
        </div>
      </div>  

      <!--/Consumer Close-->

      <!--Circular 1-->

      <div class="feature" id="sellerf" style="padding-top: 60px; margin-top: -30px; z-index: -1;">
        <div class="head_section" style="padding-bottom: 0px;"><h2 style="color: #26a040">BASIYN Features For the Sellers</h2></div>
        <div class='circle-container'style="padding-top=0px;">
          <a href='#' class='center' style="    width: 35%;
          height: 37%;
          top: 36%;
          left: 37%"><img src='./images/P50.png'></a>
          <a href='#' class='deg0'><img src='images/P52.png'></a>
          <a href='#' class='deg45'><img src='./images/P54.png'></a>
          <a href='#' class='deg90'><img src='./images/P55.png'></a>

          <a href='#' class='deg135'><img src='./images/P56.png'></a>
          <a href='#' class='deg180'><img src='./images/P57.png'></a>
          <a href='#' class='deg225' style="height: 4em; overflow: visible;"><img src='./images/P58.jpg' height="100%"></a>
          <a href='#' class='deg270'><img src='./images/P61.png'></a>

          <a href='#' class='deg315'><img src='./images/P65.png'></a>
          <p class="pdeg0">Share Full or Partial Catalog with Your Connected Customer</p>
          <p class="pdeg45">Set Delivery Option – Home Delivery or Self Pick Up</p>
          <p class="pdeg90">Real Time Automatic Order Aggregation</p>
          <p class="pdeg135">Manage Selling Price by Custome</p>
          <p class="pdeg180">Manage Staffs’ Engagement with Customers and Suppliers</p>
          <p class="pdeg225">No Set Up Cost, Pay Only When You Grow and Receive Orders</p>
          <p class="pdeg270">Propose Orders and Collect Orders</p>
          <p class="pdeg315">Easier Cataloging</p>
        </div>
      </div>




      <!-- C 1 Close-->
      <!--Circular 2-->

      <div class="feature" id="customerf" style="padding-top: 60px; margin-top: -30px;">
        <div class="head_section" style=" padding-bottom: 0px;"><h2 style="color: #3F51B5;">BASIYN Features For the Customers</h2></div>
        <div class='circle-container' style="padding-top: 0px;">
          <a href='#' class='center' style="    width: 35%;
          height: 37%;
          top: 36%;
          left: 37%"><img src='./images/P50.png'></a>
          <a href='#' class='deg0'><img src='./images/P63.png'></a>
          <a href='#' class='deg45'><img src='./images/P64.png'></a>
          <a href='#' class='deg90'><img src='./images/P65.png'></a>

          <a href='#' class='deg135'><img src='./images/P66.png'></a>
          <a href='#' class='deg180'><img src='./images/P67.png'></a>
          <a href='#' class='deg225'style="overflow: visible;"><img src='./images/P68.png' height="90%"></a>
          <a href='#' class='deg270'><img src='./images/P61.png'></a>

          <a href='#' class='deg315'><img src='./images/P62.png'></a>
          <p class="pdeg0">Keep Sellers and Products of Your Choice
          </p>
          <p class="pdeg45">Set Products as ‘Favorite’ to Speed Up the Ordering
          </p>
          <p class="pdeg90">Request Seller to Share Catalog
          </p>
          <p class="pdeg135">Customize Your Purchase Store
          </p>
          <p class="pdeg180">Option to Place Order with Self Pick Up
          </p>
          <p class="pdeg225">Digital Record of All Relevant Dispatch Documents
          </p>
          <p class="pdeg270">Place Order and Manage Outstanding Orders
          </p>
          <p class="pdeg315">Discover Products and Compare Prices</p>
        </div>
      </div>

      <!-- /C 2-->
      <!--  -->

      <div class="benefits" id="sellerb" style=" padding-top: 50px; margin-top:-50px;">

        <div class="head_section" style="padding-bottom: 15px;">
          <h2>Benefits for Sellers</h2>
        </div>
        <div>


          <div class="boxnew">
            <div class="boximg"><img src="./images/P71.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Higher Engagement, Higher Sales</span></div>
              <div class="para">Share new arrivals and discounts in a structured manner to engage your customers. It increases Sales and improves customer loyalty</div>
            </aside>


          </div>


          <div class="boxnew">
            <div class="boximg"><img src="./images/P72.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Reduce Loss due to Over stocking and Out of stock</span></div>
              <div class="para">Real time order discovery helps in better demand planning and forecasting, reducing losses due to overstocking and out of stock</div>
            </aside>


          </div>

          <div class="boxnew">
            <div class="boximg"><img src="./images/P73.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Save Money by Reducing Manual Effort of Order Aggregation</span></div>
              <div class="para">Give your customers a platform where they can place order directly to you. For you, it saves manpower cost and reduces chances of manual errors while aggregating orders</div>
            </aside>


          </div>

          <div class="boxnew">
            <div class="boximg"><img src="./images/P74.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Make Your Business Digital in Minutes at No Cost</span></div>
              <div class="para">Having a website or app does not bring engagement. Leverage the real power of digital to improve engagement with your customers</div>
            </aside>


          </div>

          <div class="boxnew">
            <div class="boximg"><img src="./images/P75.jpg" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Know Order Criticality</span></div>
              <div class="para">Quick view showing urgency of dispatch, plan your dispatch and fulfilments accordingly</div>
            </aside>


          </div>



          <div class="boxnew">
            <div class="boximg"><img src="./images/P76.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Real Time Order Discovery</span></div>
              <div class="para">Get orders in real time directly from your customers which are automatically added into  outstanding orders.</div>
            </aside>


          </div>



          <div class="boxnew">
            <div class="boximg"><img src="./images/P77.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Smarter Way of Order Processing</span></div>
              <div class="para">Excellent aggregation of outstanding orders in multiple ways to help prioritize the shipments</div>
            </aside>


          </div>


          <div class="boxnew">
            <div class="boximg"><img src="./images/P78.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Propose Order to Your Customers</span></div>
              <div class="para">Product-wise order proposal to your customers that they might have missed to order.</div>
            </aside>


          </div>

          <div class="boxnew">
            <div class="boximg"><img src="./images/P79.png" class="box2-img"></div>
            <aside class="aside"><div class="mainh"><span>Optimally Use Your Sales Team</span></div>
              <div class="para">Let your sales team focus on building new customer relationships. Existing ones are seamlessly managed with BASIYN</div>
            </aside>


          </div>
        </div>
      </div>




      <div class="benefits" id="customerb" style="margin-top: -40px; padding-top: 40px">
        <div class="head_section" style="margin-top: 20px; color: #3F51B5; padding-bottom: 15px;">
          <h2 style=" color: #3F51B5">Benefits for Customers</h2>
        </div>

        <div class="boxnew2">
          <div class="boximg"><img class="box2-img"  src="./images/P81.png"></div>
          <aside class="aside"><div class="mainh"><span>One BASIYN for All Your Needs</span></div><div class="para">Buy all the products of your interest on one App and get rid of managing multiple Apps</div></aside>

        </div>

        <div class="boxnew2">
          <div class="boximg"><img class="box2-img" src="./images/P82.png"></div>
          <aside class="aside"><div class="mainh"><span>Get Updates About Discounts and Compare Price</span></div><div class="para">Receive real time updates of sale and discount, view the final selling price along with product and make informed purchase</div></aside>

        </div>

        <div class="boxnew2">
          <div class="boximg"><img class="box2-img" src="./images/P83.png"></div>
          <aside class="aside"><div class="mainh"><span>Real Time Discovery of New Arrivals and Product Availability</span></div>
            <div class="para">Discover new arrivals at your seller’s store and check availability of the complete range of products - all in real time</div></aside>

          </div>

          <div class="boxnew2">
            <div class="boximg"><img class="box2-img" src="./images/P84.png"></div>
            <aside class="aside"><div class="mainh"><span>It’s Yours</span></div>
              <div class="para">You connect with the sellers from whom you buy products offline. Keep only those products that interest you and delete the others</div></aside>

            </div>

            <div class="boxnew2">
              <div class="boximg"><img class="box2-img" src="./images/P85.png"></div>
              <aside class="aside"><div class="mainh"><span>Easy Order Placement</span></div>
                <div class="para">Choose a seller and place order. Or, check products’ availability and price across sellers and place order</div></aside>

              </div>

              <div class="boxnew2">
                <div class="boximg"><img class="box2-img" src="./images/P86.png"></div>
                <aside class="aside"><div class="mainh"><span>More Convenience and More Reliability</span></div>
                  <div class="para">You can place order from App or Web. You get reliable products at the best price from your trusted sellers</div></aside>

                </div>

                <div class="boxnew2">
                  <div class="boximg"><img class="box2-img" src="./images/P87.png"></div>
                  <aside class="aside"><div class="mainh"><span>Yes. You can Initiate,  Contribute, and Feel Good</span></div>
                    <div class="para">If your seller does not use BASIYN, you can also initiate. Add his mobile number, onboard him, help him leverage digital technology</div></aside>

                  </div>

                  <div class="boxnew2">
                    <div class="boximg"><img class="box2-img" src="./images/P88.png"></div>
                    <aside class="aside"><div class="mainh"><span>Chat with Your Sellers (Launching Soon)</span></div>
                      <div class="para">You can have a direct chat with your sellers for anything that requires more clarity</div></aside>

                    </div>

                    <div class="boxnew2">
                      <div class="boximg"><img class="box2-img" src="./images/P89.png"></div>
                      <aside class="aside"><div class="mainh"><span>Product Categories of Your Choice</span></div>
                        <div class="para">Free hand to categorize your products to facilitate better product discovery and quicker order placement</div></aside>

                      </div>


                    </div>


  <!--<div style="display: inline-flex;"><img src="./images/p71.png" class="box2-img" align="left">
  <h4 style="float: left">Hello Hello</h4>
  </div>
  <div class="b2-para" style="column-span: 2">
  <p>Share new arrivals and discounts in a structured manner to engage your customers. It increases Sales and improves customer loyalty
</p></div>
</div>-->
<!--    -->
<!-- About Us Section
  ================================================== -->

  <div id="footer">

    <div class="privacy" style="float: left">
      <button class="ddbtn" style="border-left: 2px">©Kann Digital Pvt Ltd</button>
      <button class="ddbtn" style="border-left: 2px">Terms And Conditions</button>
      <button class="ddbtn" style="border-right: 0px">Privacy</button>

    </div>
    <div class="follow" style="float: right">

      <img src="images/facebook.png" height="30px" width="30px" style="margin-top: 15px; margin-left: 15px"></button>
      <img src="images/twitter.png" height="30px" width="30px" style="margin-top: 15px; margin-left: 15px"></button>
      <img src="images/linkedin.png" height="30px" width="30px" style="margin-top: 15px; margin-left: 15px"></button>



    </div>

  </footer>
  <!-- / contact Close --> 

<!-- Bootstrap core JavaScript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>

  <script type="text/javascript">
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  </script>
</body>
</html>
