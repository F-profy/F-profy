<?php
$editusers = <<<HTML
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
            <h5 class="txt-dark">Редагування користувача</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="#">Головна</a></li>
							<li><a href="#"><span>Редагування користувача</span></a></li>
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
        									<h6 class="panel-title txt-dark">Користувачі</h6>
        								</div>
        								<div class="clearfix"></div>
        							</div>
        							<div class="panel-wrapper collapse in">
        								<div class="panel-body">
        									<div class="table-wrap">
        										<div class="">
        											<table id="myTable1" class="table table-hover display  pb-30" >
        												<thead>
        													<tr>
                                    <th>Id</th>
        														<th>Логін</th>
        														<th>E-Mail</th>
        														<th>Cтан</th>
                                    <th>Дійсний до</th>
        														<th>Ваші дії</th>
        													</tr>
        												</thead>
        												<tfoot>
        													<tr>
                                    <th>Id</th>
        														<th>Логін</th>
        														<th>E-Mail</th>
        														<th>Cтан</th>
                                    <th>Дійсний до</th>
        														<th>Ваші дії</th>
        													</tr>
        												</tfoot>
        												<tbody>

        														{$usersa}

        												</tbody>
        											</table>
        										</div>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<!-- /Row -->

        			</div>

        		<!-- Footer -->
        		<footer class="footer container-fluid pl-30 pr-30">
        			<div class="row">
        				<div class="col-sm-12">
        					<p>2020 &copy; F-Profy. Pampered by Cosperant</p>
        				</div>
        			</div>
        		</footer>
				<!-- Footer -->

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
