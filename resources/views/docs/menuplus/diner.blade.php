@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="list">
        <h3 class="text-center">List Diners</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/diners</code>
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
                                    <td>restaurant_id</td>
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
    "data": [
        {
            "id": 3,
            "firstName": "Angus",
            "lastName": "Douglas",
            "email": "lyla79@example.com",
            "phoneNumber": "(715) 299-2999",
            "profile_pic": null,
            "temp_restaurant_id": 1,
            "created_at": "2021-08-17T09:56:58.000000Z",
            "user_type": "Diner"
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
        "first": "http://127.0.0.1:8000/api/diners?page=1",
        "last": "http://127.0.0.1:8000/api/diners?page=1",
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
            </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid" id="create">
        <h3 class="text-center">Create Diner</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/diners</code>
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
                                    <td>firstname</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Gabby</code></td>
                                </tr>
                                <tr>
                                    <td>lastname</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Alfred</code></td>
                                </tr>
                                <tr>
                                    <td>phoneNumber</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>0244123456</code></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>gabby@email.com</code></td>
                                </tr>
                                <tr>
                                    <td>profile_pic</td>
                                    <td><code>image</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>image.jpge</code></td>
                                </tr>
                                <tr>
                                    <td>temp_restaurant_id</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>3</code></td>
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
        "id": 12,
        "firstName": "Gabby",
        "lastName": "Alfred",
        "email": "gabby@email.com",
        "phoneNumber": "0244123456",
        "profile_pic": null,
        "temp_restaurant_id": "3",
        "created_at": "2021-08-17T19:56:50.000000Z",
        "user_type": "Diner"
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
