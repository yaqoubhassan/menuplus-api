@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="create">
        <h3 class="text-center">Create Menu</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/menus</code>
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
                                    <td>restaurant_id</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>1</code></td>
                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>new menu</code></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>new menu description</code></td>
                                </tr>
                                <tr>
                                    <td>enabled</td>
                                    <td><code>bool</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>true|false</code></td>
                                </tr>
                                <tr>
                                    <td>image</td>
                                    <td><code>image</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>image.jpeg</code></td>
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
        "restaurant_id": "1",
        "name": "new menu",
        "description": "new menu description",
        "enabled": "0",
        "image": "https://menuplus-dev-921487239036.s3.ap-southeast-2.amazonaws.com/uploads/menu/image/_new menu_image.jpeg"
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
