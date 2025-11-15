<?php
$breadcrumb = [
	[
		'icon' => 'fa fa-home',
		'href' => url(config('adminPrefix').'/home'),
		'name' => __('Dashboard')
	]
];
?>



<?php $__env->startSection('title', __('Dashboard')); ?>

<?php $__env->startSection('page_content'); ?>
<section class="content">

	<div class="row">
		<div class="col-md-3">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
				<h3><?php echo e($totalUser); ?></h3>

				<p><?php echo e(__('Total Users')); ?></p>
				</div>
				<div class="icon">
				<i class="ion ion-person-add"></i>
				</div>
				<a href="<?php echo e(url(config('adminPrefix').'/users')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-md-3">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
				<h3><?php echo e($totalMerchant); ?></h3>

				<p><?php echo e(__('Total Merchants')); ?></p>
				</div>
				<div class="icon">
				<i class="ion ion-person-add"></i>
				</div>
				<a href="<?php echo e(url(config('adminPrefix').'/merchants')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?><i class="fa fa-arrow-circle-right ms-1"></i></a>
			</div>
		</div>

		<div class="col-md-3">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
				<h3><?php echo e($totalTicket); ?></h3>
				<p><?php echo e(__('Total Tickets')); ?></p>
				</div>
				<div class="icon">
				<i class="fa fa-envelope-o"></i>
				</div>
				<a href="<?php echo e(url(config('adminPrefix').'/tickets/list')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-md-3">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?php echo e($totalDispute); ?></h3>

					<p><?php echo e(__('Total Dispute')); ?></p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="<?php echo e(url(config('adminPrefix').'/disputes')); ?>" class="small-box-footer"><?php echo e(__('More info')); ?> <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>


	<div class="row mt-20">
		<!--Graph Line Chart last 30 days start-->
		<div class="col-md-12">
			<!-- LINE CHART -->
			<div class="box box-info">
				<div class="box-header with-border">
					<div id="row">
						<div class="col-md-12">
							<div class="text-center f-14">
								<strong><?php echo e(__('Last 30 days')); ?></strong>
							</div>
						</div>
					</div>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>

				<div class="box-body">
					<div class="chart">
						<canvas id="lineChart" height="246" width="1069"></canvas>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer with-border">
					<div class="row ms-3" id="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1">
									<div id="deposit">
									</div>
								</div>
								<div class="col-md-8 scp">
									<?php echo e(__('Deposit')); ?>

								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1">
									<div id="withdrawal">
									</div>
								</div>
								<div class="col-md-8 scp">
									<?php echo e(__('Payout')); ?>

								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="row">
								<div class="col-md-1">
									<div id="transfer">
									</div>
								</div>

								<div class="col-md-8 scp">
									<?php echo e(__('Transfer')); ?>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.box -->
		</div>
		<!--Graph Line Chart last 30 days end-->
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="box box-info">
				<div class="box box-body">
					<!-- Custom Tabs (Pulled to the right) -->
					<div class="nav-tabs-custom">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#tab_1_tab" type="button" role="tab" aria-controls="tab_1" aria-selected="true"><?php echo e(__('This Week')); ?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab_2" data-bs-toggle="tab" data-bs-target="#tab_2_tab" type="button" role="tab" aria-controls="tab_2" aria-selected="false"><?php echo e(__('Last Week')); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab_3" data-bs-toggle="tab" data-bs-target="#tab_3_tab" type="button" role="tab" aria-controls="contact" aria-selected="false"><?php echo e(__('This Month')); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab_4" data-bs-toggle="tab" data-bs-target="#tab_4_tab" type="button" role="tab" aria-controls="contact" aria-selected="false"><?php echo e(__('Last Month')); ?></button>
                            </li>
                          </ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="tab_1_tab" role="tabpanel" aria-labelledby="tab_1">
								<div class="box-header with-border px-2 py-4">
								    <div class="row">
                                        <div class="col-3 f-18 fw-bold"><?php echo e(__('Total Profit')); ?></div>
                                        <div class="col-9 f-18 fw-bold"><?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_week_revenue))); ?></div>
                                    </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body px-2 py-4">
									<div class="d-flex">
										<span class="progress-label col-3"><strong><?php echo e(__('Deposit Profit')); ?></strong></span>
										<div class="progress col-9">
											<div class="progress-bar progress-bar-deposit" role="progressbar" aria-valuenow="<?php echo e($this_week_deposit_percentage); ?>" aria-valuemin="0" aria-valuemax="100"
											style='width:<?php  echo $this_week_deposit_percentage ?>%'>
											    <span class="">
                                                    <?php if($this_week_deposit_percentage >= 12.5): ?>
                                                    <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_week_deposit))); ?>

                                                    <?php else: ?>
                                                    <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_week_deposit))); ?>

                                                    <?php endif; ?>
												</span>
											</div>
										</div>
									</div>

									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Payout Profit')); ?></strong></span>
										<div class="progress col-9">
											<div class="progress-bar progress-bar-withdrawal" role="progressbar" aria-valuenow="<?php echo e($this_week_withdrawal_percentage); ?>" aria-valuemin="0" aria-valuemax="100"
											style='width:<?php  echo $this_week_withdrawal_percentage ?>%'>
												<span class="">
													<?php if($this_week_withdrawal_percentage >= 12.5): ?>
													<?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_week_withdrawal))); ?>

													<?php else: ?>
													<?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_week_withdrawal))); ?>

													<?php endif; ?>
												</span>
											</div>
										</div>
									</div>

									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Transfer Profit')); ?></strong></span>
										<div class="progress col-9">
											<div class="progress-bar progress-bar-transfer" role="progressbar" aria-valuenow="<?php echo e($this_week_transfer_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $this_week_transfer_percentage ?>%'>
											<span class="">
												<?php if($this_week_transfer_percentage >= 12.5): ?>
												<?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_week_transfer))); ?>

												<?php else: ?>
												<?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_week_transfer))); ?>

												<?php endif; ?>
											</span>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<!-- /.box -->
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane fade" id="tab_2_tab" aria-labelledby="tab_2">
                                <div class="box-header with-border px-2 py-4">
								    <div class="row">
                                        <div class="col-3 f-18 fw-bold"><?php echo e(__('Total Profit')); ?></div>
                                        <div class="col-9 f-18 fw-bold"><?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_week_revenue))); ?></div>
                                    </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body px-2 py-4">
                                    <div class="d-flex">
                                        <span class="progress-label col-3"><strong><?php echo e(__('Deposit Profit')); ?></strong></span>
                                        <div class="progress col-9">
                                            <div class="progress-bar progress-bar-deposit" role="progressbar" aria-valuenow="<?php echo e($last_week_deposit_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_week_deposit_percentage ?>%'>
                                                <span class="">
                                                    <?php if($last_week_deposit_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_week_deposit))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_week_deposit))); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <span class="progress-label col-3"><strong><?php echo e(__('Payout Profit')); ?></strong></span>
                                        <div class="progress col-9">
                                            <div class="progress-bar progress-bar-withdrawal" role="progressbar" aria-valuenow="<?php echo e($last_week_withdrawal_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_week_withdrawal_percentage ?>%'>
                                                <span class="">
                                                    <?php if($last_week_withdrawal_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_week_withdrawal))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_week_withdrawal))); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <span class="progress-label col-3"><strong><?php echo e(__('Transfer Profit')); ?></strong></span>
                                        <div class="progress col-9">
                                            <div class="progress-bar progress-bar-transfer" role="progressbar" aria-valuenow="<?php echo e($last_week_transfer_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_week_transfer_percentage ?>%'>
                                                <span class="">
                                                    <?php if($last_week_transfer_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_week_transfer))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_week_transfer))); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<!-- /.box-body -->
								<!-- /.box -->
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane fade" id="tab_3_tab" aria-labelledby="tab_3">
                                <div class="box-header with-border px-2 py-4">
								    <div class="row">
                                        <div class="col-3 f-18 fw-bold">Total Profit</div>
                                        <div class="col-9 f-18 fw-bold"><?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_month_revenue))); ?></div>
                                    </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body px-2 py-4">
									<div class="d-flex">
										<span class="progress-label col-3"><strong><?php echo e(__('Deposit Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-deposit" role="progressbar" aria-valuenow="<?php echo e($this_month_deposit_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $this_month_deposit_percentage ?>%'>
                                                <span class="">
                                                    <?php if($this_month_deposit_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_month_deposit))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_month_deposit))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Payout Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-withdrawal" role="progressbar" aria-valuenow="<?php echo e($this_month_withdrawal_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $this_month_withdrawal_percentage ?>%'>
                                                <span class="">
                                                    <?php if($this_month_withdrawal_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_month_withdrawal))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_month_withdrawal))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Transfer Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-transfer" role="progressbar" aria-valuenow="<?php echo e($this_month_transfer_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $this_month_transfer_percentage ?>%'>
                                                <span class="">
                                                    <?php if($this_month_transfer_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($this_month_transfer))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($this_month_transfer))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<!-- /.box -->
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane fade" id="tab_4_tab" aria-labelledby="tab_4">
                                <div class="box-header with-border px-2 py-4">
								    <div class="row">
                                        <div class="col-3 f-18 fw-bold"><?php echo e(__('Total Profit')); ?></div>
                                        <div class="col-9 f-18 fw-bold"><?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_month_revenue))); ?></div>
                                    </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body px-2 py-4">
									<div class="d-flex">
										<span class="progress-label col-3"><strong><?php echo e(__('Deposit Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-deposit" role="progressbar" aria-valuenow="<?php echo e($last_month_deposit_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_month_deposit_percentage ?>%'>
                                                <span class="">
                                                    <?php if($last_month_deposit_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_month_deposit))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_month_deposit))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Payout Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-withdrawal" role="progressbar" aria-valuenow="<?php echo e($last_month_withdrawal_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_month_withdrawal_percentage ?>%'>
                                                <span class="">
                                                    <?php if($last_month_withdrawal_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_month_withdrawal))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_month_withdrawal))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
									<div class="d-flex mt-2">
										<span class="progress-label col-3"><strong><?php echo e(__('Transfer Profit')); ?></strong></span>
										<div class="progress col-9">
										    <div class="progress-bar progress-bar-transfer" role="progressbar" aria-valuenow="<?php echo e($last_month_transfer_percentage); ?>" aria-valuemin="0" aria-valuemax="100" style='width:<?php  echo $last_month_transfer_percentage ?>%'>
											    <span class="">
                                                    <?php if($last_month_transfer_percentage >= 12.5): ?>
                                                        <?php echo e(moneyFormat($defaultCurrency->symbol,formatNumber($last_month_transfer))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(moneyFormatForDashboardProgressBars($defaultCurrency->symbol,formatNumber($last_month_transfer))); ?>

                                                    <?php endif; ?>
                                                </span>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<!-- /.box -->
							</div>
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- nav-tabs-custom -->
				</div>
			</div>

			<div class="box box-info">
				<div class="box-header">
					<h4 class="text-justify f-18 fw-bold ms-2"><?php echo e(__('Latest Ticket')); ?></h4>
				</div>
				<div class="box box-body">
					<?php if(!empty($latestTicket)): ?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead class="text-left f-14">
                                <tr>
                                    <th><?php echo e(__('Subject')); ?></th>
                                    <th><?php echo e(__('User')); ?></th>
                                    <th><?php echo e(__('Priority')); ?></th>
                                    <th><?php echo e(__('Created Date')); ?></th>
                                </tr>
							</thead>
							<tbody>
                                <?php $__currentLoopData = $latestTicket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-left f-14">
                                        <td class="w-35pct"><a href='<?php echo e(url(config('adminPrefix')."/tickets/reply", $ticket->id)); ?>'><?php echo e($ticket->subject); ?></a></td>
                                        <td class="w-20pct"><a href='<?php echo e(url(config('adminPrefix')."/users/edit", $ticket->user_id)); ?>'><?php echo e(getColumnValue($ticket)); ?></a></td>
                                        <td class="w-10pct"><?php echo e($ticket->priority); ?></td>
                                        <td class="w-20pct"><?php echo e(dateFormat($ticket->created_at)); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<?php else: ?>
					<h4 class="text-center"><?php echo e(__('No Latest Ticket')); ?></h4>
					<?php endif; ?>
				</div>
			</div>

			<div class="box box-info">
				<div class="box-header">
					<h4 class="text-justify f-18 fw-bold ms-2"><?php echo e(__('Latest Dispute')); ?></h4>
				</div>

				<div class="box box-body">
					<?php if(!empty($latestDispute)): ?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead class="text-left f-14">
							<tr>
								<th><?php echo e(__('Dispute')); ?></th>
								<th><?php echo e(__('Claimant')); ?></th>
								<th><?php echo e(__('Created Date')); ?></th>
							</tr>
							</thead>
							<tbody>
							<?php $__currentLoopData = $latestDispute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="text-left f-14">
								<td class="w-40pct"><a href='<?php echo e(url(config('adminPrefix')."/dispute/discussion", $dispute->id)); ?>'><?php echo e($dispute->title); ?></a></td>
								<td class="w-30pct"><a href='<?php echo e(url(config('adminPrefix')."/users/edit", $dispute->claimant_id)); ?>'><?php echo e(getColumnValue($dispute)); ?></a></td>
								<td class="w-30pct"><?php echo e(dateFormat($dispute->created_at)); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<?php else: ?>
						<h4 class="text-center"><?php echo e(__('No Latest Dispute')); ?></h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box box-info">
				<div class="box-header">
                    <div class="fs-5 fw-bold ms-2">
                        <?php echo e(__('Wallet Balance')); ?>

                    </div>
				</div>
				<div class="box box-body f-14">
					<?php if(!empty($wallets)): ?>
					<?php $__currentLoopData = $wallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code=>$wallet_amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="wallet-parent">
                            <div class="float-start w-60pct">
                                <div class="min-h-25"><?php echo e($code); ?></div><div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="wal-amount">
                                <?php echo e($wallet_amount); ?>

                            </div>
                        </div>
                        <div class="clearfix"></div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<?php else: ?>
					    <h5 class="text-center"><?php echo e(__('No Wallet Balance')); ?></h5>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('extra_body_scripts'); ?>

<script src="<?php echo e(asset('public/dist/libraries/chartjs/Chart.min.js')); ?>" type="text/javascript"></script>

<script>

$(function () {
'use strict';
	var areaChartData = {
	labels: jQuery.parseJSON('<?php echo $date; ?>'),
	datasets: [
		{
		label: "Deposit" + " " + "(<?php echo $defaultCurrency->symbol; ?>)",

		fillColor: "#78BEE6",
		strokeColor: "#78BEE6",
		pointColor: "#78BEE6",

		pointStrokeColor: "#429BCE",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(66,155,206, 1)",
		data: <?php echo $depositArray; ?>

		},
		{
		label: "Payout" + " " + "(<?php echo $defaultCurrency->symbol; ?>)",

		fillColor: "#FBB246",
		strokeColor: "#FBB246",
		pointColor: "#FBB246",

		pointStrokeColor: "rgba(255,105,84,1)",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(255,105,84,1)",
		data: <?php echo $withdrawalArray; ?>

		},
		{
		label: "Transfer" + " " + "(<?php echo $defaultCurrency->symbol; ?>)",

		fillColor: "#67FB4A",
		strokeColor: "#67FB4A",
		pointColor: "#67FB4A",

		pointStrokeColor: "rgba(47, 182, 40,1)",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(47, 182, 40,1)",
		data : <?php echo $transferArray; ?>

		}
	]
	};

	var areaChartOptions = {
	//Boolean - If we should show the scale at all
	showScale: true,
	//Boolean - Whether grid lines are shown across the chart
	scaleShowGridLines: false,
	//String - Colour of the grid lines
	scaleGridLineColor: "rgba(0,0,0,.05)",
	//Number - Width of the grid lines
	scaleGridLineWidth: 1,
	//Boolean - Whether to show horizontal lines (except X axis)
	scaleShowHorizontalLines: true,
	//Boolean - Whether to show vertical lines (except Y axis)
	scaleShowVerticalLines: true,
	//Boolean - Whether the line is curved between points
	bezierCurve: true,
	//Number - Tension of the bezier curve between points
	bezierCurveTension: 0.3,
	//Boolean - Whether to show a dot for each point
	pointDot: false,
	//Number - Radius of each point dot in pixels
	pointDotRadius: 4,
	//Number - Pixel width of point dot stroke
	pointDotStrokeWidth: 1,
	//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
	pointHitDetectionRadius: 20,
	//Boolean - Whether to show a stroke for datasets
	datasetStroke: true,
	//Number - Pixel width of dataset stroke
	datasetStrokeWidth: 2,
	//Boolean - Whether to fill the dataset with a color
	datasetFill: true,
	//String - A legend template
	legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
	//Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	maintainAspectRatio: true,
	//Boolean - whether to make the chart responsive to window resizing
	responsive: true
	};
	//-------------
	//- LINE CHART -
	//--------------
	var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
	var lineChart = new Chart(lineChartCanvas);
	var lineChartOptions = areaChartOptions;
	lineChartOptions.datasetFill = false;
	lineChart.Line(areaChartData, lineChartOptions);
});
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', $breadcrumb, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>