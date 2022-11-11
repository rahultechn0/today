
@include('header')



<div class="content-body">

  <div class="container-fluid">
    <div class="form-head mb-sm-2 mb-2 d-flex align-items-center flex-wrap">
            <h3 class="font-w600 mb-0 me-auto mb-2">Team</h3>
          </div>
    <div class="row">

      <div class="col-xl-6 col-sm-6 m-t35">
            <div class="card card-coin">
              <div class="card-body text-center">
                <img src="{{asset('backend/assets/images/logo-icon.png')}}" alt="" class="img-fluid currency-icon">
                <h4>Team Size</h4>
                <h5 class="mb-2">@php echo count($teamSize); @endphp</h5>
              </div>
            </div>
          </div>

           <div class="col-xl-6 col-sm-6 m-t35">
            <div class="card card-coin">
              <div class="card-body text-center">
                <img src="{{asset('backend/assets/images/logo-icon.png')}}" alt="" class="img-fluid currency-icon">
                <h4>Team Business</h4>
                <h5 class="mb-2">$@php echo number_format($teamBusiness,4); @endphp</h5>
              </div>
            </div>
          </div>
        </div>

              <div class="row">

                    <div class="col-xl-12 col-xxl-12">
                    <div class="form-head mb-sm-2 mb-2 d-flex align-items-center flex-wrap">
                      <h3 class="font-w600 mb-0 me-auto mb-2">My Level wise Team Size</h3>
                    </div>
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="w-100 display dataTable" role="grid" aria-describedby="example_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">S.No.</th>


                                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Level Type</th>


                                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Team Size</th>
                                </tr>
                              </thead>
                                  <tbody>
                                    @if(!empty($levelArr))

                                      @foreach($levelArr as $key => $kk )
                                      @if($kk==!0)
                                         <tr>
                                          <td>{{ $key+1 }}</td>
                                          <td>Level @php echo ($key+1) ;@endphp</td>
                                          <td>@php echo $kk;@endphp</td>
                                         </tr>
                                         @endif
                                      @endforeach
                                    @endif
                                  </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>

                </div>
            </div>
  </div>
  </div>

@include('footer')





