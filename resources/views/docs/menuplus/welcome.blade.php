@extends('docs.layout')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Getting started</h3>
        <h4 class="page-title">
            Welcome to the documentation for Menuplus APIs.
        </h4>
        
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Status codes used in the application and their meanings</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Description</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>200</code></td>
                                    <td>Success</td>
                                </tr>
                                <tr>
                                    <td><code>204</code></td>
                                    <td>No content. Mostly for <code>DELETE</code> requests</td>
                                </tr>
                                <tr>
                                    <td><code>401</code></td>
                                    <td>Unauthenticated. Access token header missing or invalid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
            <p>
                Contact <a href="mailto:yaqoubdramani@gmail.com">Alhassan Yakubu</a> in case you spot any typo or issue.
            </p>
        </div>
    </div>
</div>
@endsection