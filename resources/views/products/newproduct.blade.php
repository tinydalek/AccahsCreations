@extends('layouts.layoutloggedin')

@section('content')

<h3>Add New Product</h3>
<br/>
    <form class="form-horizontal" method="POST" action="/products">
        
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-md-2 control-label" for="product_name">Product Name:</label>
            <div class="col-sm-10 col-md-7">
                <input class="form-control" type="text" id="product_name" name="product_name" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="category_id" class="col-sm-2 col-md-2 control-label">Category:</label>
            <div class="col-sm-10 col-md-7">    
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select One</option>
                    <option value="1">Scarves</option>
                    <option value="2">Mittens</option>
                    <option value="3">Bracelets</option>
                    <option value="4">Earrings</option>

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colour_id" class="col-sm-2 col-md-2 control-label name="colour_id">Primary Colour:</label>
            <div class="col-sm-10 col-md-7">    
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="1">Black
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="2">Blue
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="3">Bronze
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="4">Brown
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="5">Gold
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="6">Green
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="7">Grey
                </label><br/>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="8">Orange
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="9">Pink
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="10">Purple
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="11">Red
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="12">Silver
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="13">White
                </label>
                <label class="radio-inline">
                    <input type="radio" name="colour_id" value="14">Yellow
                </label>
            </div>
        </div>
                   
        <div class="form-group row">
            <label class="col-sm-2 col-md-2 control-label" for="product_desc">Description:</label>
            <div class="col-sm-10 col-md-7">
                <textarea class="form-control" rows="5" placeholder="" id="product_desc" name="product_desc" required></textarea>
            </div>
        </div>
                    
        <div class="form-group row">
            <label class="col-sm-2 col-md-2 control-label" for="product_price">Price:</label>
            <div class="col-sm-3 col-md-3">
                <input class="form-control" type="text" id="product_price" name="product_price">
            </div>

            <label for="product_inventory" class="col-sm-1 col-md-1 control-label">Inventory:</label>
            <div class="col-sm-3 col-md-3">    
                <select class="form-control" id="product_inventory" name="product_inventory" required>
                    <option value="">Select One</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>

        <br/>        
        <button id="submit" type="submit" class="btn btn-info btn-lg">Create Listing</button>
        
    </form>


@endsection