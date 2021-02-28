@extends('layouts/TamplateAdmin')

@section('title', "Total User")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Happy Work</h1>
        <p class="mt-4 text-white" style="width: 50%;">This is your page to manage the data of all users, be careful in deleting or changing data</p>
    </div>
</div>
<div class="col-md-12">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerTable">
                <h5 class="mt-2">Table User</h5>
            </div>
        </div>
        <div id="contentTable">
            <table border="0" id="TableOrder" class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Data as $result) : ?>
                        <tr>
                            <?php 
                                $setCreated = explode(" ", $result->created_at);
                                $getCreated = $setCreated[0];
                                ?>
                            <td>{{$i++}}</td>
                            <td>{{$result->name}}</td>
                            <td>{{$result->email}}</td>
                            <td style="color: <?php echo($result->status == "Premium") ? 'gold' : '#8898aa' ?>">{{$result->status}}</td>
                            <td>{{$getCreated}}</td>
                            <td>
                                <button type="submit" class="btn-table" onclick="intUpdate({{$result->id}})">Update</button>
                                <button type="submit" class="btn-table" onclick="intDelete({{$result->id}})">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="cardTableData mt-4">
            <div class="container">
                <div class="headerSold d-felx flex-column mt-2">
                    <p>Comparison</p>
                    <h5 class="mt-2">Lots Of Customers</h5>
                </div>
                <div class="contentSold mt-3">
                    <div id="chart-3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="cardTableData mt-4">
            <div class="container">
                <div class="headerSold d-felx flex-column mt-2">
                    <p>Performance</p>
                    <h5 class="mt-2">Premium User</h5>
                </div>
                <div class="contentSold">
                    <div id="contentTable">
                        <table border="0" id="TableOrder-2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Available</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($Data as $result) : ?>
                                    @if ($result->status == "Premium")
                                    <tr>
                                        <td>{{$result->name}}</td>
                                        <td style="color:gold;">{{$result->status}}</td>
                                    </tr>
                                    @endif
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection