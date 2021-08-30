@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="list">
        <h3 class="text-center">List Super Admin Users</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/users</code>
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
            "firstname": "Forrest",
            "lastname": "Cummings",
            "email": "dickinson.chaz@example.net",
            "number": "651.477.3960",
            "verification_code": null,
            "profile_pic": null,
            "activated": 1,
            "access_rights": "all",
            "created_at": "2021-07-27T13:14:22.000000Z",
            "user_type": "Super Admin"
        },
        {
            "id": 2,
            "firstname": "Avis",
            "lastname": "Kshlerin",
            "email": "rstreich@example.com",
            "number": "1-248-883-8239",
            "verification_code": null,
            "profile_pic": null,
            "activated": 1,
            "access_rights": "all",
            "created_at": "2021-07-27T13:14:22.000000Z",
            "user_type": "Super Admin"
        },
        {
            "id": 3,
            "firstname": "Maida",
            "lastname": "Botsford",
            "email": "kozey.nico@example.org",
            "number": "+18207897673",
            "verification_code": null,
            "profile_pic": null,
            "activated": 0,
            "access_rights": "none",
            "created_at": "2021-07-27T13:14:22.000000Z",
            "user_type": "Super Admin"
        },
        ...
    ],
    "pagination": {
        "total": 11,
        "count": 11,
        "per_page": 15,
        "current_page": 1,
        "total_pages": 1
    },
    "links": {
        "first": "http://127.0.0.1:8000/api/user?page=1",
        "last": "http://127.0.0.1:8000/api/user?page=1",
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
        <h3 class="text-center">Create Super Admin User</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/users</code>
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
                                    <td><code>Yakubu</code></td>
                                </tr>
                                <tr>
                                    <td>lastname</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>Alhassan</code></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>yaqoub@menuplus.com</code></td>
                                </tr>
                                <tr>
                                    <td>number</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>0249952818</code></td>
                                </tr>
                                <tr>
                                    <td>access_rights</td>
                                    <td><code>enum</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>all|write_only|read_only|none</code></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>secret</code></td>
                                </tr>
                                <tr>
                                    <td>profile_pic</td>
                                    <td><code>image</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>image.png</code></td>
                                </tr>
                                <tr>
                                    <td>verification_code</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>0011223</code></td>
                                </tr>
                                <tr>
                                    <td>activated</td>
                                    <td><code>boolean</code></td>
                                    <td>Body</td>
                                    <td>No</td>
                                    <td><code>true|false</code></td>
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
        "message": "User successfully created"
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
        <h3 class="text-center">Delete Super Admin User</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/users/:id</code>
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
        "message": "User(s) deleted successfully"
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
        <h3 class="text-center">Update Super Admin User</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/users/:id</code>
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
                                    <td>No</td>
                                    <td><code>Yaqoub</code></td>
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
        "firstname": "Yaqoub",
        "lastname": "Legros",
        "email": "lbeahan@example.org",
        "number": "520-723-9075",
        "verification_code": null,
        "profile_pic": null,
        "activated": 1,
        "access_rights": "read_only",
        "created_at": "2021-08-17T09:56:58.000000Z",
        "user_type": "Super Admin"
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
