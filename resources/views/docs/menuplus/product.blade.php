@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid" id="list">
        <h3 class="text-center">List Products</h3>
        <h4 class="page-title text-center">
            Endpoint: <code>/api/super-admin/products</code>
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
            "name": "new product",
            "features": "all the new features"
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
        "first": "http://127.0.0.1:8000/api/products?page=1",
        "last": "http://127.0.0.1:8000/api/products?page=1",
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
        <h3 class="text-center">Create Product</h3>
        <h4 class="text-center">
            Endpoint: <code>/api/super-admin/products</code>
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
                                    <td><code>new product</code></td>
                                </tr>
                                <tr>
                                    <td>features</td>
                                    <td><code>string</code></td>
                                    <td>Body</td>
                                    <td>Yes</td>
                                    <td><code>all the new features</code></td>
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
        "name": "new product",
        "features": "all the new features"
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
