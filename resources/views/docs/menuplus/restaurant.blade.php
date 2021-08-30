@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="list">
        <h3 class="text-center">List Restaurants</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/restaurants</code>
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
    "data": [
        {
            "id": 3,
            "name": "Anderson, Lind and Feeney",
            "address": "2059 Sigurd Path Apt. 891",
            "phone_number": "443-901-4080",
            "email": "domenico13@example.org",
            "subscription": "quarterly",
            "status": 0,
            "capacity": 95,
            "description": "Aut adipisci quos quia quos. Repudiandae omnis consectetur voluptas exercitationem.",
            "logo": null,
            "staff_qr_key": null,
            "customer_qr_key": null,
            "created_at": "2021-07-27T13:14:22.000000Z",
            "restaurant_user": null
        },
        {
            "id": 4,
            "name": "Sawayn-Olson",
            "address": "440 Elton Unions Suite 028",
            "phone_number": "832.682.4054",
            "email": "rsporer@example.com",
            "subscription": "annually",
            "status": 0,
            "capacity": 685,
            "description": "Iure et quibusdam earum velit ipsum. Porro aut explicabo deleniti asperiores nihil.",
            "logo": null,
            "staff_qr_key": null,
            "customer_qr_key": null,
            "created_at": "2021-07-27T13:14:22.000000Z",
            "restaurant_user": null
        },
        ...
    ],
    "pagination": {
        "total": 36,
        "count": 15,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 3
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/restaurants?page=1",
        "last": "http://127.0.0.1:8000/api/restaurants?page=3",
        "prev": null,
        "next": "http://127.0.0.1:8000/api/restaurants?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        ...
    }
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="create">
        <h3 class="text-center">Create Restaurant</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/restaurants</code>
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
                                    <td>name</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Menuplus</code></td>
                                </tr>
                                <tr>
                                    <td>state</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>New State</code></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>New City</code></td>
                                </tr>
                                <tr>
                                    <td>Suburb</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>New Suburb</code></td>
                                </tr>
                                <tr>
                                    <td>post_code</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>1234</code></td>
                                </tr>
                                <tr>
                                    <td>business_type</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Cafe & Takeaway|Restaurants|Pubs & Clubs|Hotels|Service Apartments</code></td>
                                </tr>
                                <tr>
                                    <td>fullname</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Menuplus User</code></td>
                                </tr>
                                <tr>
                                    <td>address</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Kanda, 441</code></td>
                                </tr>
                                <tr>
                                    <td>phone_number</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>0249952818</code></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>menuplus@api.com</code></td>
                                </tr>
                                <tr>
                                    <td>subscription</td>
                                    <td><code>enum</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>monthly|quarterly|annually</code></td>
                                </tr>
                                <tr>
                                    <td>status</td>
                                    <td><code>boolean</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>true|false</code></td>
                                </tr>
                                <tr>
                                    <td>capacity</td>
                                    <td><code>integer</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>100</code></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>5 star restaurant with all the things one would expect from a good restaurant</code></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>5 star restaurant with all the things one would expect from a good restaurant</code></td>
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
        "id": 43,
        "name": "Menuplus1",
        "state": "New State",
        "city": "New City",
        "suburb": "New suburb",
        "post_code": "1234",
        "business_type": "Restaurants",
        "address": "Kanda, 441",
        "phone_number": "0249952810",
        "email": "menuplus1@api.com",
        "status": true,
        "capacity": 123,
        "description": "Special menuplus restaurant",
        "logo": null,
        "staff_qr_key": null,
        "customer_qr_key": null,
        "created_at": "2021-08-17T12:32:17.000000Z",
        "restaurant_user": {
            "id": 13,
            "restaurant_id": 43,
            "fullname": "Menuplus User1",
            "phone_number": "0249952810",
            "email": "menuplus1@api.com",
            "access_rights": null,
            "profile_pic": null,
            "created_at": "2021-08-17T12:32:17.000000Z",
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

    <div class="container-fluid" id="delete">
        <h3 class="text-center">Delete Restaurant</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/restaurants/:id</code>
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
        "message": "Restaurant successfully deleted"
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

    <div class="container-fluid" id="update">
        <h3 class="text-center">Update Restaurant</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/restaurants/:id</code>
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
                                    <td>name</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>New Restaurant</code></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>new@email.com</code></td>
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
        "name": "New Restaurant",
        "state": "Ohio",
        "city": "Hailieville",
        "suburb": "Lake Selena",
        "post_code": "1666",
        "business_type": "Restaurants",
        "address": "49875 Lueilwitz Parks Apt. 105",
        "phone_number": "234.530.4256",
        "email": "new@email.com",
        "status": 1,
        "capacity": 203,
        "description": "Qui qui est autem dolor. Culpa quae inventore sed. Voluptate saepe ratione facere.",
        "logo": null,
        "staff_qr_key": null,
        "customer_qr_key": null,
        "created_at": "2021-08-17T09:56:58.000000Z",
        "restaurant_user": null
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="view">
        <h3 class="text-center">View Restaurant Details</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/restaurants/:id</code>
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
        "id": 1,
        "name": "Kassulke, Auer and Treutel",
        "state": "Delaware",
        "city": "West Tianna",
        "suburb": "New Kameron",
        "post_code": "4630",
        "business_type": "Restaurants",
        "address": "11977 Bode Forest Suite 293",
        "phone_number": "(651) 821-0843",
        "email": "jerde.milford@example.org",
        "status": 1,
        "capacity": 860,
        "description": "Nulla quam ut magni esse veritatis quia molestias. Et et eius odit odit ratione libero.",
        "logo": null,
        "staff_qr_key": null,
        "customer_qr_key": null,
        "created_at": "2021-08-25T12:36:51.000000Z",
        "restaurant_user": null
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="cities-page">
        <h3 class="text-center">List Business Types and Statuses</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/restaurants/cities</code>
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
    "data": [
        {
            "business_type": "Restaurants",
            "active": 10,
            "inactive": 5
        },
        {
            "business_type": "Pubs & Clubs",
            "active": 9,
            "inactive": 6
        },
        {
            "business_type": "Cafe & Takeaway",
            "active": 6,
            "inactive": 12
        },
        {
            "business_type": "Hotels & Service Apartments",
            "active": 8,
            "inactive": 4
        }
    ]
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="subscribe">
        <h3 class="text-center">Subscribe Restaurant to a plan</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/restaurants/:id/subscribe</code>
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
                                    <td>Authorization</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>Bearer 1|0w1yJ3g5s1Ne5oSKqPFzRACmt566Nxc6Dld2175L</code></td>
                                </tr>
                                <tr>
                                    <td>pricing_id</td>
                                    <td><code>string</code></td>
                                    <td>Header</td>
                                    <td>Yes</td>
                                    <td><code>1</code></td>
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
        "id": 5,
        "pricing_id": "1",
        "restaurant_id": 1,
        "status": null,
        "created_at": "2021-08-22T12:30:24.000000Z"
    }
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="list-restaurant-users">
        <h3 class="text-center">List Restaurant Users</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/restaurant-users</code>
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
    "data": [
        {
            "id": 1,
            "restaurant_name": "Torphy-Jast",
            "fullname": "Ellis Larkin",
            "phone_number": "+1-531-994-8282",
            "email": "kirlin.abagail@example.net",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Restaurant User"
        },
        {
            "id": 2,
            "restaurant_name": "Labadie and Sons",
            "fullname": "Magdalen Hand",
            "phone_number": "859.482.1070",
            "email": "sonny.monahan@example.com",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Restaurant User"
        },
        {
            "id": 3,
            "restaurant_name": "Fahey-Hyatt",
            "fullname": "Ana Wolff",
            "phone_number": "1-332-755-4371",
            "email": "pmacejkovic@example.net",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Restaurant User"
        },
        {
            "id": 4,
            "restaurant_name": "Veum, Feest and Walker",
            "fullname": "Giovani Purdy",
            "phone_number": "1-631-771-3988",
            "email": "courtney20@example.com",
            "access_rights": "all",
            "profile_pic": null,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Restaurant User"
        },
        ...
    ],
    "pagination": {
        "total": 12,
        "count": 12,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 1
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/restaurant-users?page=1",
        "last": "http://127.0.0.1:8000/api/restaurant-users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        ...
    }
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection
