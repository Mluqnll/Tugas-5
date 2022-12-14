@extends('template.admin')
@section('content')
    <div class="shop-area mb-20">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-8">
                    <div class="product-lists-top">
                        <div class="product__filter-wrap">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter d-sm-flex align-items-center">
                                        <div class="product__col">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="FourCol-tab" data-bs-toggle="tab"
                                                        data-bs-target="#FourCol" type="button" role="tab"
                                                        aria-controls="FourCol" aria-selected="true">
                                                        <i class="fal fa-th"></i>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab"
                                                        data-bs-target="#FiveCol" type="button" role="tab"
                                                        aria-controls="FiveCol" aria-selected="false">
                                                        <i class="fal fa-list"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__result pl-60">
                                            <p>Showing 1-20 of 29 relults</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter-right d-flex align-items-center justify-content-md-end">
                                        <div class="product__sorting product__show-no">
                                            <select>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                            </select>
                                        </div>
                                        <div class="product__sorting product__show-position ml-20">
                                            <select>
                                                <option>Latest</option>
                                                <option>New</option>
                                                <option>Up comeing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="productGridTabContent">
                        <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                            aria-labelledby="FourCol-tab">
                            <div class="tp-wrapper">
                                <div class="row g-0">
                                    @foreach ($list_produk as $produk)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item product__item-d">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="#">
                                                            <img style="height:235px; width:235px;"
                                                                src="{{ url('public/admin') }}/img/product/jambu.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $produk->id }}">
                                                            <i class="fal fa-eye"></i>
                                                            <i class="fal fa-eye"></i>
                                                        </a>

                                                        <a href="#" class="icon-box icon-box-1">
                                                            <i class="fal fa-heart"></i>
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                        <a href="#" class="icon-box icon-box-1">
                                                            <i class="fal fa-layer-group"></i>
                                                            <i class="fal fa-layer-group"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <h6><a href="#">{{ $produk->nama }}</a></h6>
                                                    <div class="price mb-10">
                                                        <span>Rp.{{ number_format($produk->harga, 3) }}</span>
                                                    </div>
                                                    <div class="price mb-10">
                                                        <span>{{ $produk->stock }}</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart-s text-center">
                                                    <button type="button"
                                                        class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                    <button type="button"
                                                        class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                                        data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal{{ $produk->id }}" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                                                <div class="modal-content">
                                                    <div class="product__modal-wrapper p-relative">
                                                        <div class="product__modal-close p-absolute">
                                                            <button data-bs-dismiss="modal"><i
                                                                    class="fal fa-times"></i></button>
                                                        </div>
                                                        <div class="product__modal-inner">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <div class="product__modal-box">
                                                                        <div class="tab-content" id="modalTabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="navmodal-1" role="tabpanel"
                                                                                aria-labelledby="navmodal-1-tab">
                                                                                <div class="product__modal-img w-img">
                                                                                    <img src="{{ url('public/admin') }}/img/quick-view/jambu.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="navmodal-2"
                                                                                role="tabpanel"
                                                                                aria-labelledby="navmodal-2-tab">
                                                                                <div class="product__modal-img w-img">
                                                                                    <img src="{{ url('public/admin') }}/img/quick-view/jambu1.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="navmodal-3"
                                                                                role="tabpanel"
                                                                                aria-labelledby="navmodal-3-tab">
                                                                                <div class="product__modal-img w-img">
                                                                                    <img src="{{ url('public/admin') }}/img/quick-view/jambu2.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="navmodal-4"
                                                                                role="tabpanel"
                                                                                aria-labelledby="navmodal-4-tab">
                                                                                <div class="product__modal-img w-img">
                                                                                    <img src="{{ url('public/admin') }}/img/quick-view/jambu3.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nav nav-tabs" id="modalTab"
                                                                            role="tablist">
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link active"
                                                                                    id="navmodal-1-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#navmodal-1"
                                                                                    type="button" role="tab"
                                                                                    aria-controls="navmodal-1"
                                                                                    aria-selected="true">
                                                                                    <img style="height: 100px; width: 100px;"
                                                                                        src="{{ url('public/admin') }}/img/quick-view/jambu.jpg"
                                                                                        alt="">
                                                                                </button>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link"
                                                                                    id="navmodal-2-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#navmodal-2"
                                                                                    type="button" role="tab"
                                                                                    aria-controls="navmodal-2"
                                                                                    aria-selected="false">
                                                                                    <img style="height: 100px; width: 100px;"
                                                                                        src="{{ url('public/admin') }}/img/quick-view/jambu1.jpg"
                                                                                        alt="">
                                                                                </button>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link"
                                                                                    id="navmodal-3-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#navmodal-3"
                                                                                    type="button" role="tab"
                                                                                    aria-controls="navmodal-3"
                                                                                    aria-selected="false">
                                                                                    <img style="height: 100px; width: 100px;"
                                                                                        src="{{ url('public/admin') }}/img/quick-view/jambu2.jpg"
                                                                                        alt="">
                                                                                </button>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link"
                                                                                    id="navmodal-4-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#navmodal-4"
                                                                                    type="button" role="tab"
                                                                                    aria-controls="navmodal-4"
                                                                                    aria-selected="false">
                                                                                    <img style="height: 100px; width: 100px;"
                                                                                        src="{{ url('public/admin') }}/img/quick-view/jambu3.jpg"
                                                                                        alt="">
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <div class="product__modal-content">
                                                                        <h4><a href="#">{{ $produk->nama }}</a></h4>

                                                                        <div class="product__price">
                                                                            <span>Rp
                                                                                {{ number_format($produk->harga, 3) }}</span>
                                                                        </div>
                                                                        <div class="product__modal-des mt-20 mb-15">
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-circle"></i>
                                                                                        {{ $produk->deskripsi }}</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product__stock mb-20">
                                                                            <span class="mr-10">Availability :</span>
                                                                            <span>{{ $produk->stock }}</span>
                                                                        </div>
                                                                        <div class="product__modal-form">
                                                                            <form action="#">
                                                                                <div
                                                                                    class="pro-quan-area d-lg-flex align-items-center">
                                                                                    <div
                                                                                        class="product-quantity mr-20 mb-25">
                                                                                        <div
                                                                                            class="cart-plus-minus p-relative">
                                                                                            <input type="text"
                                                                                                value="1" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pro-cart-btn mb-25">
                                                                                        <button class="cart-btn"
                                                                                            type="submit">Add to
                                                                                            cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="product__stock mb-30">
                                                                            <ul>
                                                                                <li><a href="#">
                                                                                        <span class="sku mr-10">SKU:</span>
                                                                                        <span>{{ $produk->nama }}</span></a>
                                                                                </li>
                                                                                <li><a href="#">
                                                                                        <span
                                                                                            class="cat mr-10">Categories:</span>
                                                                                        <span>Tanaman, Bibit</span></a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
