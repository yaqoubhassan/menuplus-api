@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="search-for-restaurant">
        <h3 class="text-center">Search For Restaurant</h3>
        <h4 class="text-center">
            Search for Restaurants using name, email, state, city, suburb, post code or address<br/><br/>
            Endpoint: <code>/api/super-admin/search/restaurants</code>
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
                                    <td>keyword</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>Connecticut</code></td>
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
    "data": [
        {
            "id": 21,
            "name": "White Ltd",
            "state": "Connecticut",
            "city": "East Benedict",
            "suburb": "Tressaton",
            "post_code": "5522",
            "business_type": "Pubs & Clubs",
            "address": "65779 Nicklaus Village",
            "phone_number": "1-380-740-5668",
            "email": "germaine.dickens@example.com",
            "status": 1,
            "capacity": 789,
            "description": "Illum ea amet sit vitae ad. Ut totam quia quisquam quibusdam.",
            "logo": null,
            "staff_qr_key": null,
            "customer_qr_key": null,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "restaurant_user": null
        }
    ],
    "pagination": {
        "total": 1,
        "count": 1,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 1
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/search/restaurants?page=1",
        "last": "http://127.0.0.1:8000/api/search/restaurants?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        ...
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="search-for-admin-users">
        <h3 class="text-center">Search For Admin Users</h3>
        <h4 class="text-center">
            Search for Admin Users using firstname, lastname, email, number<br/><br/>
            Endpoint: <code>/api/super-admin/search/admin-users</code>
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
                                    <td>keyword</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>justice40@example.net</code></td>
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
    "data": [
        {
            "id": 7,
            "firstname": "Emily",
            "lastname": "Goldner",
            "email": "justice40@example.net",
            "number": "(740) 408-4719",
            "verification_code": null,
            "profile_pic": null,
            "activated": 0,
            "access_rights": "write_only",
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Super Admin"
        }
    ],
    "pagination": {
        "total": 1,
        "count": 1,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 1
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/search/admin-users?page=1",
        "last": "http://127.0.0.1:8000/api/search/admin-users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        ...
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="search-for-restaurant-admins">
        <h3 class="text-center">Search For Restaurant Admins</h3>
        <h4 class="text-center">
            Search for Restaurant Users by full name, phone number, email or restaurant name.<br/><br/>
            Endpoint: <code>/api/super-admin/search/restaurant-users</code>
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
                                    <td>keyword</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>bahringer.kathryn@example.org</code></td>
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
    "data": [
        {
            "restaurant_name": "Price LLC",
            "name": "Buddy McKenzie",
            "phone_number": "(734) 571-6818",
            "email": "bahringer.kathryn@example.org"
        }
    ],
    "pagination": {
        "total": 1,
        "count": 1,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 1
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/search/restaurant-users?page=1",
        "last": "http://127.0.0.1:8000/api/search/restaurant-users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        ...
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
