<div class="row fonts " style="background: #0b3e56;">
    <div class="wrapper" style="width: 100%;padding: 20px 40px;">
        <div class="row">

            <div class="col-lg-4 zoomIn wow animated text-white" style="padding: 15px;">
                <h5 class="fonts text-center" style="font-size: 40px;">My Tour</h5>
                <p class="text-justify web-text-color">
                    I am HIMANSHU GAUTAM, your tour director for your next tour. I have been working as a guide for the last five years with India, Americans, Australians and Spanish groups around the most important places in World. This blog is for me, but sharing it with you, it is also for you, so you can find useful information for your next tour. This is my wish.
                    </p>
            </div>

            <div class="col-lg-4 zoomIn wow animated" style="padding: 15px;">
                <h5 class="text-white font-weight-bold text-center">Questions About Our Tours?</h5>
                <ul>
                    <li class="text-white"> Our Customer Service Department is always happy to answer any questions you might have. Please visit our Contact Page to contact us or call us .</li>    
                </ul>
                <h5 class="text-white font-weight-bold text-center">why makemytrip?</h5>
                <ul >
                    <li class="text-white">Customer Satisfaction</li>    
                    <li class="text-white">Superior customer service, 24x7 Dedicated helpline and over 5 million delighted customers & still growing.</li>    
                    <li class="text-white">Best Deals Guaranteed</li>    
                    <li class="text-white">Great experiences at lowest prices guaranteed.</li>    
                </ul>
                

            </div>
            <div class="col-lg-4 zoomIn wow animated" style="padding: 15px;">
                 <h5 class="text-white font-weight-bold text-center">Why buy from us?</h5>
               
                <ul class="text-center" >
                    <li class="text-white"> Payment Security</li>    
                    <li class="text-white">Travel Guide</li>    
                    <li class="text-white">Social Responsibility</li>    
                </ul>
                <p class="text-white text-center p-3">
                 <i class="fa fa-facebook-official fa-3x m-2"></i>
                    <i class="fa fa-twitter-square fa-3x m-2 "></i>
                    <i class="fa fa-instagram fa-3x m-2"></i>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="col-12 bg-info p-1">
    <p class="text-center text-white">Developed by -> Mayank kumar Garg</p>
</div>

<script type="text/javascript" src="js/compiled.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script>
    var owl1 = $('.slider');
    owl1.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000
    });
    var owl = $('.home-gallery');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1

            },
            600: {
                items: 2
            },
            1000: {
                items: 4,
            }
        }
    });
    $('.btn-right').click(function () {
        owl.trigger('next.owl.carousel');
    })
    $('.btn-left').click(function () {
        owl.trigger('prev.owl.carousel');
    })
    $('.mdb-select').material_select();


</script>

</div>

</body>

</html>