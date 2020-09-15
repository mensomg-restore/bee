<div class="liked">

    <div class="container">
        <h2 class="liked__heading">Покупателям нравится</h2>
        <div class="row">

            @foreach($likedRandomProducts as $likedRandomProduct)
                <div class="col-3">
                    <a href="{{ route('product', ['name' => $likedRandomProduct->friendly_url_name, 'storeSlug' => $likedRandomProduct->store->slug]) }}" class="liked__item">
                        <div class="liked__item-body">
                            <img class="liked__item-img" src="{{ $likedRandomProduct->img_url  }}" alt="{{ $likedRandomProduct->name }}">
                                @if(in_array($likedRandomProduct->id, $favoritesListContent, true))
                                    <button data-id="{{ $likedRandomProduct->id }}" data-action="remove" data-page="catalog"
                                            class="btn-add-to-favorites product__item-favorite add-to-favorites p-0 text-gray-6 font-size-13">
                                        <i class="ec heart font-size-15"></i>
                                    </button>
                                @else
                                    <button data-id="{{ $likedRandomProduct->id }}" data-action="add" data-page="catalog"
                                            class="btn-add-to-favorites product__item-favorite add-to-favorites p-0 text-gray-6 font-size-13">
                                        <i class="ec ec-favorites font-size-15"></i>
                                    </button>
                                @endif
                            <div class="liked__item-descr">{{ $likedRandomProduct->name }}<br> кг</div>
                            <div class="liked__item-article">{{ $likedRandomProduct->sku }}</div>
                        </div>
                        <div class="liked__item-footer">
                            <div class="liked__item-price"><span>{{ $likedRandomProduct->price / 100 }}₽</span> / за 1 шт</div>
                            <button data-id="{{ $likedRandomProduct->id }}" data-quantity="1" class="liked__item-btn btn btn-primary add-to-cart">В корзину</button>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
