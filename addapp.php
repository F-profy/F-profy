<?php
$addapp = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  {$head}


		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Додавання програми</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="#">Головна</a></li>
							<li><a href="#"><span>Додавання програми</span></a></li>

						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
        <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Додавання програми</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="form-wrap">
                    <form method="post">
                      <div class="form-group">
                        <label class="control-label mb-10 text-left">Назва</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Посилання</label>
                        <input type="text" name="href" class="form-control" placeholder="Href">
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10 text-left">Посилання на Картинка</label>
                        <input type="text" name="hrefim" class="form-control" placeholder="Href to image">
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10 text-left">Ціна</label>
                        <input type="text" name="price" class="form-control" placeholder="Price">
                      </div>
                      <div class="form-group">
                        {$msg_success}
                        {$error_msg}
                        	<button type="submit" name="add" class="btn  btn-success">Додати</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2021 &copy; F-Profy.</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
			</div>
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/dataTables-data.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>

	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>


</body>

</html>
HTML;
?>
