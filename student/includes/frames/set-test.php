<div class="animated fadeInUp section__content ">
    <div class="alert alert-primary test-counter-blk dur" role="alert">
        Start Test &quest;
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 test-blk">
                <div class="col-md-12 test-content">
                    <div class="col-md-5 offset-md-3" style="margin-top:5%">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Click begin to start</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Username</h5>
                                </div>
                                <div class="card-text" style="text-align:center;margin-top:30px">
                                    <button class="btn btn-outline-success btn-lg start-test" type="button">Begin&nbsp;<i class="fa fa-thumbs-up"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function test_countDown() {
                // set date we are counting down to
                var countdown = new Date();
                countdown.setMinutes(countdown.getMinutes() + 15);
                // update count down every 1 second
                var x = setInterval(function() {
                    // get current date and time
                    var now = new Date().getTime();
                    // find distance between now and the countdown
                    var distance = countdown - now;
                    // Time calculations for days, hours, minutes and seconds
                    // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    var result = 'Time Remaining:<span id="tme"> ' + hours + ':' + minutes + ':' + seconds + '</span>';
                    $('.dur').html(result);

                    if (distance <= 0) {
                        $('.dur').remove();
                        $('.test-content').load("includes/frames/success-page.php");
                        clearInterval(x);
                    }
                    // Display result in the element
                }, 1000);
            }

            $('.start-test').click(function() {
                    test_countDown();
                    $('.test-content').load("includes/frames/test-content.php");
                
            });
        </script>
    </div>
</div> 