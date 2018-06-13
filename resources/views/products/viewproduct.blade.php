@extends('layouts.layoutloggedin')

@section('content')

<div class="container" id="product">
    <div class="row">

          <!-- /widget -->
          <div class="col-sm-12 col-md-8 col-lg-8 table-resposive">

            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>                 
                    <tr>
                        <th colspan=4> {{ $post->product_name }} </th>
                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <td colspan=2> {{ $post->product_desc }} </td>
                        <td colspan=2> <img src="" alt="Product Image" > </td>
                    </tr>

                    <tr>
                        <td> Price: ${{ $post->product_price }} </td>
                        <td colspan=3> Inventory: {{ $post->product_inventory }} </td>
                        
                    </tr>

                    <tr>
                        <td> Created on: {{ $post->created_at->toFormattedDateString() }} </td>
                        <td colspan=3> Last updated: {{ $post->updated_at->toFormattedDateString() }} </td>
                    </tr>

                    <tr>
                        <td colspan=2 class="td-actions">
                            <a href="/products/{{ $post->id }}/edit" class="btn btn-small btn-info"><i class="btn-icon-only icon-ok"> Edit </i></a> 
                        </td>
                        <td colspan=2 class="td-actions"> 
                            <form method="POST" action="/products/{{ $post->id }}/delete">
                                {{ csrf_field() }}
                                <button id="submit" type="submit" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="td-actions">
                            <a href="/dashboard" class="btn btn-md btn-default"><i class="btn-icon-only icon-ok"> Return to Dashboard </i></a>
                        </td> 
                        <td colspan=3 class="td-actions">
                            <a href="/newproduct" class="btn btn-md btn-default"><i class="btn-icon-only icon-ok"> Create a New  Product Listing </i></a>
                        </td>
                    </tr>

                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 


    </div><!-- end row -->
 </div><!-- end container -->

@endsection