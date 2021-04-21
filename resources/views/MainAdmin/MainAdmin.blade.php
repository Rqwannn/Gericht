@extends('layouts/TamplateAdmin')

@section("title", "Dasbord")

@section('content')

    <div class="infoTopDasbord mt-3">
        <div class="headerDasbord d-flex justify-content-between">
            <h4 class="text-white">Dashbords</h4>
            <div class="btnTopDasbord mb-3">
                <button type="submit" class="btn">New</button>
                <button type="submit" class="btn">Filter</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="cardInfoDasbord mt-4">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="top-cardInfoDasbord d-flex flex-column">
                                <h5>Total Order</h5>
                                <h4 class="TotalOrder">0</h4>
                                <div class="pertumbuhanUntung d-flex mt-2">
                                    <i class="material-icons">trending_up</i>
                                    <p style="font-size: 14px; margin-left: 1vw;"> <span class="PersenPesanan">0</span> %</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end">
                            <a href="/totalOrder">
                                <div class="rounded-circle iconInfoDasbord d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-white">queue</i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="underCard">
                        <div class="underCardLine"></div>
                        <p class="pt-1">Since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cardInfoDasbord mt-4">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="top-cardInfoDasbord d-flex flex-column">
                                <h5>Total User</h5>
                                <h4 class="TotalUser">0</h4>
                                <div class="pertumbuhanUntung d-flex mt-2">
                                    <i class="material-icons">trending_up</i>
                                    <p style="font-size: 14px; margin-left: 1vw;"> <span class="PersenUser">0</span> %</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end">
                            <a href="/totalUser">
                                <div class="rounded-circle iconInfoDasbord-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons noteIcon text-white">pie_chart</i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="underCard">
                        <div class="underCardLine"></div>
                        <p class="pt-1">Since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cardInfoDasbord mt-4">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="top-cardInfoDasbord d-flex flex-column">
                                <h5>Revenue</h5>
                                <h4>$ <span class="totalRevenue">0</span></h4>
                                <div class="pertumbuhanUntung d-flex mt-2">
                                    <i class="material-icons">trending_up</i>
                                    <p style="font-size: 14px; margin-left: 1vw;"> <span class="PersenRevenue"></span> %</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end">
                            <a href="#">
                                <div class="rounded-circle iconInfoDasbord-3 d-flex align-items-center justify-content-center">
                                    <i class="material-icons noteIcon text-white">paid</i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="underCard">
                        <div class="underCardLine"></div>
                        <p class="pt-1">Since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cardInfoDasbord mt-4">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="top-cardInfoDasbord d-flex flex-column">
                                <h5>Subscribe</h5>
                                <h4 class="TotalSubscribe">0</h4>
                                <div class="pertumbuhanUntung d-flex mt-2">
                                    <i class="material-icons">trending_up</i>
                                    <p style="font-size: 14px; margin-left: 1vw;"> <span class="PersenSubscribe">0</span> %</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-end">
                            <a href="#">
                                <div class="rounded-circle iconInfoDasbord-4 d-flex align-items-center justify-content-center">
                                    <i class="material-icons noteIcon text-white">volunteer_activism</i>
                                </div>
                            </a>
                        </div>
                    </div> 
                    <div class="underCard">
                        <div class="underCardLine"></div>
                        <p class="pt-1">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-7">
            <div class="cardChart-1">
                <div class="lineCharts">
                    <div class="headerChart d-flex justify-content-between mb-3">
                        <div class="leftSide-Chart">
                            <p class="text-light" style="font-size: 13px; letter-spacing: 1px;">OVERVIEW</p>
                            <h5 class="text-white">Revenue Value</h5>
                        </div>
                        <div class="rightSide-Chart d-flex align-items-center">
                            <button type="submit" class="btn">Month</button>
                            <button type="submit" class="btn">Week</button>
                        </div>
                    </div>
                </div>
                <div id="chart-1" class="mt-3"></div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="cardChart-2">
                <div class="lineCharts-2">
                    <div class="headerChart mb-3">
                        <div class="leftSide-Chart">
                            <p class="text-secondary" style="font-size: 13px; letter-spacing: 1px;">Performance</p>
                            <h5 class="text-secondary">Total Order, User, Subscribe</h5>
                        </div>
                    </div>
                </div>
                <div id="chart-2" class="mt-3"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="cardEmploye">
            <div class="headerEmploye">
                <h5>Company Officials</h5>
            </div>
            <div class="contentEmploye mt-3">
                <table border="0">
                    <thead>
                        <th class="text-center">No</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Position</th>
                        <th>Country</th>
                    </thead>
                    <tbody>
                        <?php $Nomer = 1; ?>
                        @foreach ($Employe as $result)
                        <tr>
                            <td class="text-center">{{$Nomer++}}</td>
                            <td>{{$result->nama}}</td>
                            <td>{{$result->gaji}}</td>
                            <td>{{$result->jabatan}}</td>
                            <td>{{$result->negara}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection