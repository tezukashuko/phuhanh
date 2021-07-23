<footer class="d-flex flex-wrap mt-5 pb-5 px-5 pt-2 bg-dark bg-gradient">
    <div class="col-md-12 col-lg-6 py-sm-3">
        <div class="address container-lg px-1">
            <img src="images/logo.png" class="bg-white rounded-2 p-2" alt="">
            <p class="footer_info">
                <span>Phone: (84-28) 5408 1235 - (84-28) 62 69 08 03</span><br>
                <span>Fax: (84-28) 54442618</span><br>
                <span>Address: No. 92, Road 26-3, Binh Hung Hoa Ward,
                    Bình Tân District, Ho Chi Minh City, Viet Nam</span><br>
                <span>Email: sale@phuhanh.com.vn</span>
            </p>
        </div>
    </div>
    <div class="col-6 col-lg-2 p-3 text-center">
        <h3>About Us</h3>
        <ul class="list">
            <li><a href="/">Home</a></li>
            <li><a href="/About">About us</a></li>
            <li><a href="/Home/Customer">Customer</a></li>
            <li><a href="/Home/Catalogues">Catalogues</a></li>

        </ul>
    </div>
    <div class="col-6 col-lg-2 p-3 text-center">
        <h3>Support</h3>
        <ul class="list">
            <li><a href="/Home/ShoppingGuide">Shopping guide</a></li>
            <li><a href="/Contact">Contact</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12 col-lg-2 grid-4 p-3 text-light">
        <h3 class="textcenter">Partner</h3>
        <!--<img src="/Theme/images/Partner.png" />-->
        <div class="partner d-flex justify-content-center flex-wrap">
            <div class="partner_item">
                <img class="partner_item_img" src="images/Partner/partner_1.png">
            </div>
            <div class="partner_item">
                <img class="partner_item_img" src="images/Partner/partner_2.png">
            </div>
            <div class="partner_item">
                <img class="partner_item_img" src="images/Partner/partner_3.png">
            </div>
            <div class="partner_item">
                <img class="partner_item_img" src="images/Partner/partner_4.png">
            </div>

        </div>
    </div>
    <br>
    <div class="col-md-12 text-center py-2">
        <p>
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | Designed by Tezu
        </p>
    </div>

</footer>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-autohidingnavbar/4.0.0/jquery.bootstrap-autohidingnavbar.min.js" integrity="sha512-c+Hev/qNHoT1qz8mOOFbF+53VBat8RlCla06HBYNZjF6Y8P4cW73n0RD5mXiQ1AB4M9huCwOqFBWJ+sGA9oDPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(".navbar").autoHidingNavbar();
    let below_nav = document.querySelector('body')
    below_nav.style.marginTop = document.querySelector('.navbar').offsetHeight + 5 + 'px'
    window.onscroll = function() {
        below_nav.style.marginTop = document.querySelector('.navbar').offsetHeight + 5 + 'px'
    }
</script>


<!-- < script >

            let prevScrollpos = window.pageYOffset;
        let navbar = document.querySelector('.navbar')
        let below_nav = document.querySelector('.body')
        below_nav.style.marginTop = navbar.offsetHeight + 'px'
        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {

                navbar.style.top = "0px";
                below_nav.style.marginTop = navbar.offsetHeight + 'px'
            } else {
                navbar.style.top = "-150px";
                below_nav.style.marginTop = '0px';
            }
            prevScrollpos = currentScrollPos;
        };

    </script >  -->

</html>