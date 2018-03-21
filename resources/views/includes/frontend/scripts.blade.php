
<!-- Bootstrap and JQuiry -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Mix it up -->
{!! Html::script('js/frontend/jquery.mixitup.min.js') !!}

<!-- Main script -->
{!! Html::script('js/frontend/main.js') !!}

@include('flashy::message')

@yield('scripts')