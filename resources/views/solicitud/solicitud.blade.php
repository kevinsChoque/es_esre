@extends('layout.layout1')
@section('contenido')
<div class="container-fluid">
    <div class="alert alert-primary">
    	<h1 class="m-0">solicitud</h1>
    </div>
</div>
<div class="container-fluid">
	<div class="row my-2">
		<div class="col-lg-12">
			<button type="button" class="btn btn-success btn-rounded float-end" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Nueva Solicitud</button>
		</div>
	</div>
	<div class="card">
        <h5 class="card-header">SOLICITUDES DE RECLAMOS</h5>
        <div class="card-body">
        	<!-- <h4 class="header-title">Solicitudes de Reclamos</h4> -->
            <div class="row">
            	<table id="alternative-page-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
	                          	<div class="dropdown">
		                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
		                              	<i class="bx bx-dots-vertical-rounded"></i>
		                            </button>
		                            <div class="dropdown-menu">
		                              	<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
		                              	<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
		                            </div>
	                          	</div>
	                        </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                    </tbody>
                </table>
                <table id="test" class="table dt-responsive nowrap">
                	<thead>
                        <tr>
                            <th>c1</th>
                            <th>c2</th>
                            <th>c3</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="table-responsive text-nowrap">
        	<div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                        </div> 
                    </div> 
                </div>
            </div>
        </div> -->
    </div>
</div>
@include('solicitud.modals')
<script>
	$(document).ready(function () {
	    $('#test').DataTable();
	});
	// $("#alternative-page-datatable").DataTable({
	// 	pagingType:"full_numbers",
	// 	drawCallback:function(){
	// 		$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
	// 	}
	// })
</script>
@endsection