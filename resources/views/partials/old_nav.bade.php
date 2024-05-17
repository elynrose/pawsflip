 <!--  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">{{ __('My profile') }}</a>

                                    @can('user_management_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.userManagement.title') }}
                                        </a>
                                    @endcan
                                    @can('permission_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.permissions.index') }}">
                                            {{ trans('cruds.permission.title') }}
                                        </a>
                                    @endcan
                                    @can('role_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.roles.index') }}">
                                            {{ trans('cruds.role.title') }}
                                        </a>
                                    @endcan
                                    @can('user_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.users.index') }}">
                                            {{ trans('cruds.user.title') }}
                                        </a>
                                    @endcan
                                    @can('service_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.services.index') }}">
                                            {{ trans('cruds.service.title') }}
                                        </a>
                                    @endcan
                                    @can('animal_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.animals.index') }}">
                                            {{ trans('cruds.animal.title') }}
                                        </a>
                                    @endcan
                                    @can('availability_access')
                                        <a class="dropdown-item" href="{{ route('frontend.availabilities.index') }}">
                                            {{ trans('cruds.availability.title') }}
                                        </a>
                                    @endcan
                                    @can('service_request_access')
                                        <a class="dropdown-item" href="{{ route('frontend.service-requests.index') }}">
                                            {{ trans('cruds.serviceRequest.title') }}
                                        </a>
                                    @endcan
                                    @can('pet_access')
                                        <a class="dropdown-item" href="{{ route('frontend.pets.index') }}">
                                            {{ trans('cruds.pet.title') }}
                                        </a>
                                    @endcan
                                    @can('booking_access')
                                        <a class="dropdown-item" href="{{ route('frontend.bookings.index') }}">
                                            {{ trans('cruds.booking.title') }}
                                        </a>
                                    @endcan
                                    @can('credit_access')
                                        <a class="dropdown-item" href="{{ route('frontend.credits.index') }}">
                                            {{ trans('cruds.credit.title') }}
                                        </a>
                                    @endcan
                                    @can('review_access')
                                        <a class="dropdown-item" href="{{ route('frontend.reviews.index') }}">
                                            {{ trans('cruds.review.title') }}
                                        </a>
                                    @endcan
                                    @can('user_alert_access')
                                        <a class="dropdown-item" href="{{ route('frontend.user-alerts.index') }}">
                                            {{ trans('cruds.userAlert.title') }}
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
