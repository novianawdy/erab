@extends('layouts.app', ['title' => __('Projects Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Project')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Projects Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('projects.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('projects.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Project information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old("name") }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('client_id') ? ' has-danger' : '' }}">
                                  <label class="form-control-label" for="input-client_id">{{ __('Client') }}</label>
                                  <select name="client_id" class="select-item form-control form-control-alternative{{ $errors->has('client_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Client') }}" value="{{ old("client_id") }}" required autofocus id="input-client_id">
                                    <option selected disabled value="">Select Client</option>
                                    @foreach ($clients as $client)
                                      <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                  </select>

                                  @if ($errors->has('client_id'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('client_id') }}</strong>
                                    </span>
                                  @endif
                                </div>
                            </div>

                            <h6 class="heading-small text-muted mb-4">{{ __('Job Items') }}</h6>
                            <div class="pl-lg-4">

                              <div class="job-detail-container">
                                <div class="row job-detail-root">

                                  <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('job_id') ? ' has-danger' : '' }}">
                                      <label class="form-control-label" for="input-job_id">{{ __('Job') }}</label>
                                      <select name="job_id[]" class="select-job form-control form-control-alternative{{ $errors->has('job_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Job') }}" required autofocus id="input-job_id">
                                        <option selected disabled value="">Select Job</option>
                                        @foreach ($jobs as $job)
                                          <option value="{{ $job->id }}">{{ $job->name }}</option>
                                        @endforeach
                                      </select>

                                      @if ($errors->has('job_id[]'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('job_id[]') }}</strong>
                                        </span>
                                      @endif
                                    </div>
                                  </div>

                                  <div class="col-md-2">
                                    <div class="form-group{{ $errors->has('volume') ? ' has-danger' : '' }}">
                                      <label class="form-control-label" for="input-volume">{{ __('Volume') }}</label>
                                      <input type="text" name="volume[]" class="input-volume form-control form-control-alternative{{ $errors->has('volume') ? ' is-invalid' : '' }}" placeholder="{{ __('Volume') }}" required autofocus>

                                      @if ($errors->has('volume'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('volume') }}</strong>
                                        </span>
                                      @endif
                                    </div>
                                  </div>

                                  <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('subtotal_job') ? ' has-danger' : '' }}">
                                      <label class="form-control-label" for="input-subtotal_job">{{ __('Subtotal Job') }}</label>
                                      <input type="number" readonly name="subtotal_job[]" class="input-subtotal_job form-control form-control-alternative{{ $errors->has('subtotal_job') ? ' is-invalid' : '' }}" placeholder="{{ __('Subtotal Job') }}" required autofocus>

                                      @if ($errors->has('subtotal_job'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('subtotal_job') }}</strong>
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
                              </div>

                              {{-- <div class="row"> --}}
                                <div class="text-right">
                                  <button type="button" id="add-job" class="btn btn-sm btn-info">{{ __('Add Job') }}</button>
                                </div>
                              {{-- </div> --}}

                              <div class="text-center">
                                  <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                              </div>
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
    var jobs = [];
    $(document).ready(function() {
      $.ajax({
        url: '/api/jobs',
        success: function(response) {
          jobs = response.result
        }
      });

      $('#add-job').on('click', function() {
        $('.job-detail-root').last().clone().appendTo('.job-detail-container');
        $('.job-detail-root').last().removeClass('job-detail-root').addClass('job-detail');
        var new_data = $('.job-detail').last();

        var parent_job = new_data.children().first();
        var parent_volume = parent_job.next();
        var parent_subtotal_job = parent_volume.next();
        var parent_subtotal = parent_subtotal_job.next()

        var select_job = parent_job.children().children('select');
        var input_volume = parent_volume.children().children('input');
        var input_subtotal_job = parent_subtotal_job.children().children('input');
        var input_subtotal = parent_subtotal.children().children('input');

        select_job.removeAttr('value');
        input_volume.val(null);
        input_subtotal_job.val(null);
        input_subtotal.val(null);
      });


    });

    $(document).on('change', '.select-job', function(e) {
      var job_id = e.target.value;
      var job = jobs.find(data => data.id == job_id);

      var parent_job = $(this).parent().parent();
      var parent_volume = parent_job.next();
      var parent_subtotal_job = parent_volume.next();
      var parent_subtotal = parent_subtotal_job.next();

      var input_volume = parent_volume.children().children('input');
      var input_subtotal_job = parent_subtotal_job.children().children('input');
      var input_subtotal = parent_subtotal.children().children('input');

      var volume = input_volume.val() ? parseFloat(input_volume.val()) : 0;
      input_volume.val(volume);
      input_subtotal_job.val(job.subtotal_job);
      var subtotal = volume * parseFloat(job.subtotal_job);
      input_subtotal.val(subtotal);
    });

    $(document).on('change', '.input-volume', function(e) {
      var parent_volume = $(this).parent().parent();
      var parent_subtotal_job = parent_volume.next();
      var parent_subtotal = parent_subtotal_job.next();

      var input_volume = parent_volume.children().children('input');
      var input_subtotal_job = parent_subtotal_job.children().children('input');
      var input_subtotal = parent_subtotal.children().children('input');

      var volume = input_volume.val() ? parseFloat(input_volume.val()) : 0;
      input_volume.val(volume);
      var subtotal_job = input_subtotal_job.val() ? parseFloat(input_subtotal_job.val()) : 0;
      input_subtotal_job.val(subtotal_job);
      var subtotal = volume * subtotal_job;
      input_subtotal.val(subtotal);
    });

  </script>
@endpush
