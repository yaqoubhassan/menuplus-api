@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="update-restaurant-details">
        <h3 class="text-center">Update Restaurant Details</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/restaurant-admin/update-restaurant</code>
        </h4>
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Request</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>Required</th>
                                    <th>Sample</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Content-Type</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>application/json</code></td>
                                </tr>
                                <tr>
                                    <td>Accept</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>application/json</code></td>
                                </tr>
                                <tr>
                                    <td>Authorization</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>Bearer 1|0w1yJ3g5s1Ne5oSKqPFzRACmt566Nxc6Dld2175L</code></td>
                                </tr>
                                <tr>
                                    <td>business_type</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>Restaurants</code></td>
                                </tr>
                                <tr>
                                    <td>capacity</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>120</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
        <!--Success Response row -->
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="label label-success">Success Response</span>
                        </h3>
                    </div>
                    <div class="panel-body">
<pre>{
    "data": {
        "id": 11,
        "name": "Towne and Sons",
        "state": "Delaware",
        "city": "New Coyberg",
        "suburb": "Bergnaumport",
        "post_code": "2341",
        "business_type": "Restaurants",
        "address": "768 Roberta Grove",
        "phone_number": "+1 (882) 685-5452",
        "email": "cmayert@example.net",
        "status": 1,
        "capacity": "120",
        "description": "Voluptatem et beatae dolorem. Possimus dolor dignissimos perspiciatis dolor. Quia ut qui magni aut.",
        "logo": null,
        "staff_qr_key": null,
        "customer_qr_key": null,
        "created_at": "2021-08-25T12:36:51.000000Z",
        "restaurant_user": {
            "id": 1,
            "restaurant_name": "Towne and Sons",
            "fullname": "Tavares Smith",
            "phone_number": "354.503.3012 x880",
            "email": "nsmith@example.net",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-08-25T12:36:51.000000Z",
            "user_type": "Restaurant User"
        }
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="update-restaurant-admin-details">
        <h3 class="text-center">Update Restaurant Admin Details</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/restaurant-admin/update-restaurantAdmin</code>
        </h4>
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Request</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>Required</th>
                                    <th>Sample</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Content-Type</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>application/json</code></td>
                                </tr>
                                <tr>
                                    <td>Accept</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>application/json</code></td>
                                </tr>
                                <tr>
                                    <td>Authorization</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>Bearer 1|0w1yJ3g5s1Ne5oSKqPFzRACmt566Nxc6Dld2175L</code></td>
                                </tr>
                                <tr>
                                    <td>fullname</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>Gabby Alfred</code></td>
                                </tr>
                                <tr>
                                    <td>phone_number</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>0244444444</code></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>gabby@alfred.com</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
        <!--Success Response row -->
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="label label-success">Success Response</span>
                        </h3>
                    </div>
                    <div class="panel-body">
<pre>{
    "data": {
        "id": 1,
        "restaurant_name": "Towne and Sons",
        "fullname": "Gabby Alfred",
        "phone_number": "0244444444",
        "email": "gabby@alfred.com",
        "access_rights": "all",
        "profile_pic": null,
        "created_at": "2021-08-25T12:36:51.000000Z",
        "user_type": "Restaurant User"
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

</div>
@endsection
