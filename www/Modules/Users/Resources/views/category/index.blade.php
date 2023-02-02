@extends('users::layouts.index')

@section('main-content')
    <section id="categoryPage" class="desktop" data-id="1942" data-name="Tivi" data-template="cate">
        <div class="container-productbox">
            <ul class="listproduct">
                @foreach ($products as $product)
                    <li class="item  __cate_1942">
                        <a href="{{ route('users.product', [
                            'category_id' => $product->category_id,
                            'product_id' => $product->id,
                        ]) }}"
                            class="main-contain">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img">
                                <img class="thumb ls-is-cached lazyloaded" alt="" src="{{ $product->picture }}">
                                <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" width="40" height="40"
                                    class="lbliconimg lbliconimg_1942 dmx">
                            </div>
                            <p class="result-label temp3">
                                <img width="20" height="20" class="ls-is-cached lazyloaded" alt="SINH NHẬT GIẢM SỐC"
                                    src="https://cdn.tgdd.vn/2022/07/content/50x50-50x50-10.png">
                                <span>SINH NHẬT GIẢM SỐC</span>
                            </p>
                            <h3>{{ $product->name }}</h3>
                            <div class="item-compare ">
                                <span>50 inch</span>
                                <span>4K</span>
                            </div>
                            <div class="box-p">
                                <p class="price-old black">{{ $product->original_price }}</p>
                                <span
                                    class="percent">{{ percent_promotion((int) $product->original_price,(int) $product->promotional_price) }}</span>
                            </div>
                            <strong class="price">{{ $product->promotional_price }}</strong>
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                </p>
                                <p class="item-rating-total">109</p>
                            </div>
                        </a>
                        <div class="item-bottom">
                            <a href="#" class="shiping"></a>
                        </div>
                        <a href="javascript:void(0)" class="item-ss">
                            <i></i>
                            So sánh
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
