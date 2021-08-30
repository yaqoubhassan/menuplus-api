@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="super-admin-login">
        <h3 class="text-center">Super Admin User Login</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/auth/login</code>
        </h4>
        <div class="row">
            <div class="col-md-12">
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
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>yaqoub@menuplus.com</code></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>secret</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Success Response row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="label label-success">Success Response</span>
                        </h3>
                    </div>
                    <div class="panel-body">
<pre>{
    "data": {
        "access_token": "1|0w1yJ3g5s1Ne5oSKqPFzRACmt566Nxc6Dld2175L",
        "token_type": "Bearer",
        "user": {
            "id": 1,
            "firstname": "Yakubu",
            "lastname": "Alhassan",
            "email": "yaqoub@menuplus.com",
            "number": "0249952818",
            "verification_code": null,
            "profile_pic": null,
            "activated": 1,
            "access_rights": "all",
            "created_at": "2021-07-27T13:14:22.000000Z",
            "user_type": "Super Admin"
        }
    }
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="restaurant-user-login">
        <h3 class="text-center">Restaurant User Login</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/auth/login</code>
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
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>faisal@menuplus.com</code></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>secret</code></td>
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
        "access_token": "2|mitvcl6oQn1q4fZ6iwXsG99g6ewufzoHQYSNDgmh",
        "token_type": "Bearer",
        "user": {
            "id": 2,
            "restaurant_id": 1,
            "fullname": "Faisal Alhassan",
            "phone_number": "0242623242",
            "email": "faisal@menuplus.com",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-07-27T13:14:22.000000Z",
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

    <div class="container-fluid" id="waiter-login">
        <h3 class="text-center">Waiter Login</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/auth/login</code>
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
                                    <td>fullName</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Myrtie Schulist</code></td>
                                </tr>
                                <tr>
                                    <td>pin</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>JhASim</code></td>
                                </tr>
                                <tr>
                                    <td>phoneNumber</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>754-555-1531</code></td>
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
        "access_token": "3|skdDRJ19NPF089DfYcuNrjLgiHphk9oKkT4ewfmE",
        "token_type": "Bearer",
        "user": {
            "id": 1,
            "restaurant_id": 21,
            "fullname": "Myrtie Schulist",
            "phone_number": "754-555-1531",
            "pin": "JhASim",
            "profile_pic": null,
            "employment_type": "casual",
            "on_shift": "no",
            "created_at": "2021-07-27T13:14:23.000000Z",
            "user_type": "Waiter"
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

    <div class="container-fluid" id="diner-login">
        <h3 class="text-center">Diner Login</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/auth/login</code>
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
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>alexandro.daugherty@example.org</code></td>
                                </tr>
                                <tr>
                                    <td>phoneNumber</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>262-827-0294</code></td>
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
        "access_token": "4|lxSkrPkTwVZs75PwUAmwW9dZAKkb9ML4uMmqrW2t",
        "token_type": "Bearer",
        "user": {
            "id": 4,
            "firstName": "Herbert",
            "lastName": "Heaney",
            "email": "alexandro.daugherty@example.org",
            "phoneNumber": "262-827-0294",
            "profile_pic": null,
            "temp_restaurant_id": 34,
            "created_at": "2021-07-27T13:14:23.000000Z",
            "user_type": "Diner"
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

    <div class="container-fluid" id="logout">
        <h3 class="text-center">Logout</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/auth/logout</code>
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
        "message": "Successfully logged out"
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
