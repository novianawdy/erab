@extends('layouts.app', ['title' => __('Jobs Management')])

@section('content')
  @include('layouts.headers.cards')

  <div class="container-fluid mt--7">
      <div class="row">
          <div class="col">
              <div class="card shadow">
                  <div class="card-header border-0">
                      <div class="row align-items-center">
                          <div class="col-8">
                              <h3 class="mb-0">{{ __('Jobs') }}</h3>
                          </div>
                          @if (Auth::user()->email == "e.rancanganbiaya@gmail.com")
                            <div class="col-4 text-right">
                                <a href="{{ route('jobs.create') }}" class="btn btn-sm btn-primary">{{ __('Add Jobs') }}</a>
                            </div>
                          @endif

                      </div>
                  </div>

                  <div class="col-12">
                      @if (session('status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{ session('status') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      @endif
                  </div>

                  <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr>
                                  <th scope="col">{{ __('Categories') }}</th>
                                  <th scope="col">{{ __('Types') }}</th>
                                  <th scope="col">{{ __('Name') }}</th>
                                  <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($jobs as $job)
                                  <tr>
                                      <td>{{ $job->category }}</td>
                                      <td>{{ $job->type}}</td>
                                      <td>{{ $job->name}}</td>
                                      <td class="text-right">
                                          <div class="dropdown">
                                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="fas fa-ellipsis-v"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                  {{-- @if ($user->id != auth()->id())
                                                      <form action="{{ route('user.destroy', $user) }}" method="post">
                                                          @csrf
                                                          @method('delete')

                                                          <a class="dropdown-item" href="{{ route('user.edit', $user) }}">{{ __('Edit') }}</a>
                                                          <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this client?") }}') ? this.parentElement.submit() : ''">
                                                              {{ __('Delete') }}
                                                          </button>
                                                      </form>
                                                  @else --}}
                                                      <a class="dropdown-item" href="{{ route('jobs.edit', $job) }}">{{ __('Edit') }}</a>
                                                  {{-- @endif --}}
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                  <div class="card-footer py-4">
                      <nav class="d-flex justify-content-end" aria-label="...">
                          {{ $jobs->links() }}
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      @include('layouts.footers.auth')
  </div>
@endsection
