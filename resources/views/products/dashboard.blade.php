@extends('layouts.layoutloggedin')

@section('content')



<div class="main">

  
      <div class="row content">
        

          <!-- /widget -->
          <div class="col-sm-12 col-md-12 col-lg-8 table-resposive">

            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                        <th colspan=2> Create a New Product Listing </th>
                        <th class="td-actions">
                            <a href="/newproduct" class="btn btn-md btn-info"><i class="btn-icon-only icon-ok"> Create </i></a>
                        </th>
                    </tr>
                    <tr>
                    <th colspan=2> Listings </th>
                    <th class="td-actions"> Manage </th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($posts as $post)

                  <tr>
                    <td> {{ $post->product_name }} </td>
                    <td> {{ $post->created_at->toFormattedDateString() }} </td>
                    <td class="td-actions">
                        <a href="/products/{{ $post->id }} " class="btn btn-small btn-info"><i class="btn-icon-only icon-ok"> View</i></a>
                        <a href="/edit/{{ $post->id }}" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove">Edit</i></a>
                    </td>
                  </tr>

                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          <div class="col-sm-12 col-md-12 col-lg-4 table-resposive">
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th colspan=2> Orders </th>
                    <th class="td-actions"> Manage </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Order Details </td>
                    <td> Order Date </td>
                    <td class="td-actions"></a><a href="" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> Manage </i></a></td>
                  </tr>
                  <tr>
                    <td> Order Details </td>
                    <td> Order Date </td>
                    <td class="td-actions"></a><a href="" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> Manage </i></a></td>
                  </tr>
                  <tr>
                    <td> Order Details </td>
                    <td> Order Date </td>
                    <td class="td-actions"></a><a href="" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> Manage </i></a></td>
                  </tr>                  <tr>
                    <td> Order Details </td>
                    <td> Order Date </td>
                    <td class="td-actions"></a><a href="" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> Manage </i></a></td>
                  </tr>             
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
      </div>
      <!-- /row -->  
</div>
<!-- /main -->

@endsection