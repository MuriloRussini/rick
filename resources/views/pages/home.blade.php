@extends('layouts.main')

@section('page-title', 'App Receitas')

@section('content')
{{-- @include('components.hero') --}}

<div id="mainContent">
  {{-- <div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Validation</h6>
    <div class="mT-30">
      <form class="container" id="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3"><label class="form-label" for="validationCustom01">First name</label> <input
              type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark"
              required=""></div>
          <div class="col-md-6 mb-3"><label class="form-label" for="validationCustom02">Last name</label> <input
              type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3"><label class="form-label" for="validationCustom03">City</label> <input type="text"
              class="form-control" id="validationCustom03" placeholder="City" required="">
            <div class="invalid-feedback">Please provide a valid city.</div>
          </div>
          <div class="col-md-3 mb-3"><label class="form-label" for="validationCustom04">State</label> <input type="text"
              class="form-control" id="validationCustom04" placeholder="State" required="">
            <div class="invalid-feedback">Please provide a valid state.</div>
          </div>
          <div class="col-md-3 mb-3"><label class="form-label" for="validationCustom05">Zip</label> <input type="text"
              class="form-control" id="validationCustom05" placeholder="Zip" required="">
            <div class="invalid-feedback">Please provide a valid zip.</div>
          </div>
        </div><button class="btn btn-primary btn-color" type="submit">Submit form</button>
      </form>
      <script>!function () { "use strict"; window.addEventListener("load", (function () { var t = document.getElementById("needs-validation"); t.addEventListener("submit", (function (e) { !1 === t.checkValidity() && (e.preventDefault(), e.stopPropagation()), t.classList.add("was-validated") }), !1) }), !1) }()</script>
    </div>
  </div>   --}}
  
  <div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Horizontal Form</h6>
    <div class="mT-30">
        <div class="row">
          <div style="margin-bottom: 1.5rem;">Ingredientes</div> {{-- divide it into the proper number of columns and then get started with js on the buttons & organize the class names better --}}
          <form>
            {{-- <div class="ingredients__label">
              @foreach ($ingredients as $ingredient)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                  <div class="col-sm-10">
                    <div class="form-check"><label class="form-label form-check-label"><input class="form-check-input"
                          type="checkbox" id="ingredient"> {{ $ingredient }}</label></div>
                  </div>
                </div>
              @endforeach
            </div> --}}
          </form>
        </div>
      <div class="row">
				{{-- <form>
          <div>Ingredientes</div>
          @for ($i = 1; $i <= 12; $i++)
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="col-sm-10">
                <div class="form-check"><label class="form-label form-check-label"><input class="form-check-input"
                      type="checkbox"> Amendoim</label></div>
              </div>
            </div>
          @endfor --}}

          <div class="mb-3 row" style="margin-top: 1.5rem;">
            <form method="POST" action="{{ route('ingredients.store') }}">
              @csrf
              <div class="mb-3"><label class="form-label" for="ingredient">Ingrediente</label> <input type="text" name="ingredient"
                  class="form-control" id="ingredient" placeholder="ex: Banana" value="{{ old('ingredient') }}" autocomplete="off">
                  @error('ingredient')
                    <div class="error-sub-text">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="col-sm-10"><button type="submit" class="btn btn-primary btn-color">Sign in</button></div>
            </form>
            <div id="image-btn" style="padding: 15px; border: 3px solid red;">CLICK ME</div>
          </div>
        </form>
      </div>
      
      <script src="/js/image.js"></script>
    </div>
  </div>
  @include('components/image-display')
</div>
@endsection

{{-- a IDEIA É FAZER O FOREACH ($INGREDIENTS AS $INGREDIENT) funcionar, criei os controller e o model e agora tem que fazer o esquema de autenticação do usuário pra ele começar a adicionar os ingredientes na db --}}

{{-- usar o botão pra adicionar ingrediente pra db --}}