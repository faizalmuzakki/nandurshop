@extends('website.layout')

@section('breadcrumb', 'Compare')

@section('content')
	@include('layouts.partials.breadcrumb')
    <!--==================== page content ====================-->

    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">

                        <!-- Compare Table -->
                        <div class="compare-table table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="first-column">Product</td>
                                        <td class="product-image-title">
                                            <a href="#" class="image"><img src="assets/img/products/small1-1.jpg" class="img-fluid" alt="Compare Product"></a>
                                            <a href="#" class="category">Drawing Room</a>
                                            <a href="#" class="title">Cillum dolore tortor nisl fermentum</a>
                                        </td>
                                        <td class="product-image-title">
                                            <a href="#" class="image"><img src="assets/img/products/small1-2.jpg" class="img-fluid" alt="Compare Product"></a>
                                            <a href="#" class="category">Dining Room</a>
                                            <a href="#" class="title">Auctor gravida pellentesque Lorem, ipsum dolor</a>
                                        </td>
                                        <td class="product-image-title">
                                            <a href="#" class="image"><img src="assets/img/products/small1-3.jpg" class="img-fluid" alt="Compare Product"></a>
                                            <a href="#" class="category">Outdoor</a>
                                            <a href="#" class="title">Condimentum posuere consectetur</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Description</td>
                                        <td class="pro-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veritatis culpa asperiores fugit omnis ducimus ullam facilis magnam quo vitae.</p></td>
                                        <td class="pro-desc"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab assumenda. Sunt accusantium quae porro repellendus sed totam deserunt autem!</p></td>
                                        <td class="pro-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, ad! Natus dolor voluptates, veniam provident vitae consequuntur adipisci expedita est!</p></td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Price</td>
                                        <td class="pro-price">$29</td>
                                        <td class="pro-price">$27</td>
                                        <td class="pro-price">$39</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Color</td>
                                        <td class="pro-color">Yellow</td>
                                        <td class="pro-color">White</td>
                                        <td class="pro-color">Green</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Stock</td>
                                        <td class="pro-stock">In Stock</td>
                                        <td class="pro-stock">In Stock</td>
                                        <td class="pro-stock">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Add to cart</td>
                                        <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></td>
                                        <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span><i class="fa fa-shopping-cart"></i> ADD TO CART</span></a></td>
                                        <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span><i class="fa fa-shopping-cart"></i> ADD TO CART</span></a></td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Delete</td>
                                        <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                        <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                        <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Rating</td>
                                        <td class="pro-ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td class="pro-ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="pro-ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--====================  End of page content  ====================-->
@endsection
