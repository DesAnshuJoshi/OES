@extends('layouts/admin-layout')

@section('space-work')
    <!--**********************************
            Content body start
        ***********************************-->
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
                            <div class="col-xl-12">
                                <div class="card tryal-gradient">
                                    <div class="card-body tryal row pt-3 pb-3">
                                        <div class="col-xl-8 col-sm-6">
                                            <h2>Streamline Your Online Examinations with EduTestify</h2>
                                            <span class="mt-2 mb-2">Empower EduTestify to Automatically Manage Your Online Examinations with Cutting-Edge Technology</span>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 text-right d-flex align-items-center justify-content-end"> <!-- Use 'text-right' to align content to the right and 'd-flex align-items-center' to vertically center the button -->
                                            <a href="javascript:void(0);" class="btn btn-rounded fs-18 font-w500">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12">
								<div class="row">
                                    {{-- Counters --}}
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $subjectCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Subjects</span>
														</div>
														<div>
															<i class="fas fa-book text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $examCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Exams</span>
														</div>
														<div>
															<i class="fas fa-clipboard-check text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $packageCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Packages</span>
														</div>
														<div>
															<i class="fas fa-box-open text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $questionCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Questions</span>
														</div>
														<div>
															<i class="fas fa-clipboard-list text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $examReviewedCount }}</h2>
															<span class="fs-18 font-w500 d-block">Exams Reviewed</span>
														</div>
														<div>
															<i class="fas fa-eye text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $studentCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Students</span>
														</div>
														<div>
															<i class="fas fa-user text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-sm-6">
												<div class="card">
													<div class="card-body d-flex justify-content-between align-items-center">
														<div>
															<h2 class="fs-32 font-w700">{{ $paymentCount }}</h2>
															<span class="fs-18 font-w500 d-block">Total Payments</span>
														</div>
														<div>
															<i class="fas fa-rupee-sign text-primary" style="font-size: 3rem;"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="row">
									
									<div class="col-xl-6 col-lg-12 col-sm-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">Subject wise Exams</h4>
											</div>
											<div class="card-body">
												<canvas id="barChart_1"></canvas>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-sm-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">Exams Attempted</h4>
											</div>
											<div class="card-body">
												<canvas id="barChart_2"></canvas>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-sm-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">Top Rankers</h4>
											</div>
											<div class="card-body">
												<canvas id="barChart_3"></canvas>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-sm-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">Attempted & Reviewed Exams</h4>
											</div>
											<div class="card-body">
												<canvas id="lineChart_1"></canvas>
											</div>
										</div>
									</div>

								</div>
							</div>

							

						</div>
					</div>
				</div>
            </div>
        <!--**********************************
            Content body end
        ***********************************-->
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/chartjs-init.js') }}"></script>
	
    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
@endsection

{{-- <div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>	
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>	
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>	
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress <small class="text-success">70%</small></span>	
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0">
														<div>
															<h4 class="fs-20 font-w700">Email Categories</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
														</div>	
													</div>	
													<div class="card-body">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4 class="fs-18 font-w600">Legend</h4>
														</div>
														<div>
															<div class="d-flex align-items-center justify-content-between mb-4">
																<span class="fs-18 font-w500">	
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#886CC0"></rect>
																	</svg>
																	Primary (27%)
																</span>
																<span class="fs-18 font-w600">763</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">	
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#26E023"></rect>
																	</svg>
																	Promotion (11%)
																</span>
																<span class="fs-18 font-w600">321</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">	
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#61CFF1"></rect>
																	</svg>
																	Forum (22%)
																</span>
																<span class="fs-18 font-w600">69</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">	
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FFDA7C"></rect>
																	</svg>
																	Socials (15%) 
																</span>
																<span class="fs-18 font-w600">154</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">	
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FF86B1"></rect>
																	</svg>
																	Spam (25%) 
																</span>
																<span class="fs-18 font-w600">696</span>
															</div>
														</div>
														
													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-rounded">Update Progress</a>		
														
													</div>
												</div>
											</div>	
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="fs-20 font-w700">Important Projects</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
														</div>
													</div>
													<div class="card-body pb-0">
														<div class="project-details"> 
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/big-wind.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Big Wind</h4>
																		<span class="fs-14 font-w400">Creative Agency</span>
																	</div>
																</div>	
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Optimization Dashboard Page for indexing in Google</h4>
															<div class="projects">
																<span class="badge bgl-warning text-warning font-w700 me-3">SEO</span>
																<span class="badge bgl-danger text-danger font-w700">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:10px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small class="font-w700 me-2">12</small>Task Done</span>
																	<span class="fs-14 font-w400">Due date: 12/05/2020</span>
																</div>
															</div>
														</div>	
														<div class="project-details"> 
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/circle-hunt.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Circle Hunt</h4>
																		<span class="fs-14 font-w400">Creative Agency</span>
																	</div>
																</div>	
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Redesign Landing Page Website for Company Profile</h4>
															<div class="projects">
																<span class="badge bgl-primary text-primary font-w700 me-3">UI/UX</span>
																<span class="badge bgl-danger text-danger font-w700">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:10px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small class="font-w700 me-2">12</small>Task Done</span>
																	<span class="fs-14 font-w400">Due date: 12/05/2020</span>
																</div>
															</div>
														</div>	
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-rounded">Pin other projects</a>
													</div>
												</div>
											</div>
										</div>	
									</div> --}}