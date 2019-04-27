@extends('layout.app')

@section('content')
<!-- Content Wrapper -->
<article class="about-page">
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin">Request Pickup & Delivery</h2>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>
                        <li class="active">Request Pickup & Delivery</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- About Us -->
    <section class="pad-50 about-wrap">
        <div class="theme-container container">
            <div class="row">

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form action="{{url('/request-delivery')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullName" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group" style="padding: 0;">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phoneNumber" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group" style="padding: 0;">
                            <label for="emailadd">Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="deliveryitems">Delivery Items</label>
                            <input type="text" name="deliveryItems" class="form-control" placeholder="Separate each item with a comma" required>
                        </div>
                        <div class="form-group">
                            <label for="pickupaddress">Pickup Address</label>
                            <textarea name="pickupAddress" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deliveryaddress">Delivery Address</label>
                            <textarea name="deliveryAddress" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="otherinstructions">Other Instructions</label>
                            <textarea name="instructions" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-success" style="width: 100%;color: #fff;">Send Request</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>
    <!-- /.About Us -->

    <!-- Contact us -->
    <section class="contact-wrap pad-120">
        <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="title-wrap">
                        <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                        <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easily</p>
                    </div>

                    <ul class="contact-detail title-2">
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>Hotlines:</span> <p class="gray-clr">  +234-706-695-6190 <br> +234-708-415-0086 </p> </li>
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> info@jetexpress.com</p> </li>
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Location:</span> <p class="gray-clr"> 16B, Omorinre Johnson Street, Lekki Phase 1, Lagos</p> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact us -->
</article>
<!-- /.Content Wrapper -->
@endsection
