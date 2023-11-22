@extends('_layouts.app')
@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{asset('images/item_bootcamp.png')}}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('F d, Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{$checkout->amount}}</strong>
                                </td>
                                <td>
                                    <strong>
                                        @if ($checkout->is_paid)
                                            <span class="text-green">Payment Success</span>
                                        @else
                                            <span class="text-red">Waiting for Payment</span>
                                        @endif
                                    </strong>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        Get Invoice
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Bootcamps found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
