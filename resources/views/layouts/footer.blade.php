<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
<footer class="main-footer sticky footer-type-1">
    <div class="footer-inner">
        <!-- Add your copyright text here -->
        <div class="footer-text">
            &copy; {{ date('Y') }}
            <a href="/">
                <strong>{{ env('APP_NAME') }}</strong>
            </a> design by
            <a href="https://github.com/hui-ho" target="_blank">
                <strong>hui-ho</strong>
            </a>
            <span>{{ config('base.icp_record') }}</span>
            <!--  - Purchase for only <strong>23$</strong> -->
        </div>
        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div>
    </div>
</footer>
<script src="https://cdn.staticfile.org/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
