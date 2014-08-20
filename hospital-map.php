<?php include "header.php";?>
<?php include "topmenu.php";?>

<?php $map_address = $_GET['name']; ?>
<div class="map">
    <div class="iframe-map-container">
        <iframe
            id="iframe-map"
            src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo $map_address; ?>&ie=UTF8&z=12&t=m&iwloc=near&output=embed"
            frameborder="0"></iframe>
    </div>
</div>

<?php include "footer.php";?>