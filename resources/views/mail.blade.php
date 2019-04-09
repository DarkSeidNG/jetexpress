@extends('layout.app')

@section('content')

<!--/ banner -->
<div class="banner1">

    <div class="w3_agileits_service_banner_info">
        <h2>Mail Us </h2>
    </div>
</div>

<!--/ banner -->


<!-- /contact -->
<div class="inner_main_agile_section">
    <div class="container">
        <h3 class="w3l_header w3_agileits_header"> Leave a <span>Message</span></h3>
        <p class="sub_para_agile two" style="color:#030">Reach us, we're waiting</p>
        <div class="contact-form agile_inner_grids">
            <form action="http://sachlightexpress.com/mail?pg=3" method="post" enctype="multipart/form-data" onSubmit="return loginCheck()">
                <div class="fields-grid">
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" name="name" required>
                        <label>Full Name</label>
                        <span></span>
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" name="phone">
                        <label>Phone</label>
                        <span></span>
                    </div>
                    <div class="styled-input">
                        <input type="email" name="email" required>
                        <label>Email</label>
                        <span></span>
                    </div>
                    <div class="styled-input">
                        <input type="text" name="subject" required>
                        <label>Subject</label>
                        <span></span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="styled-input textarea-grid">
                    <textarea name="comments" required></textarea>
                    <label>Message</label>
                    <span></span>
                </div>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
</div>
<!-- map -->
<h3 class="w3l_header w3_agileits_header"> Find <span>Us Here</span></h3>
<div class="map">


    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=Alausa%20Shopping%20Mall%2C%20Obafemi%20Awolowo%20Way%2C%20Ikeja%2C%20Nigeria&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" allowfullscreen></iframe>
</div>
<!-- //map -->
<!-- //contact -->
@endsection
