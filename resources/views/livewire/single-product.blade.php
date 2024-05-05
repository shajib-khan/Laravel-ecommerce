
    <!-- Product section-->
<section class="py-5">

    <div class="container px-4 px-lg-5 my-5">

        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ Storage::url($product->ProductImage) }}" alt="..." /></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">{{ $product->ProductName }}</h1>
                <div class="fs-5 mb-5">
                    <span>Price: ${{ $product->product_price }}</span>
                </div>
                <p class="lead">{{ $product->ProductDescription }}</p>
                <div class="d-flex">
                    <input type="number" class="form-control text-center me-3" id="inputQuantity" value="1" style="max-width: 3rem"wire:model="quantity" />
                    <button class="p-2 rounded-full bg-blue-600  mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500" wire:click="addToCart">Add to Cart</button>
                    <button class="p-2 rounded-full bg-blue-600 hover:bg-blue-500 focus:outline-none focus:bg-blue-500" wire:navigate="buyNow" href="{{ route('cart',['id'=>$product->id]) }}">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
