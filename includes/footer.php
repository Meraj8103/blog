</div>
</div>
</div>
<div class="bg-dark text-white footer">
  <p class="text-center p-4 m-0">2022 Copyright:
    <a href="https://birdlights.com/" class="link-info text-decoration-none">birdlights.com</a></p> 
</div>
	</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213905292-3"></script>-->
    <!--<script>-->
    <!-- window.dataLayer = window.dataLayer || [];-->
    <!-- function gtag(){dataLayer.push(arguments);}-->
    <!-- gtag('js', new Date());-->

    <!-- gtag('config', 'UA-213905292-3');-->
    <!--</script>-->
	<script>

(function(){

var scriptElement=document.createElement('script');
scriptElement.type = 'text/javascript';
// scriptElement.defer='true';
scriptElement.src = "<?php echo $base_url; ?>assets/jquery.min.js";
scriptElement.onload = function() {
    
var tag1 = document.createElement("script");
tag1.src = "<?php echo $base_url; ?>assets/birdlights.js";
tag1.type = "text/javascript";
document.getElementsByTagName("head")[0].appendChild(tag1);        
    };
    
document.getElementsByTagName("head")[0].appendChild(scriptElement); 
    
})();
</script>
    <?php include "includes/schema.php"; ?>
	<script type="text/javascript" async src="<?php echo $base_url; ?>assets/fontawesome-free-6.0.0-web/js/all.min.js"></script>
	<script type="text/javascript" async src="<?php echo $base_url; ?>assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>