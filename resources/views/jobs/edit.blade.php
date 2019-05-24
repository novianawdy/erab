@extends('layouts.app', ['title' => __('Jobs Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Job')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Job Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('jobs.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('jobs.update', $job) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Job information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    @if (Auth::user()->email == "e.rancanganbiaya@gmail.com")
                                      <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $job->name) }}" required autofocus>
                                    @else
                                      <input type="text" readonly name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $job->name) }}" required autofocus>
                                    @endif

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Category') }}</label>
                                    @if (Auth::user()->email == "e.rancanganbiaya@gmail.com")
                                      <input type="text" name="category"  id="input-category" class="form-control form-control-alternative{{ $errors->has('category') ? ' is-invalid' : '' }}" placeholder="{{ __('Category') }}" value="{{ old('category', $job->category) }}" required autofocus>
                                    @else
                                      <input readonly type="text" name="category"  id="input-category" class="form-control form-control-alternative{{ $errors->has('category') ? ' is-invalid' : '' }}" placeholder="{{ __('Category') }}" value="{{ old('category', $job->category) }}" required autofocus>
                                    @endif

                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-type">{{ __('Type') }}</label>
                                    @if (Auth::user()->email == "e.rancanganbiaya@gmail.com")
                                      <input type="text" name="type" id="input-type" class="form-control form-control-alternative{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Types') }}" value="{{ old('type', $job->type) }}" required autofocus>
                                    @else
                                      <input readonly type="text" name="type" id="input-type" class="form-control form-control-alternative{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Types') }}" value="{{ old('type', $job->type) }}" required autofocus>
                                    @endif

                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @if (Auth::user()->email != "e.rancanganbiaya@gmail.com")
                              <h6 class="heading-small text-muted mb-4">{{ __('Job Items') }}</h6>
                              <div class="pl-lg-4">
                                <div class="item-detail-container">
                                  @if (@count($job->items) > 0)
                                    @foreach ($job->items as $job_item)
                                      <div class="row item-detail-root">
                                        <div class="col-md-2">
                                          <div class="form-group{{ $errors->has('coefisien') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-coefisien">{{ __('Coefisien') }}</label>
                                            <input type="text" value="{{ $job_item->job_details->coefisien }}" name="coefisien[]" class="input-coefisien form-control form-control-alternative{{ $errors->has('coefisien') ? ' is-invalid' : '' }}" placeholder="{{ __('Coefisien') }}" value="{{ old('coefisien', $job->coefisien) }}" required autofocus>

                                            @if ($errors->has('coefisien'))
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('coefisien') }}</strong>
                                              </span>
                                            @endif
                                          </div>
                                        </div>

                                        <div class="col-md-3">
                                          <div class="form-group{{ $errors->has('item_id') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-item_id">{{ __('Item') }}</label>
                                            <select name="item_id[]" class="select-item form-control form-control-alternative{{ $errors->has('item_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Item') }}" value="{{ old('item_id', $job->item_id) }}" required autofocus id="input-item_id">
                                              <option selected disabled value="">Select item</option>
                                              @foreach ($items as $item)
                                                <option value="{{ $item->id }}" {{ (collect(old('item_id', $job_item->job_details->item_id))->contains($item->id)) ? 'selected':'' }}>{{ $item->name }}</option>
                                              @endforeach
                                            </select>

                                            @if ($errors->has('item_id[]'))
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('item_id[]') }}</strong>
                                              </span>
                                            @endif
                                          </div>
                                        </div>

                                        <div class="col-md-1">
                                          <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-unit">{{ __('Unit') }}</label>
                                            <input readonly type="text" value="{{ $job_item->unit }}" name="unit[]" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="{{ __('Unit') }}" value="{{ old('unit', $job->unit) }}" required autofocus>
                                            @if ($errors->has('unit'))
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('unit') }}</strong>
                                              </span>
                                            @endif
                                          </div>
                                        </div>

                                        <div class="col-md-3">
                                          <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-price">{{ __('Price') }}</label>
                                            <input type="number" value="{{ $job_item->job_details->price }}" name="price[]" class="input-price form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ old('price', $job->price) }}" required autofocus>

                                            @if ($errors->has('price'))
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('price') }}</strong>
                                              </span>
                                            @endif
                                          </div>
                                        </div>

                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label class="form-control-label" for="input-subtotal">{{ __('Subtotal') }}</label>
                                            <input readonly type="text" value="{{ $job_item->job_details->coefisien * $job_item->job_details->price }}" name="subtotal[]" id="input-subtotal" class="form-control form-control-alternative" placeholder="{{ __('Subtotal') }}" autofocus>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  @else
                                    <div class="row item-detail-root">
                                      <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('coefisien') ? ' has-danger' : '' }}">
                                          <label class="form-control-label" for="input-coefisien">{{ __('Coefisien') }}</label>
                                          <input type="text" name="coefisien[]" class="input-coefisien form-control form-control-alternative{{ $errors->has('coefisien') ? ' is-invalid' : '' }}" placeholder="{{ __('Coefisien') }}" value="{{ old('coefisien', $job->coefisien) }}" required autofocus>

                                          @if ($errors->has('coefisien'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('coefisien') }}</strong>
                                            </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('item_id') ? ' has-danger' : '' }}">
                                          <label class="form-control-label" for="input-item_id">{{ __('Item') }}</label>
                                          <select name="item_readonlyass="select-item form-control form-control-alternative{{ $errors->has('item_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Item') }}" value="{{ old('item_id', $job->item_id) }}" required autofocus id="input-item_id">
                                            <option selected disabled value="">Select item</option>
                                            @foreach ($items as $item)
                                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                          </select>

                                          @if ($errors->has('item_id[]'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('item_id[]') }}</strong>
                                            </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="col-md-1">
                                        <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                          <label class="form-control-label" for="input-unit">{{ __('Unit') }}</label>
                                          <input readonly type="text" name="unit[]" class="form-control form-control-alternative{{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="{{ __('Unit') }}" value="{{ old('unit', $job->unit) }}" required autofocus>
                                          @if ($errors->has('unit'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('unit') }}</strong>
                                            </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                          <label class="form-control-label" for="input-price">{{ __('Price') }}</label>
                                          <input type="number" name="price[]" class="input-price form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ old('price', $job->price) }}" required autofocus>

                                          @if ($errors->has('price'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                          @endif
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-subtotal">{{ __('Subtotal') }}</label>
                                          <input readonly type="text" name="subtotal[]" id="input-subtotal" class="form-control form-control-alternative" placeholder="{{ __('Subtotal') }}" autofocus>
                                        </div>
                                      </div>
                                    </div>
                                  @endif
                                </div>

                                {{-- <div class="row"> --}}
                                  <div class="text-right">
                                    <button type="button" id="add-item" class="btn btn-sm btn-info">{{ __('Add Item') }}</button>
                                  </div>
                                {{-- </div> --}}

                              </div>
                            @endif
                            <div class="text-center">
                              <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
  <script type="text/javascript">
    var items = [];
    $(document).ready(function() {
      $.ajax({
        url: '/api/items',
        success: function(response) {
          items = response.result
        }
      });

      $('#add-item').on('click', function() {
        $('.item-detail-root').last().clone().appendTo('.item-detail-container');
        $('.item-detail-root').last().removeClass('item-detail-root').addClass('item-detail');
        var new_data = $('.item-detail').last();

        var parent_coefisien = new_data.children().first();
        var parent_item = parent_coefisien.next();
        var parent_unit = parent_item.next();
        var parent_price = parent_unit.next();
        var parent_subtotal = parent_price.next()

        var input_coefisien = parent_coefisien.children().children('input');
        var select_item = parent_item.children().children('select');
        var input_unit = parent_unit.children().children('input');
        var input_price = parent_price.children().children('input');
        var input_subtotal = parent_subtotal.children().children('input');

        input_coefisien.val(null);
        select_item.removeAttr('value');
        input_unit.val(null);
        input_price.val(null);
        input_subtotal.val(null);
      });


    });

    $(document).on('change', '.select-item', function(e) {
      var item_id = e.target.value;
      var item = items.find(data => data.id == item_id);

      var parent_item = $(this).parent().parent();
      var parent_coefisien = parent_item.prev();
      var parent_unit = parent_item.next();
      var parent_price = parent_unit.next();
      var parent_subtotal = parent_price.next();

      var input_coefisien = parent_coefisien.children().children('input');
      var input_unit = parent_unit.children().children('input');
      var input_price = parent_price.children().children('input');
      var input_subtotal = parent_subtotal.children().children('input');

      var coefisien = input_coefisien.val() ? parseFloat(input_coefisien.val()) : 0;
      input_coefisien.val(coefisien);
      input_price.val(item.price);
      input_unit.val(item.unit);
      var subtotal = coefisien * parseFloat(item.price);
      input_subtotal.val(subtotal);
    });

    $(document).on('change', '.input-coefisien', function(e) {
      var parent_coefisien = $(this).parent().parent();
      var parent_item = parent_coefisien.next();
      var parent_unit = parent_item.next();
      var parent_price = parent_unit.next();
      var parent_subtotal = parent_price.next();

      var input_coefisien = parent_coefisien.children().children('input');
      var input_price = parent_price.children().children('input');
      var input_subtotal = parent_subtotal.children().children('input');

      var coefisien = input_coefisien.val() ? parseFloat(input_coefisien.val()) : 0;
      input_coefisien.val(coefisien);
      var price = input_price.val() ? parseFloat(input_price.val()) : 0;
      input_price.val(price);
      var subtotal = coefisien * price;
      input_subtotal.val(subtotal);
    });

    $(document).on('change', '.input-price', function(e) {
      var parent_price =  $(this).parent().parent();
      var parent_unit = parent_price.prev();
      var parent_item = parent_unit.prev();
      var parent_coefisien = parent_item.prev();
      var parent_subtotal = parent_price.next();

      var input_coefisien = parent_coefisien.children().children('input');
      var input_price = parent_price.children().children('input');
      var input_subtotal = parent_subtotal.children().children('input');

      var coefisien = input_coefisien.val() ? parseFloat(input_coefisien.val()) : 0;
      input_coefisien.val(coefisien);
      var price = input_price.val() ? parseFloat(input_price.val()) : 0;
      input_price.val(price);
      var subtotal = coefisien * price;
      input_subtotal.val(subtotal);
    });
  </script>
@endpush
