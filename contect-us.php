<?php include "includes/head.php"; ?>
<!-- content -->
<div class="row">

  <div class="col-lg-8 col-md-12 border-lg-end">
  	  <!-- directry -->
	<div class="row">
		<nav aria-label="breadcrumb" class="p-0">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Contect us</li>
		  </ol>
		</nav>
	</div>
<!-- directry end -->
<div class="row">
		<h4 class="text-center">Content Form</h4>
        <hr>
    <p class=" w-responsive mx-auto ">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.
        <br>Email - info@birdlights.com</p>
		<form id="contact-form" name="contact-form" action="mail" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-2">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            <div class="text-center text-md-left m-3">
                <button class="btn btn-success" onclick="document.getElementById('contact-form').submit();">Massage Send </button>
            </div>
            <div class="status"></div>
	</div>

  </div>
<!-- sidebar start -->
  <?php include "includes/sidebar.php"; ?>
<!-- end sidebar -->
</div>

<!-- end content -->
<?php include "includes/footer.php"; ?>