
@include('header')   
<div class="content-body">
  <div class="container-fluid">
    <div class="row">
                  <div class="col-xl-12 col-xxl-12">
                    <div class="form-head mb-sm-2 mb-2 d-flex align-items-center flex-wrap">
                      <h3 class="font-w600 mb-0 me-auto mb-2">Withdrawal Report</h3>
                    </div>
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="w-100 display dataTable" role="grid" aria-describedby="example_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">S.No.</th>

                                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Withdrawal Type</th>
                                  

                                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Amount</th>

                                 
                                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Date & Time</th>
                                </tr>
                              </thead>
                                  <tbody>
                                      @foreach($transactions as $key => $trans )
                                      <tr class="odd" role="row">
                                          <td>{{ $key+1 }}</td>
                                          <td>@php if($trans['trans']==0) echo "Income"; else echo "Principle"; @endphp</td>
                                          <td>$@php echo $trans['amount']; @endphp</td>
                                          <td>@php echo $trans['created_at']; @endphp</td>
                                      </tr> 
                                      @endforeach
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
@include('footer') 