    <div class="footer l-box is-center">
        <span class='yellow' id='tagline'></span>
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
        jQuery('#tagline').html(get_random_tagline());
    });
</script>
</body>
</html>
