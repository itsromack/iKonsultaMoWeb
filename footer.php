
    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Bring your Doctor with you.</h2>

            <p class='yellow' id="random-tagline"></p>
        </div>
    </div>

    <div class="footer l-box is-center">
        <div class="pure-menu">
            <span class='yellow'>i</span><span class='white'>Konsulta</span><span class='crimson'>Mo</span>
        </div>
        <small class='white'>
        La Verdad Christian College ~ Copyleft 2014.
        </small>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/taglines.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#random-tagline').html(get_random_tagline());
    jQuery('.doctv-untv').click(function(){
        location.href = "/ikonsultamo/tv-untv-doctv.php";
    });
    jQuery('.doctv-drmike').click(function(){
        location.href = "/ikonsultamo/tv-drmike.php";
    });
    jQuery('.doctv-thedrs').click(function(){
        location.href = "/ikonsultamo/tv-thedrs.php";
    });
    jQuery('.doctv-medic').click(function(){
        location.href = "/ikonsultamo/tv-housemd.php";
    });
});
</script>
</body>
</html>
