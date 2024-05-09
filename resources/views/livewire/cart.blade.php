
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Cart - 2 items</h5>
            </div>
            <div class="card-body">
              <!-- Single item -->
              @foreach ($carts as  $cart)
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                 <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img style="width:50px;" src="{{ Storage::url($cart->product->ProductImage) }}" />

                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>


                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{ $cart->product->ProductName }}</strong></p>
                  <button type="btn btn-danger"wire:click="deleteCart({{ $cart['id'] }})">Remove Cart Items</button>

                  <!-- Data -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <div data-mdb-input-init class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                      <label class="form-label" for="form1">Quantity</label>
                    </div>

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center">
                    Product Price <strong>{{ $cart->product->product_price }}</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
            @endforeach


              <hr class="my-4" />
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  Products
                  <span>$53.98</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>Gratis</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                  </div>
                  <span><strong>{{ $cart->product->product_price }}</strong></span>
                </li>
              </ul>

              <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" wire:navigate="checKOut"
               href="{{ route('checkout',['id'=>$cart->id]) }}" >
                Go to checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

