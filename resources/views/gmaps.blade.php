@extends('layouts.app')
@section('content')

    <div style="width: 100%; height: 500px;">
	       {!! Mapper::render() !!}
    </div>
    <div class="container marketing">
        {{-- <div class="row">
            <div class="col-lg-6">
                <img class="img-circle ava-user-hor" data-src="holder.js/140x140" alt="140x140" src="/images/user-1.jpg" style="width: 140px; height: 140px;">
                <div class="info-user-hor">
                    <h3 class="name-user-hor">Max</h3>
                    <p class="user-tel-hor">7242422474</p>
                    <p class="user-number-auto-hor">AX72637UA</p>
                    <p class="user-auto-hor">Mazda</p>
                    <p><a class="btn btn-primary" href="#" role="button">Respond</a></p>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-6">
                <img class="img-circle ava-user-hor" data-src="holder.js/140x140" alt="140x140" src="/images/user-2.jpg" style="width: 140px; height: 140px;">
                <div class="info-user-hor">
                    <h3 class="name-user-hor">Serg</h3>
                    <p class="user-tel-hor">423925752</p>
                    <p class="user-number-auto-hor">AX8378UA</p>
                    <p class="user-auto-hor">Mers</p>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <hr class="featurette-divider"> --}}
        <section class="x-services ptb-100 gray-bg">
            <section class="section-title">
                <div class="container text-center">
                <h2>Помоги товарищу</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="thumbnail clearfix">
                            <a href="#"><img class="img-responsive" src="/images/user_2.jpg" alt="Image"></a>
                            <div class="caption">
                            <h3><a href="#">Петр Петрович</a></h3>
                            <p class="user-tel-hor">7242422474</p>
                            <p class="user-number-auto-hor">AX72637UA</p>
                            <p class="user-auto-hor">Mazda</p>
                            <p><a class="btn btn-primary" href="#" role="button">Откликнуться</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail clearfix">
                            <a href="#"><img class="img-responsive" src="/images/user_1.jpg" alt="Image"></a>
                            <div class="caption">
                            <h3><a href="#">Красивая девуля</a></h3>
                            <p class="user-tel-hor">423925752</p>
                            <p class="user-number-auto-hor">AX8378UA</p>
                            <p class="user-auto-hor">Mers</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <div class="row">
            <section class="section-title">
                <div class="container text-center">
                <h2>Люди которые не зассали и помогли</h2>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                </div>
            </section>
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="/images/user_4.jpg" class="img-responsive  img-circle" alt="Image"></a>
                    <figcaption class="caption text-center">
                    <h3>Петр Петрович -
                    <small>Месяца</small>
                    </h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="/images/user_5.jpg" class="img-responsive  img-circle" alt="Image"></a>
                    <figcaption class="caption text-center">
                    <h3>Петр Петрович -
                    <small>Недели</small>
                    </h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="/images/user_3.jpg" class="img-responsive  img-circle" alt="Image"></a>
                    <figcaption class="caption text-center">
                    <h3>Петр Петрович -
                    <small>Дня</small>
                    </h3>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    {{-- <div class="slogan-hor">
        <h2>помоги ближнему своему</h2>
    </div> --}}
    {{-- <div class="users-top-hod">
        <div class="row">
        <div class="col-lg-4">
            <h2 class="top-user-month-hor"> Top Month<h2>
          <img class="img-circle ava-user-hor" data-src="holder.js/140x140" alt="140x140" src="/images/user-2.jpg" style="width: 140px; height: 140px;">
          <div class="info-user-hor">
              <h3 class="name-user-hor">Serg</h3>
              <p class="user-tel-hor">423925752</p>
              <p class="user-number-auto-hor">AX8378UA</p>
              <p class="user-auto-hor">Mers</p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h2 class="top-user-week-hor"> Top Week<h2>
          <img class="img-circle ava-user-hor" data-src="holder.js/140x140" alt="140x140" src="/images/user-2.jpg" style="width: 140px; height: 140px;">
          <div class="info-user-hor">
              <h3 class="name-user-hor">Serg</h3>
              <p class="user-tel-hor">423925752</p>
              <p class="user-number-auto-hor">AX8378UA</p>
              <p class="user-auto-hor">Mers</p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h2 class="top-user-day-hor"> Top Day<h2>
          <img class="img-circle ava-user-hor" data-src="holder.js/140x140" alt="140x140" src="/images/user-2.jpg" style="width: 140px; height: 140px;">
          <div class="info-user-hor">
              <h3 class="name-user-hor">Serg</h3>
              <p class="user-tel-hor">423925752</p>
              <p class="user-number-auto-hor">AX8378UA</p>
              <p class="user-auto-hor">Mers</p>
          </div>
        </div><!-- /.col-lg-4 -->
      </div>
    </div> --}}
    <footer>
        <p>© 2017 RoockLab Inc. by Serg Max and Denchick</p>
     </footer>
@endsection
