@include('header')
<div class="content-body">
    <div class="container-fluid">
        <div class="package-form-outer">
            <div class="form-head section-heading">
                <h2 class="font-w600 title mb-2 me-auto ">Package</h2>
            </div>
            <div class="package-form">
                <div class="row">

                    @foreach ($packages as $package)
                        <div class="col-md-6">
                            <div class="col-md-5 col-sm-6 col-12">
                                <p>Amount {{ $package->minDeposit }} to {{ $package->maxDeposit }}</p>
                                <div class="form-group">
                                    <input type="number" name="amt_1" id="amt{{ $package->id }}" class="form-control pgAmt"
                                        placeholder="Amount" required>
                                        <div id="error" class="error"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mb-2">
                                <div class=" fw500 mb-1">Select Currency</div>
                                <div class="select_d">
                                    <select class="form-control" name="currency" id="currency" onchange="setamount();">
                                        @foreach($currencyList as $currency )
                                            <option value="{{ $currency->id }}">{{$currency['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <div class="invest-btn-outer">
                                    <button type="button" onclick="deposit({{ $package->id }});"
                                        class="btn btn-primary depositRe">Invest</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <h2 class="font-w600 title mb-2 me-auto ">Active Package</h2>
                <div class="row">

                    @forelse($latestPackage as $item)
                        <div class="col-sm-6">
                            <div class="card-bx stacked card">
                                <img src="{{ asset('backend/assets/images/card/card1.jpg') }}" alt="">
                                <div class="card-info">
                                    <h2 class="num-text text-white font-w600">Package Amount</h2>
                                    <div class="amount-icon-outer d-flex justify-content-between">
                                        {{-- <p class="mb-1 text-white fs-14 mb-5">$
                                            {{ !empty($item) ? number_format((float) $item->amount, 2, '.', '') : 0 }}
                                        </p> --}}

                                        <h5 class="text-white mb-2">$<b>{{ !empty($item) ? number_format( $item->amount, 2) : 0 }}</b><br /><a href="javascript:void(0)"
                                            data-trans="4" data-amount="{{ $item->amount }}"
                                            class="btn btn5  unstack mt-2">Unstack</a></h5>

                                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>

                                    <div class="d-flex">
                                        <div class="me-4 text-white">
                                            <p class="fs-12 mb-1 op6">ROI</p>
                                            <span> $ {{ number_format($item->total_roi, 4) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                        <p> No Active Package </p>
                    @endforelse

                    <div class="referral-main-outer col-xl-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="referral-left">
                                        <h4>My Referral Link</h4>
                                        @if ($userData->packageAmt > 0)
                                            <p>
                                            <h3 class="title-footer-dashboard">Your Referral Link:</br>
                                                <p class="m-0" style="word-break:break-all;" id="refLink_1">
                                                    http://127.0.0.1:8000/register/{{ $userData['registerId'] }}</p>
                                                <button class="btn btn-blue lighten-2"
                                                    onclick="copyElementText('refLink_1');">Copy</button>
                                                </p>
                                            @else
                                                <p class="m-0" style="word-break:break-all;"> You will get your
                                                    referral link after investing</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="referral-right">
                                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-head d-flex flex-wrap align-items-center">
            <h2 class="font-w600 title mb-2 me-auto ">Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                            class="img-fluid currency-icon" />
                        <h4>Team Size</h4>
                        <h5 class="text-white mb-2">{{ count($teamSize) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                            class="img-fluid currency-icon" />
                        <h4>Total Income</h4>
                        <h5 class="text-white mb-2">$<b>@php echo number_format($grnadTotal,2);@endphp</b><br /><a href="javascript:void(0)"
                                data-trans="0" data-amount="@php echo $grnadTotal; @endphp"
                                class="btn btn5  withRe mt-2">Withdraw Now</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                            class="img-fluid currency-icon" />
                        <h4>ROI Income</h4>
                        <h5 class="text-white mb-2">$@php echo number_format($userRoi,2);@endphp</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                            class="img-fluid currency-icon" />
                        <h4>Referral Income</h4>
                        <h5 class="text-white mb-2">$@php echo number_format($userReferral,2);@endphp</h5>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""
                            class="img-fluid currency-icon" />
                        <h4>Level Income</h4>
                        <h5 class="text-white mb-2">$@php echo number_format($userLevel,2);@endphp</h5>
                    </div>
                </div>
            </div> --}}


        </div>
        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="mb-0 fs-20 text-white">Level Income</h4>
                    </div>
                    <div class="card-body p-3 pb-0 sell-order">
                        <div class="table-responsive">
                            <table class="table text-center bg-info-hover tr-rounded order-tbl">
                                <thead class="position-sticky">
                                    <tr>
                                        <th class="text-left text-white"><b>Level</b></th>
                                        <th class="text-center text-white"><b>Bonus</b></th>
                                        <th class="text-right text-white"><b>Team Size</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($levelIncomes as $key => $levelIncome)
                                        <tr>
                                            <td class="text-left">{{ $key + 1 }}</td>
                                            <td>{{ $levelIncome->amount }}</td>
                                            <td class="text-right">0</td>
                                        </tr>
                                    @empty
                                        <p>No record found</p>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@include('footer')
