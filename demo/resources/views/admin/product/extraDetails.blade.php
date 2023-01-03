@extends('admin.Layout.layout');
@section('content');
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Product details</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form id="demo_form2" action="{{route('product.extraDetailsStore',$id)}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Title 
                    <span class="required">*</span></label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" name="title" value="{{@$product->Product_details->title}}" class="form-control col-md-7 col-xs-12">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Total items 
                    <span class="required">*</span></label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="first-name" required="required" name="total_items" value="{{@$product->Product_details->total_items}}" class="form-control col-md-7 col-xs-12">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Description 
                    <span class="required">*</span></label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea   required="required" name="description"  rows="5" class="form-control col-md-7 col-xs-12">{{@$product->Product_details->description}}</textarea>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    
                    
                    <input type="submit" value="submit" class="btn btn-success">
        
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection;