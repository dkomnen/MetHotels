<?php
include("header.php");
?>
    <div class="container white-transparent-background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="height:5vh;"></div>
                <h1 class="text-align-middle">MetHotels</h1>
                <div class="col-xs-8 col-lg-6 col-centered">
                    <p class="text-align-justify">
                        MetHotels is a chain of hotels on the island of Santorini.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut turpis lectus, condimentum nec tincidunt id, varius sagittis nisi. Proin velit justo, iaculis ut vestibulum sit amet, congue sed massa. Suspendisse mattis finibus ipsum ac finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="col-xs-12" style="height:5vh;"></div>
                <div class="col-xs-6 col-lg-6 hotel-room-div">
                    <img src="resources/images/hotelroom1.jpg" alt="" />
                    <p class="text-align-middle">
                        King suite apt. <br> $250 pp
                    </p>
                </div>
                <div class="col-xs-6 col-lg-6 hotel-room-div">
                    <img src="resources/images/hotelroom2.jpg" alt="" />
                    <p class="text-align-middle">
                        King suite apt. <br> $250 pp
                    </p>
                </div>
            </div>
            <div class="row">
                <h3 class="text-align-middle">Ask about room vacancy</h3>
                <div class="col-xs-8 col-lg-4 col-centered">
                    <form role="form" class="booking-form">
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" class="form-control" id="exampleEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="inputText">Your question</label>
                            <textarea type="text" class="form-control" id="exampleText" placeholder="Your question" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12" style="height:5vh;"></div>
        </div>


<?php
include("footer.php");
?>