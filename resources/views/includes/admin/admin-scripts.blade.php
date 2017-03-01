<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
{{-- 
{!! Html::script('js/common/app.js') !!} --}}

{!! Html::script('js/common/bootstrap.min.js') !!}

{!! Html::script('js/admin/ace-extra.min.js') !!}

<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>


<!-- page specific plugin scripts -->
{{-- {!! Html::script('js/admin/bootstrap-tag.min.js') !!} --}}
{{-- {!! Html::script('js/admin/jquery.hotkeys.index.min.js') !!} --}}
{{-- {!! Html::script('js/admin/bootstrap-wysiwyg.min.js') !!} --}}

<!-- ace scripts -->
{!! Html::script('js/admin/ace-elements.min.js') !!}
{!! Html::script('js/admin/ace.min.js') !!}


<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')

{!! Html::script('js/admin/main.js') !!}


@yield('scripts')